<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site04</title>
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row cabecalho">
                <div class="col-sm-2 text-center logo">
                    <a href="<?php echo e(env('APP_URL')); ?>:8000"><img src="<?php echo e(asset('imagens/colapso-avatar.png')); ?>"/></a>
                </div>
                <div class="col text-center">
                    <nav id="navbar">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="#ensaio">Ensaio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#casamento">Casamento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gestante">Gestante</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#video">Vídeo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="exibeContato();">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col text-center social">
                    <a href="https://www.facebook.com/colapso777/"><i class="fab fa-facebook-square" id="fb"></i></a>
                    <a href="https://www.instagram.com/_marcosradi/"><i class="fab fa-instagram" id="inst"></i></a>
                    <a href="https://www.youtube.com/channel/UC4VkrFOMOn7Zgy9B4hwMU-Q"><i class="fab fa-youtube" id="yt"></i></a>
                    <a href="https://vimeo.com/colapso777"><i class="fab fa-vimeo-v"></i></a>
                </div>
            </div>
        </div>

        <?php echo $__env->yieldContent('centro'); ?>

        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/js.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>