<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ConfigCreateRequest;
use App\Http\Requests\ConfigUpdateRequest;
use App\Repositories\ConfigRepository;
use App\Validators\ConfigValidator;

/**
 * Class ConfigsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ConfigsController extends Controller
{
    /**
     * @var ConfigRepository
     */
    protected $repository;

    /**
     * @var ConfigValidator
     */
    protected $validator;

    /**
     * ConfigsController constructor.
     *
     * @param ConfigRepository $repository
     * @param ConfigValidator $validator
     */
    public function __construct(ConfigRepository $repository, ConfigValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $configs = $this->repository->first();

        return view('configInicial.configInicial', ['configs' => $configs]);
    }

    public static function listar(){

        $configs = \DB::select('select * from configs');

        return $configs;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  ConfigCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ConfigCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            if($request->rede == null){
                
                $rede = $_SERVER['REMOTE_ADDR'];
                $rede = explode(":",$rede)[0];
                $rede = gethostbyname($rede);

                if($rede != '127.0.0.1'){
                    $request['rede']  = $rede."/24";
                    $request['range'] = "1-254";
                }else{
                    $request['rede']  = "0.0.0.0/0";
                    $request['range'] = "0";
                }
            }

            $config = $this->repository->create($request->all());

            $response = [
                'message' => 'Config created.',
                'data'    => $config->toArray(),
            ];

            return redirect('/primeiroUsuario');

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

    public function getConfig(){

        $configs = $this->repository->first();

        $id          =  $configs->id;
        $rede        =  $configs->rede;
        $range       =  $configs->range;
        $ignore      =  $configs->ignore;
        $usuario_win =  $configs->win_user;
        $senha_win   =  $configs->win_pass;
        $usuario_lin =  $configs->lin_user;
        $senha_lin   =  $configs->lin_pass;

        return view('config',[
            'id'         => $id,
            'rede'       => $rede,
            'range'      => $range,
            'ignore'     => $ignore,
            'usuario_win'=> $usuario_win,
            'senha_win'  => $senha_win,
            'usuario_lin'=> $usuario_lin,
            'senha_lin'  => $senha_lin,
        ]);
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
        $config = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $config,
            ]);
        }

        return view('configs.show', compact('config'));
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
        $config = $this->repository->find($id);

        return view('configs.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ConfigUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ConfigUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

             if($request->rede == null){
                
                $rede = $_SERVER['HTTP_HOST'];
                $rede = explode(":",$rede)[0];
                $rede = gethostbyname($rede);

                if($rede != '127.0.0.1'){
                    $request['rede']  = $rede."/24";
                    $request['range'] = "1-254";
                }else{
                    $request['rede']  = "0.0.0.0/0";
                    $request['range'] = "0";
                }
            }

            $config = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Config updated.',
                'data'    => $config->toArray(),
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
                'message' => 'Config deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Config deleted.');
    }
}
