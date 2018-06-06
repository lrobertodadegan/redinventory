<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\HostCreateRequest;
use App\Http\Requests\HostUpdateRequest;
use App\Repositories\HostRepository;
use App\Validators\HostValidator;

class HostsController extends Controller
{
    protected $repository;
    protected $validator;

    public function __construct(HostRepository $repository, HostValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $hosts = $this->repository->all();

        return view('rede', ['hosts' => $hosts]);
    }

	public function indicadores(){}
	
	public function scanner($modo = 'basico'){
        set_time_limit( 600 );
        ignore_user_abort( true );

        $hostsNovos = '';

        $jaExiste = $this->repository->all();

		if($modo == 'basico'){
			for($i = 3; $i < 4; $i++){

                $alvo = '192.168.40.' . $i;

                $cadastrado = $this->repository->findWhere(['ip' => $alvo]);

                if(count($cadastrado) == 0){
                    //ping
                    exec('ping -n 1 -w 1 ' . $alvo . ' | find "TTL"', $saidaPing, $resultadoPing);
        
                    if($resultadoPing == 0){
                        //se o ping der boa
                        $ip = $alvo;
                        //tenta resolver o hostname
                        $hostname = gethostbyaddr($ip);

                        if($hostname == $ip)
                            $hostname = null;
                        //pegando o mac (tentando pegar)
                        exec('arp -a ' . $alvo, $saidaArp, $resultadoArp);

                        if($resultadoArp == 0){
                            
                            if(isset($saidaArp[3])){
                                $saidaArp = explode(" ", $saidaArp[3]);

                                $saidaArp = array_unique($saidaArp);

                                foreach($saidaArp as $arp){
                                    if(strlen($arp) == 17)
                                        $mac = $arp;
                                }

                                $saidaArp = "";

                            }else{

                                $mac = null;
                            }

                        }

                        //pegando o SO (provavelmente)
                        $ttl = explode(" ", $saidaPing[0]);
                        $ttl = explode("=", end($ttl));

                        if($ttl[1] <= 64){
                            $so = 'Linux';
                        }else if($ttl[1] > 64 && $ttl[1] <= 128 ){
                            $so = 'Windows';
                        }else{
                            $so = 'Unix';
                        }
                        
                        $dados = [
                            'hostname' => $hostname,
                            'ip'       => $ip,
                            'mac'      => $mac,
                            'so'       => $so,
                            'setor'    => null,
                            'usuario'  => null,
                            'tipo'     => null,
                            'estado'   => "Em uso",
                            'hd'       => null,
                            'ram'      => null,
                            'placa_mae'=> null,
                            'modelo'   => null,
                            'marca'    => null,
                        ];
                        
                        $hostsNovos .= $this->repository->create($dados);
                        //$hostsNovos .= json_encode($dados);
                    }
                }
            }
		}else{
			//scann avançado
		}
        
        return $hostsNovos;
}
	
    public function store(HostCreateRequest $request)
    {
        try {

            //$this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $host = $this->repository->create($request->all());

            $response = [
                'message' => 'Host created.',
                'data'    => $host->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $host = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $host,
            ]);
        }

        return view('hosts.show', compact('host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $host = $this->repository->find($id);

        return view('hosts.edit', compact('host'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  HostUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(HostUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $host = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Host updated.',
                'data'    => $host->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deleted = $this->repository->delete($request->id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Host deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Host deleted.');
    }
}
