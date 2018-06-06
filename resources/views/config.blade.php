@extends('templates.master')
@section('css')
@endsection
@section('centro')
<div class="row telas">
    <div class="col-sm-12 text-center config">
        <h2>Configurações</h2>
        <form action="/atualizarConfig/{{$id}}" method="post" class="row">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-sm-6 text-right">
                <div class="form-group">
                    <label for="rede" id="lblRede">Endereço de rede + máscara:</label>
                </div>
                <div class="form-group">
                    <label for="range" id="lblRange">Range de hosts:</label>
                </div>
                <div class="form-group">
                    <label for="ignore" id="lblIgn">Ignorar Estes:</label>
                </div>
                <div class="form-group">
                    <label for="usuariowin" id="lblUsuarioWin">Dados de usuário para Windows:</label>
                </div>
                <div class="form-group">
                    <label for="usuariolin" id="lblUsuarioLin">Dados de usuário para Linux:</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="rede" value="{{$rede}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="range" value="{{$range}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ignore" value="{{$ignore}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_user" value="{{$usuario_win}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_pass" value="{{$senha_lin}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_user" value="{{$usuario_lin}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_pass" value="{{$senha_lin}}"/>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button class="btn btn-outline-secondary w-100">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
@endsection