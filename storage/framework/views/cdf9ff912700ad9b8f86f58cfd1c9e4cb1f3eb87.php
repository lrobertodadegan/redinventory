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
                    <i class="fab fa-aviato" style="font-size:3em"></i><br>
                </div>
            </div>
            <div class="row">
                <div class="col loginForm">
                    <form class="form-group">
                        <input type="hidden" value="<?php echo e(csrf_token()); ?>">
                        <label for="login">Login: </label>
                        <input type="text" name="login" class="form-control" placeholder="login"><br>
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" class="form-control" placeholder="senha"><br>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalSenha">
                            Esqueci a minha senha
                        </button>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>  
                </div>
            </div>

            <!-- Modal senha -->
            <div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="/" method="post" class="form-group">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <input type="hidden" value="<?php echo e(csrf_token()); ?>">            
                                    <label for="email">Informe seu e-mail:</label>
                                    <input type="text" class="form-control" name="email">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
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