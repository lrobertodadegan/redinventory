<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site03 - Adm Login</title>
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center login">
                    <img class="rounded-circle" src="<?php echo e(asset('imagens/logo.jpeg')); ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col loginForm">
                    <form action="logar" method="post" class="form-group">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="text" name="login" class="form-control form-control-sm" placeholder="Login">
                        <input type="password" name="senha" class="form-control form-control-sm" placeholder="Senha">
                        <small>Tecle ENTER para logar</small>
                        <button type="submit">Entrar</button>
                    </form>  
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
</html>