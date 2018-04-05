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
	
	public function scann($modo = 'basico'){
		
		if($modo == 'basico'){
			$rede	= explode('.',env('REDE'));
			$rede	= $rede[0].".".$rede[1].".".$rede[2].".";
			$range	= explode('-',env('RANGE'));
			$nhosts	= $range[1] - $range[0];
			
			for($i = 0;$i < $nhosts; $i++){
				//rodar ping, nslookup ou host
				$ip			= $range[0] + $i;
				$ip			= $rede.$ip;
				
				//try{
					//$ping	= shell_exec("ping $ip -n 2");//windows
					//$ping		= explode("TTL=",$ping);
				//}catch(\Exception $e){
					$ping	= shell_exec("ping $ip -c 2");//linux
					$ping		= explode("ttl=",$ping);
				//}
				
				$ping		= $ping[1][0].$ping[1][1].$ping[1][2];
				$hostname	= shell_exec("nslookup $ip"); //ou shell_exec("host $ip");
				//tratar hostname
				$mac		= shell_exec("arp|grep $ip");
				//tratar mac
				
				if($ping['ttl'] > 64 && $ping['ttl'] <= 128){
					$so = 'Windows';
				}else{
					$so = 'Linux';
				}
				
				//salvar no banco
				$dados = [
					'hostname'	=> $hostname,
					'ip'		=> $ip,
					'mac'		=> $mac,
					'so'		=> $so,
				];
				
				$host = $this->repository->create($dados);
			}			
		}else{
			//scann avançado
		}
		
	}
	
    public function store(HostCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

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
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Host deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Host deleted.');
    }
}
