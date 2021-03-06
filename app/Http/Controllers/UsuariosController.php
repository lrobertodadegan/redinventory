<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use App\Repositories\UsuarioRepository;
use App\Validators\UsuarioValidator;

/**
 * Class UsuariosController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsuariosController extends Controller
{
    /**
     * @var UsuarioRepository
     */
    protected $repository;

    /**
     * @var UsuarioValidator
     */
    protected $validator;

    /**
     * UsuariosController constructor.
     *
     * @param UsuarioRepository $repository
     * @param UsuarioValidator $validator
     */
    public function __construct(UsuarioRepository $repository, UsuarioValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        if($request->login == 'admin' && $request->senha == ''){
            //primeiro acesso pq a senha é obrigatória no cadastro
            $resposta = redirect('/configuracaoInicial');
        }else{
            $usuario = $this->repository->findWhere(['login' => $request->login, 'senha' => $request->senha])->first();

            if(!$usuario){
                $resposta = redirect('/')->with('mensagem','Dados incorretos. Tente novamente.');
            }else{
                session()->put(['usuario' => $usuario->nome]);
                $resposta = redirect('/dashboard');
            }
        }

        return $resposta;
    }

    public function logout(){
        session()->flush();

        return redirect('/');
    }

    public function listar(){
        $usuarios = $this->repository->all();

        return view('usuarios', ['usuarios' => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UsuarioCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(UsuarioCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $usuario = $this->repository->create($request->all());

            $response = [
                'message' => 'Usuario created.',
                'data'    => $usuario->toArray(),
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
        $usuario = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $usuario,
            ]);
        }

        return view('usuarios.show', compact('usuario'));
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
        $usuario = $this->repository->find($id);

        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UsuarioUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UsuarioUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $usuario = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Usuario updated.',
                'data'    => $usuario->toArray(),
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
                'message' => 'Usuario deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Usuario deleted.');
    }
}
