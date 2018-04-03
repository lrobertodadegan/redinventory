<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

<div class="container-fluid">
    <div class="row">
        <div id="portifolio" class="conteudos text-center col-sm-8">
            <div class="conteudo">
                <?php $__currentLoopData = $midias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $midia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($midia->tipo == "foto"): ?>
                        <img src="<?php echo e(asset($midia->nome)); ?>"/>
                    <?php else: ?>
                        <iframe id="youtube" type="text/html" src="<?php echo e($midia->link); ?>" frameborder="0"></iframe>
                    <?php endif; ?>
                    <p><?php echo e($midia->descricao); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p>
                <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p>
                <iframe src="https://player.vimeo.com/video/255064285?autoplay=1&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <p>Descrição</p>
                <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p>
                <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p>
                <iframe id="youtube" type="text/html" src="https://www.youtube.com/embed/2qd6LHMosrU?autoplay=1&loop=1&playlist=2qd6LHMosrU" frameborder="0"></iframe>
                <p>Descrição</p>
                <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p>
                <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                <p>Descrição.</p> -->
            </div>
            <!-- <div id="sobre" class="col text-justify">
                <h3>Sobre</h3>
                <p>
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                </p>
                <p>
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                </p>
                <p>
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                    texto texto texto texto texto texto texto texto 
                </p>
            </div> -->
        </div>
        <div class="contato col">
            <div class="contatoForm">
                <h3>Contato</h3>
                <form action="/" method="post" class="form-group">
                    <input type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                    <div class="row">
                        <div class="col">
                            <label for="nome">Nome: </label>
                            <input name="nome" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="contato">Telefone ou E-mail: </label>
                            <input name="contato" type="text" class="form-control" required>
                        </div>
                    </div>
                    <label for="assunto" >Assunto: </label>
                    <input name="assunto" type="text" class="form-control" required>
                    <label for="mensagem">Mensagem: </label>
                    <textarea name="mensagem" type="text" class="form-control" required></textarea><br>
                    <button type="submit" class="btn btn-outline-secondary" style="float:right;">Enviar</button><br>
                </form>
            </div>
            <div class="col sobre text-center">
                <h3 class="text-justify">Sobre</h3>
                <img src="<?php echo e(asset('imagens/colapso-avatar.png')); ?>" class="rounded-circle" alt="Marcos Roberto"/>
                <p class="text-justify">O Marcos é um cara muito legal que tira umas fotos maneiras! Conheço ele faz tempo, muito gente boa o piá!</p>
            </div>
            <div class="col text-center rodape">
                <small>Desenvolvido por Lucas.</small>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>