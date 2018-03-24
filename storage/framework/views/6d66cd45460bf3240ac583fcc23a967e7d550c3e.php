
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="formAdmTitulo">
                <h3>Adicionar...</h3>
            </div>
            <form class="formAdm" action="/salvarMidia" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="row formAdmCabecalho">
                    <div class="col text-center">
                        <input class="form-check-input" type="radio" name="tipoMidia" id="tipoMedia" value="foto" onclick="mostraFotos();">
                        <label class="form-check-label" for="tipoMedia">Fotos</label>
                    </div>
                    <div class="col text-center">
                        <input class="form-check-input" type="radio" name="tipoMidia" id="tipoMedia" onclick="mostraVideos();" value="video">
                        <label class="form-check-label" for="tipoMedia">Videos</label>
                    </div>
                </div>
                <div class="row adcFotos">
                    <div class="col" id="inputFotos">
                        <input type="file" class="form-control-file fotoArquivo" name="fotoArquivo">
						<label id="lblDescFoto" for="nomeFoto">Descrição: </label>
						<input type="text" class="form-control fotoDescricao" name="descricaoFoto">
                        <input type="hidden" id="tipo" value="foto">
                        <input type="hidden" id="qtdFotos" value="1">
                    </div>
                </div>
                <!-- <div class="row adcFotos">
                    <div class="col acoes">
                        <a href="#" onclick="maisUmaFoto();"><i class="fas fa-plus"></i></a>
                        <a href="#" onclick="menosUmaFoto();">Desfazer</a>
                    </div>
                </div> -->
                <div class="row adcVideos">
                    <div class="col">
                        <label for="linkVideo">Link: </label>
                        <input type="text" class="form-control" name="linkVideo">
                    </div>
                    <div class="col">
                        <label for="nomeFoto">Descrição: </label>
						<input type="text" class="form-control" name="descricaoVideo">
						<input type="hidden" id="tipo" value="video">
                    </div>
                </div>
                <br><button type="submit" class="btn btn-secondary">Salvar</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome da midia</th>
                            <th scope="col">Link</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $midias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $midia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($midia->id); ?></th>
                                <td><?php echo e($midia->nome); ?></td>
                                <td><a href="<?php echo e($midia->link); ?>"><?php echo e($midia->link); ?></a></td>
                                <td><?php echo e($midia->tipo); ?></td>
                                <td><?php echo e($midia->descricao); ?></td>
                                <td class="text-center">
                                    <form action="/removeMidia" method="post">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="id" value="<?php echo e($midia->id); ?>">
                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/js.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>