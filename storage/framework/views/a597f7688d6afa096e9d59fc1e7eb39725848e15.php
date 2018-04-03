<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="row conteudo">
        <div class="col text-center">
			<div id="promos" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($produto->item == "banner"): ?>
    						<li data-target="#promos" data-slide-to="0" class="active"></li>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				</ol>
  				<div class="carousel-inner slide">
					<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($produto->item == "banner"): ?>
						<div style="display:none"><?php echo e($b = 0); ?></div>
							<?php if($b == 0): ?>
    							<div class="carousel-item">
								<div style="display:none"><?php echo e($b = 1); ?></div>
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
			<div style="display:none"><?php echo e($i = 0); ?></div>
			<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($produto->item != "banner" && $i < 5): ?>
					<div class="promoProd">
						<img src="<?php echo e(asset($produto->pasta)); ?>"/>
						<h5 class="text-center"><?php echo e($produto->nome); ?></h5>
						<small class="text-justify"><?php echo e($produto->codigo); ?></small>
						<small class="text-justify"><?php echo e($produto->descricao); ?></small>
						<h5 class="text-center">R$ <?php echo e($produto->preco); ?></h5>
					</div>
					<div style="display:none"><?php echo e($i++); ?></div>
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>