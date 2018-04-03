<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site03</title>
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row cabecalho">
                <div class="col-sm-2 text-left">
                    <a class="logo" href="/"><i class="fab fa-aviato"></i></a>
                </div>
                <div class="col-sm-7 text-center">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="btnTemas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Temas</button>
                                <div class="dropdown-menu temas" aria-labelledby="btnTemas">
                                    <a class="dropdown-item" href="#">Tag 1</a>
                                    <a class="dropdown-item" href="#">Tag 2</a>
                                    <a class="dropdown-item" href="#">Tag 3</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalLong">Contato</button>
                        </li>
                    </ul>
                </div>
                <div class="col form-group">
                    <form class="form-inline buscas">
                        <input type="hidden" value="<?php echo e(csrf_token()); ?>">
                        <input class="form-control form-control-sm" type="text" name="buscaGeral" placeholder="Pesquisar">
                        <button class="btn btn-outline-primary btn-sm" onclick="buscarAjax()">Buscar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal contato -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="\" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Contato</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label form="nomeContato">*Nome: </label>
                            <input class="form-control" type="text" name="nomeContato" placeholder="Nome" required>
                            <label form="emailContato">*E-mail: </label>
                            <input class="form-control" type="text" name="emailContato" placeholder="E-mail" required>
                            <label form="telefoneContato">Telefone: </label>
                            <input class="form-control" type="text" name="telefoneContato" placeholder="(99) 99999-9999">
                            <label form="mensagemContato">*Mensagem: </label>
                            <textarea class="form-control" name="mensagemContato" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar!</button>
                        </div>
                    </div>
                </form>            
            </div>
        </div>

        <?php echo $__env->yieldContent('centro'); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col text-center rodape">
                    <span><i class="fab fa-aviato" style="font-size:2em;"></i></span><br>
                    <small>Desenvolvido por Lucas.</small>
                </div>
            </div>
        </div>

        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
        <script>
            function buscarAjax(){
                console.log("clicou!");
            }
        </script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>