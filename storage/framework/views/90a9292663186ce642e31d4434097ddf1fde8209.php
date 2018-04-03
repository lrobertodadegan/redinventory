<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="row conteudo">
        <div class="col text-center">
			<div id="promos" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($produto->item == "banner"): ?>
							<?php if($key === 0): ?>
								<li data-target="#promos" data-slide-to="<?php echo e($key); ?>" class="active"></li>
							<?php else: ?>
    							<li data-target="#promos" data-slide-to="<?php echo e($key); ?>"></li>
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</ol>
  				<div class="carousel-inner slide">
				  	
					<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($produto->item == "banner"): ?>
							<?php if($key === 0): ?>
								<div class="carousel-item active">
							<?php else: ?>
								<div class="carousel-item">
							<?php endif; ?>
      							<img class="d-block w-100" src="<?php echo e(asset($produto->pasta)); ?>" alt="Parceiro 1">
    						</div>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</div>
			</div>
		</div>
	</div>
	<div class="row conteudo">
		<div class="col produto">
			<h3 class="text-center">Produtos em promoção</h3>
		</div>
	</div>
	<div class="row conteudo pc">
		<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($produto->item != "banner"): ?>
				<div class="col-sm-3 text-center promoProd pc">
					<img src="<?php echo e(asset($produto->pasta)); ?>"/>
					<h5 class="text-center"><?php echo e($produto->nome); ?></h5>
					<div class="text-justify">
						<small><?php echo e($produto->codigo); ?></small>
						<small><?php echo e($produto->descricao); ?></small>
					</div>
					<h5 class="text-center">R$ <?php echo e($produto->preco); ?></h5>
				</div>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
		<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($produto->item != "banner"): ?>
			<div class="row conteudo mobile">
				<div class="col text-center promoProd">
					<img src="<?php echo e(asset($produto->pasta)); ?>"/>
					<h5 class="text-center"><?php echo e($produto->nome); ?></h5>
					<div class="text-justify descProd">
						<small><?php echo e($produto->codigo); ?></small>
						<small><?php echo e($produto->descricao); ?></small>
					</div>
					<div class="preco">
						<h5 class="text-center">R$ <?php echo e($produto->preco); ?></h5>
					</div>
				</div>
			</div>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>