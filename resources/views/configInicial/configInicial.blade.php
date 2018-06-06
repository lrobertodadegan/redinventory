@extends('templates.configMaster')
@section('css')
@endsection
@section('centro')
<div class="row configInicial">
    <div class="col">
        <h2>Antes de continuar...</h2>
    </div>
</div>
<div class="row">
        <form action="/salvarConfig" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="col-sm-3 text-center configInicialLateral">
                <h2>CONFIGURAÇÃO</h2>
            </div>
            <div class="col-sm-9 configInicialForm">
                <br>
                <h3>Usuários Remotos</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_user" placeholder="Usuário Administrativo para Windows" value="{{isset($configs->win_user) ? $configs->win_user : ''}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_pass" placeholder="Senha" value="{{isset($configs->win_pass) ? $configs->win_pass : ''}}"/>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_user" placeholder="Usuário Administrativo para Linux" value="{{isset($configs->lin_user) ? $configs->lin_user : ''}}"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_pass" placeholder="Senha" value="{{isset($configs->lin_pass) ? $configs->lin_pass : ''}}"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-secondary w-100">Continuar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection