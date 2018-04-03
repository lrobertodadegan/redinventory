<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>
    <div class="row">
        <div class="col-sm-2">
            <?php echo $__env->make('adm.menuLateral', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col">
            <div class="centroAdm">
                <?php echo $__env->yieldContent('centroAdm'); ?>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>