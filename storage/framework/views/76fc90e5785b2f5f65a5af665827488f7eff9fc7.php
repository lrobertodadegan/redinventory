<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($produto->item != "banner"): ?>
			<div class="promoProd">
				<img src="<?php echo e(asset($produto->pasta)); ?>"/>
				<h5 class='text-center'><?php echo e($produto->nome); ?></h5>
				<small class='text-justify'><?php echo e($produto->codigo); ?></small>
				<small class='text-justify'><?php echo e($produto->descricao); ?></small>
				<h5 class='text-center'>R$ <?php echo e($produto->preco); ?></h5>
			</div>
		<?php endif; ?>	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>