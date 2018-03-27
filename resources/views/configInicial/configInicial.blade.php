@extends('templates.configMaster')
@section('css')
@endsection
@section('centro')
 <div class="row configInicial">
        <h2>Antes de continuar...</h2>
        <form action="/salvarConfig" method="post">
            <div class="col configInicialLateral">
                <h2>CONFIGURAÇÃO</h2>
            </div>
            <div class="col">
                <h3>Banco de Dados</h3>
                <input type="text" class="form-control" name="servidordb" placeholder="IP do Servidor de Banco de Dados"/>
                <small>O servidor deve estar ligado e disponível.</small>
                <input type="text" class="form-control" name="senhadb"/>
                <small>Informe a senha do usuário com permissões administrativas (root) do seu banco de dados.</small>
                <h3>Usuários Remotos</h3>
                <input type="text" class="form-control" name="usuariowin" placeholder="Usuário Administrativo para Windwos"/>
                <input type="text" class="form-control" name="senhawin" placeholder="Senha"/>
                <br>
                <input type="text" class="form-control" name="usuariolin" placeholder="Usuário Administrativo para Linux"/>
                <input type="text" class="form-control" name="senhalin" placeholder="Senha"/>
            </div>
            <button class="btn btn-secondary-outline">Continuar</button>
        </form>
    </div>
@endsection
@section('js')
@endsection