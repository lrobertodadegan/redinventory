<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background:blue;">
                <div class="col text-center" style="color:white; height:30px;">
                    <p>Você tem uma nova mensagem!</p>
                </div>
            </div>
            <div class="row" style="min-height:400px;">
                <h5>Nome:</h5>
                <p><?php echo e($dados->nome); ?></p>
                <h5>Dados pra contato:</h5>
                <p><?php echo e($dados->contato); ?></p>
                <h5>Assunto:</h5>
				<?php if($dados->has('assunto')): ?>
                	<p><?php echo e($dados->assunto); ?></p>
					<h5>Mensagem:</h5>
                	<p><?php echo e($dados->mensagem); ?></p>
				<?php else: ?>
					<h5>Problema:</h5>
                	<p><?php echo e($dados->problema); ?></p>
					<h5>Horário:</h5>
                	<p><?php echo e($dados->horario); ?></p>
				<?php endif; ?>
            </div>
            <div class="row" style="background:black; bottom:0; height:30px; line-height:20px; color:white;">
                <div class="col text-center">
                    <p>2018</p>
                </div>
            </div>
        </div>
    </body>
</html>
