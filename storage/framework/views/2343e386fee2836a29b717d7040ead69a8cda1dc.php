<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site01</title>
    <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <style>
        body{
            background:#000;
        }
        .cabecalho a,
        a:hover{
            color: white;
            text-decoration:none;
            text-transform: uppercase;
        }
        .logo a{
            font-size:2em;
        }
        .rodape{
            bottom:0;
        }
        .cabecalho, .rodape{
            background:rgba(1,1,1,0.8);
            color:white;
            height:50px;
            line-height:50px;
        }
        .mensagem{
            position: absolute;
            width:40%;
            margin:1% 30%;
            z-index:5;
        }
    </style>    
    <?php echo $__env->yieldContent('css'); ?>
  </head>
  <body>
    <div class="container-fluid cabecalho">
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 logo">
                <a href="/" title="Logo"><i class="fa fa-american-sign-language-interpreting"></i></a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="/<?php echo e(env('MENU_1')); ?>" title="Aba <?php echo e(env('MENU_1')); ?>"><span><?php echo e(env('MENU_1')); ?></span></a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="/<?php echo e(env('MENU_2')); ?>" title="Aba <?php echo e(env('MENU_2')); ?>"><span><?php echo e(env('MENU_2')); ?></span></a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="/<?php echo e(env('MENU_3')); ?>" title="Aba <?php echo e(env('MENU_3')); ?>"><span><?php echo e(env('MENU_3')); ?></span></a>
            </div>
            <div class="col-md-5 text-right">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalEmail">Contato</button>
            </div>
        </div>
    </div>
    <!-- Modal de mensagens -->
    <?php if(isset($mensagem)): ?>
        <?php if($mensagem['sucesso']): ?>
            <div class="alert alert-success mensagem">
        <?php else: ?>
            <div class="alert alert-danger mensagem">
        <?php endif; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>               
                <?php echo e($mensagem['mensagem']); ?>

            </div>
    <?php endif; ?>

    <!--Modal de contato-->
    <div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contato</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tituloMensagem">Título: </label>
                            <input type="text" class="form-control" name="tituloMensagem" placeholder="Orçamento">
                        </div>
                        <div class="form-group">
                            <label for="corpoMensagem">Mensagem: </label>
                            <textarea class="form-control" name="corpoMensagem" rows="3" placeholder="O motivo do meu contato é..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Fechar</button>
                        <button type="submit" class="btn btn-dark" id="btnEnviarEmail">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('centro'); ?>

    <footer class="container-fluid text-center rodape">
        <div class="row">
            <div class="col-sm-4 text-center footerEndereco">
                <span><?php echo e(env('EMPRESA_ENDERECO')); ?></span>
            </div>
            <div class="col-sm-4 text-center footerNome">
                <span>&reg;<?php echo e(date('Y')); ?> <i class="fa fa-american-sign-language-interpreting"></i> <?php echo e(env('EMPRESA_NOME')); ?></span>
            </div>
            <div class="col-sm-4 text-center footerNumero">
                <span><i class="fa fa-whatsapp"></i> <?php echo e(env('EMPRESA_TELEFONE')); ?></span>
            </div>
        </div>
    </footer>

    <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/js.js')); ?>"></script>
    <script>
        var altura = $(window).height();
        $('.principal').height(altura-100);
    </script>
    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html>