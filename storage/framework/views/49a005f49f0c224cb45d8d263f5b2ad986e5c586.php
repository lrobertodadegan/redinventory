<?php $__env->startSection('css'); ?>
<style>
.sobreIntro{
    margin:5% 0;
}
.sobreTexto{
    margin:2% 10%;
}
.sobreTexto h4{
    margin-bottom:3%;
}
.sobreEquipe{
    margin:5% 5%;
    border:1px solid rgb(192,192,192);
    border-radius:10px;
}
.sobreEquipe:hover{
    box-shadow:2px 2px rgb(192,192,192);
}
.sobreEquipeMembroResumo{
    border-top:1px solid rgb(192,192,192);
}
.sobreEquipeMembro img{
    height:200px;
}
.sobreEquipeMembro,
.sobreEquipeMembroResumo{
    padding:10px;
    font-size:0.8em;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="container-fluid centro">
    <div class="row">
        <div class="col text-center sobreIntro">
            <i class="fab fa-aviato" style="font-size:3em"></i><br>
            <small>Sobre nós</small>
        </div>
    </div>
    <div class="row">
        <div class="col text-justify sobreTexto">
            <h4>Blog</h4>
            <p>texto texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto 
             texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto 
              texto  texto  texto  texto  texto  texto  texto  texto  texto <p>
              <p>texto texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto 
             texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto  texto 
              texto  texto  texto  texto  texto  texto  texto  texto  texto <p>
        </div>
    </div>
    <div class="row">
        <div class="col sobreEquipeTitulo">
            <h4>Nossa equipe</h4>
        </div>
    </div>
    <div class="row">
        <div class="col sobreEquipe">
            <div class="sobreEquipeMembro text-center">
                <img class="rounded-circle" src="<?php echo e(asset('imagens/membroEquipe.jpg')); ?>" alt="Lucas Roberto"></img>
            </div>
            <div class="sobreEquipeMembroResumo text-justify">
                <h5>Lucas Roberto</h5>
                <p>texto texto texto texto texto texto texto texto texto texto texto texto</p>
            </div>
        </div>
        <div class="col sobreEquipe">
            <div class="sobreEquipeMembro text-center">
                <img class="rounded-circle" src="<?php echo e(asset('imagens/membroEquipe.jpg')); ?>" alt="Lucas Roberto"></img>
            </div>
            <div class="sobreEquipeMembroResumo text-justify">
                <h5>Lucas Roberto</h5>
                <p>texto texto texto texto texto texto texto texto texto texto texto texto</p>
            </div>
        </div>
        <div class="col sobreEquipe">
            <div class="sobreEquipeMembro text-center">
                <img class="rounded-circle" src="<?php echo e(asset('imagens/membroEquipe.jpg')); ?>" alt="Lucas Roberto"></img>
            </div>
            <div class="sobreEquipeMembroResumo text-justify">
                <h5>Lucas Roberto</h5>
                <p>texto texto texto texto texto texto texto texto texto texto texto texto</p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>