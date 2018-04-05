
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
<div class="row configInicial">
    <div class="col">
        <h2>Antes de continuar...</h2>
    </div>
</div>
<div class="row">
        <form action="/salvarConfig" method="post">
            <div class="col configInicialLateral">
                <h2>CONFIGURAÇÃO</h2>
            </div>
            <div class="col configInicialForm">
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
                <button class="btn btn-secondary-outline">Continuar</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.configMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>