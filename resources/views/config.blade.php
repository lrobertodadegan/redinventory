@extends('templates.master')
@section('css')
@endsection
@section('centro')
    <div class="row">
        <h2>Configurações</h2>
        <form action="/configura" method="post">
            <div class="col">
                <label for="ip_db" id="lblServidorDB">IP do Servidor de banco de dados:</label>
                <label for="ip_db" id="lblDB">Base de Dados:</label>
                <label for="ip_db" id="lblUsuarioDB">IP do Servidor de banco de dados:</label>
                <label for="ip_db" id="lblSenhaDB">Senha:</label>
                <label for="ip_db" id="lblRede">Endereço de rede + máscara:</label>
                <label for="ip_db" id="lblRange">Range de hosts:</label>
                <label for="ip_db" id="lblIgn">Ignorar Estes:</label>
                <label for="ip_db" id="lblUsuarioWin">Dados de usuário para Windows:</label>
                <label for="ip_db" id="lblUsuarioLin">Dados de usuário para Linux:</label>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="servidordb"/>
                <input type="text" class="form-control" name="db"/>
                <input type="text" class="form-control" name="usuariodb"/>
                <input type="text" class="form-control" name="senhadb"/>
                <input type="text" class="form-control" name="rede"/>
                <input type="text" class="form-control" name="range"/>
                <input type="text" class="form-control" name="ignore"/>
                <input type="text" class="form-control" name="usuariowin"/>
                <input type="text" class="form-control" name="senhawin"/>
                <input type="text" class="form-control" name="usuariolin"/>
                <input type="text" class="form-control" name="senhalin"/>
            </div>
            <button class="btn btn-secondary-outline">Salvar</button>
        </form>
    </div>
@endsection
@section('js')
@endsection