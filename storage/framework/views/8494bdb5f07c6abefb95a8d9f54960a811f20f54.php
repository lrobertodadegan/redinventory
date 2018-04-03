<?php $__env->startSection('css'); ?>
<style>
@media  screen (max-height:640px){
    .item-slide{
        background-size:500px;
    }
}
.item-slide{
    background-image:url('<?php echo e(asset('imagens/handson2.jpg')); ?>');
    background-size:100%;
}
.legenda-slide{
    background:rgba(1,1,1,0.5);
}
.legenda-slide a h3,
.legenda-slide a h3:hover{
    color: white;
    text-decoration:none;
    text-transform:none;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner principal">
    <div class="carousel-item active">
        <div class="d-block item-slide principal" alt="First slide"></div>
        <div class="carousel-caption d-none d-md-block legenda-slide">
            <a href="/"><h3>Hands on!</h3></a>
            <span>texto texto texto texto texto texto texto </span>
        </div>
    </div>
    <div class="carousel-item">
        <div class="d-block item-slide principal" alt="Second slide"></div>
        <div class="carousel-caption d-none d-md-block legenda-slide">
            <a href="/"><h3>We work better together!</h3></a>
            <span>texto texto texto texto texto texto texto </span>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>