<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="RED Inventory, é um software web de inventário de computadores de código livre sobre a licença GPLv3.">
  		<meta name="keywords" content="RED,inventario,inventory,brazil,brasil">
  		<meta name="author" content="Lucas Roberto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RED - Configuração Inicial</title>
		<link rel="icon" href="<?php echo e(asset('imagens/red.ico')); ?>"> 
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>

        <div class="container-fluid">
            <?php echo $__env->yieldContent('centro'); ?>
        </div>

        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/js.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
        <script>
            <?php echo $__env->yieldContent('js'); ?>
        </script>
    </body>
</html>