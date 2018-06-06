<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="RED Inventory, é um software web de inventário de computadores de código livre sobre a licença GPLv3.">
  		<meta name="keywords" content="RED,inventario,inventory,brazil,brasil">
  		<meta name="author" content="Lucas Roberto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RED Inventory - Login</title>
		<link rel="icon" href="<?php echo e(asset('imagens/red.ico')); ?>"> 
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col text-center logo">
                    <img src="<?php echo e(asset('imagens/red.png')); ?>"/>
                    <form action="/login" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                        <input type="text" class="form-control" name="login" placeholder="Login"/>
                        <input type="password" class="form-control" name="senha" placeholder="Senha"/>
                        <small>Tecle ENTER para logar ou clique <a href="#" data-toggle="modal" data-target="#modalSenha">aqui</a> para receber sua senha por e-mail.</small><br>
                        <button type="submit" class="btn btn-outline-secondary" style="width:30%;margin:10px;">Entrar</button>
                    </form>
                    <div id="aviso">
                        <?php if(isset($mensagem)): ?>
                            <small><?php echo e($mensagem); ?></small>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<!--Modal Senha -->
        <div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
                		<form action="/enviarSenha" method="POST" class="form-group">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Receber Senha</h5>
                        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            		<span aria-hidden="true">&times;</span>
                        		</button>
                    		</div>
                    		<div class="modal-body">
                        		<div class="form-group">
                            		<input name="nome" type="text" class="form-control form-control" placeholder="Informe seu e-mail" required>
								</div>
                    		</div>
                    		<div class="modal-footer">
                        		<button type="submit" class="btn" id="btnEnviarEmail">Enviar</button>
                    		</div>
                		</form>
            		</div>
        		</div>
    		</div>

        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/js.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
</html>