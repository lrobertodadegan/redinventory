
<?php $__env->startSection('css'); ?>
<style>
.principal{
    font-size:10em;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="principal">
<i class="fa fa-blackberry"></i>
<i class="fa fa-address-card"></i>
<i class="fa fa-amazon"></i>
<i class="fa fa-apple"></i>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>