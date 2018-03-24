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
            <div class="row" style="background:black;">
                <div class="col text-center" style="color:white">
                    <p>Você tem uma nova mensagem!</p>
                </div>
            </div>
            <div class="row" style="height:400px;">
                <h5>Nome do contatante:</h5>
                <p><?php echo e($dados->nomeContato); ?></p>
                <h5>Telefone pra contato:</h5>
                <p><?php echo e($dados->telefoneContato); ?></p>
                <h5>Motivo do contato:</h5>
                <p><?php echo e($dados->tituloMensagem); ?></p>
                <h5>Mensagem:</h5>
                <p><?php echo e($dados->corpoMensagem); ?></p>
            </div>
            <div class="row" style="background:black; bottom:0; height:50px; line-height:20px;">
                    <p>2018</p>
                </div>
            </div>
        </div>
    </body>
</html>
