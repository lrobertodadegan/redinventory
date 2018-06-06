<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
<div class="row telas">
    <div class="col-sm-12 text-center config">
        <h2>Configurações</h2>
        <form action="/atualizarConfig/<?php echo e($id); ?>" method="post" class="row">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                    <input type="text" class="form-control" name="rede" value="<?php echo e($rede); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="range" value="<?php echo e($range); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ignore" value="<?php echo e($ignore); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_user" value="<?php echo e($usuario_win); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="win_pass" value="<?php echo e($senha_lin); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_user" value="<?php echo e($usuario_lin); ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lin_pass" value="<?php echo e($senha_lin); ?>"/>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>