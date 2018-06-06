<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
<div class="row configInicial">
    <div class="col">
        <h2>Antes de continuar...</h2>
    </div>
</div>
<div class="row">
        <form action="/cadPrimeiroUsuario" method="post">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
            <input type="hidden" name="email" value="admin@example"/>
            <input type="hidden" name="nome" value="admin"/>
            <div class="col-sm-3 text-center configInicialLateral">
                <h2>CONFIGURAÇÃO</h2>
            </div>
            <div class="col-sm-9 configInicialForm">
                <br>
                <h3>Usuário Administrador</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Usuário administrador deste sistema" value="admin" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="senha" placeholder="Senha" required/>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-secondary w-100">Cadastrar e acessar</button>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.configMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>