@extends('templates.master')
@section('css')
@endsection
@section('centro')
<div class="row telas">
    <div class="col-sm-12 text-center">
        <h2>Relatar Bug</h2>
        <form action="/salvarBug" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nomeusuario" placeholder="Seu nome completo"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="emailusuario" placeholder="Seu e-mail"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="problema" placeholder="Problema encontrado"/>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descricao" placeholder="Descrição do problema"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="caminho" placeholder="Caminho no sistema. Ex: Usuarios -> Salvar"/>
            </div>
            <div class="form-group">
                <button class="btn btn-outline-secondary w-100">Relatar Bug</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection