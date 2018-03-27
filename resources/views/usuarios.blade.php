@extends('templates.master')
@section('css')
@endsection
@section('centro')
    <div class="row">
        <div class="col">
            <h2>Usuários</h2>
            <form action="/cadUsuario" method="post">
                <input type="text" name="nome" class="form-control"/>
                <input type="text" name="email" class="form-control"/>
                <input type="text" name="login" class="form-control" required/>
                <input type="password" name="senha" class="form-control" required/>
                <button class="btn btn-secondary-outline">Salvar</button>
            </form>
        </div>
    </div>
    <div class="row">
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
                        @foreach($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{$usuario->id}}</th>
                                <td>{{$usuario->nome}}</td>
                                <td>{{$usuario->login}}</td>
                                <td>{{$usuario->email}}</td>
                                <td class="text-center">
                                    <form action="/delUsuario" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="id" value="{{$midia->id}}">
                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
@section('js')
@endsection