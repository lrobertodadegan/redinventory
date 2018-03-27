@extends('templates.master')
@section('css')
@endsection
@section('centro')
 <div class="row">
        <h2>Relatar Bug</h2>
        <form action="/salvarBug" method="post">
            <div class="col">
                <input type="text" class="form-control" name="nomeusuario" placeholder="Seu nome completo"/>
                <input type="text" class="form-control" name="emailusuario" placeholder="Seu e-mail"/>
                <input type="text" class="form-control" name="problema" placeholder="Problema encontrado"/>
                <textarea class="form-control" name="descricao" placeholder="Descrição do problema"></textarea>
                <input type="text" class="form-control" name="caminho" placeholder="Caminho no sistema. Ex: Usuarios -> Salvar"/>
            </div>
            <button class="btn btn-secondary-outline">Relatar Bug</button>
        </form>
    </div>
@endsection
@section('js')
@endsection