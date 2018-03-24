
<?php $__env->startSection('css'); ?>
<style>
.principal{
    font-size:4em;
}
.parceiros{
    margin:5% 0 0 10%;
}
.parceiros span{
    font-size:0.5em;
}
@media  screen and (max-width:767px){
    .principal{
        height:300px;
        font-size:2em;
    }
    .pagina h5{
        font-size:0.5em;
    }
    .parceiros{
        margin-top:2%;
        margin-left:0;
        height:100px;
        line-height:0px;
    }
    .parceiros span{
        padding:0 4px;
        font-size:0.3em;
        color:white;
    }
    .parceiros i{
        color:white;
    }
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="principal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center pagina mobile">
                <h5>Parceiros</h5>
            </div>
        </div>
        <div class="row parceiros">
            <div class="col">
                <i class="fa fa-address-card"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-amazon"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-apple"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-apple"></i><br>
                <span>Texto</span>
            </div>
        </div>
        <div class="row parceiros">
            <div class="col">
                <i class="fa fa-address-card"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-amazon"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-apple"></i><br>
                <span>Texto</span>
            </div>
            <div class="col">
                <i class="fa fa-apple"></i><br>
                <span>Texto</span>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>