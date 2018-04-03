<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="container-fluid">
        <div class="row">
            <form class="formAdm">
                <h3>Adicionar...</h3>
                <input type="hidden">
                <div class="row formAdmCabecalho">
                    <div class="col text-center">
                        <input class="form-check-input" type="radio" name="tipoMedia" id="tipoMedia" value="foto" onclick="mostraFotos();">
                        <label class="form-check-label" for="tipoMedia">Fotos</label>
                    </div>
                    <div class="col text-center">
                        <input class="form-check-input" type="radio" name="tipoMedia" id="tipoMedia" onclick="mostraVideos();" value="video">
                        <label class="form-check-label" for="tipoMedia">Videos</label>
                    </div>
                </div>
                <div class="row adcFotos">
                    <div class="col" id="inputFotos">
                        <!-- <label for="fotoArquivo">Selecione o arquivo: </label> -->
                        <input type="file" class="form-control-file fotoArquivo" name="fotoArquivo"><br>
                        <input type="hidden" id="qtdFotos" value="1">
                    </div>
                </div>
                <div class="row adcFotos">
                    <div class="col acoes">
                        <a href="#" onclick="maisUmaFoto();">Adicionar foto</a>
                        <a href="#" onclick="menosUmaFoto();">Desfazer</a>
                    </div>
                </div>
                <div class="row adcVideos">
                    <div class="col text-center form-inline">
                        <label for="videoLink">Link: </label>
                        <input type="text" class="form-control" name="videoLink">
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
                            <th scope="col">Arquivo/Link</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
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