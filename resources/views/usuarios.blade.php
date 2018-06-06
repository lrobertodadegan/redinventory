@extends('templates.master')
@section('css')
@endsection
@section('centro')
    <div class="row telas">
        <div class="col-sm-12 text-center">
            <h2>Usuários</h2>
            <form action="/cadUsuario" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <input type="text" placeholder="Nome" name="nome" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="E-mail" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Login" name="login" class="form-control" required/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Senha" name="senha" class="form-control" required/>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-secondary w-100">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row telas">
        <div class="col">
            <table class="table table-striped tabela">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Login</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($usuarios))
                        @foreach($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{$usuario->id}}</th>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->login}}</td>
                                <td>{{$usuario->email}}</td>
                                <td class="text-center">
                                    <form action="/delUsuario" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="id" value="{{$usuario->id}}">
                                        <button type="submit" style="background:none;border:none;cursor:pointer;"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
@endsection