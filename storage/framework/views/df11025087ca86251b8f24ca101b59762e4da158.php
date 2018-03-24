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
        <div class="container  login">
            <div class="row">
                <div class="col text-center">
                    <img src="<?php echo e(asset('imagens/colapso-capa.jpg')); ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col loginForm">
                    <form action="adm/home" method="post" class="form-group">
                        <input type="hidden" value="<?php echo e(csrf_token()); ?>">
                        <label for="login">Login: </label>
                        <input type="text" name="login" class="form-control" placeholder="login"><br>
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" class="form-control" placeholder="senha"><br>
                        <button type="submit" class="btn btn-outline-secondary">Entrar</button>
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