<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
<div class="row telas">
    <div class="col-sm-12 text-center config">
        <h2>Configurações</h2>
        <form action="/configura" method="post" class="row">
            <div class="col-sm-6 text-right">
                <div class="form-group">
                    <label for="servidor_db" id="lblServidorDB">IP do Servidor de banco de dados:</label>
                </div>
                <div class="form-group">
                    <label for="db" id="lblDB">Base de Dados:</label>
                </div>
                <div class="form-group">
                    <label for="usuariodb" id="lblUsuarioDB">IP do Servidor de banco de dados:</label>
                </div>
                <div class="form-group">
                    <label for="senhadb" id="lblSenhaDB">Senha:</label>
                </div>
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
                    <input type="text" class="form-control" name="servidordb"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="db"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuariodb"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="senhadb"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="rede"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="range"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ignore"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuariowin"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="senhawin"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuariolin"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="senhalin"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-secondary w-100">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>