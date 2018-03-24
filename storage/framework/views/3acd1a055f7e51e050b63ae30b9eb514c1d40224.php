<div class="row conteudoProd">
		<div class="col">
			<h3 class="text-center">Produtos</h3>
			<div class="filtroProd">
				<form id="formFiltroProd" class="form-group">
					<input type="text" class="form-control" name="filtro" placeholder="Pesquisar por nome, modelo, código ou preço (Ex.: 'Mouse')">
					<button type="submit" style="display:none;"></button>
				</form>
			</div>
		</div>
	</div>
	<div class="row" style="margin:0 10%;">
		<div class="col-sm-6 filtroBtn">
			<div class="form-inline">
				<div class="dropdown">
  					<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="ordenarProd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Ordenar por
  					</button>
  					<div class="dropdown-menu" aria-labelledby="ordenarProd">
    					<a class="dropdown-item" href="#" onclick="listaProd(2);"><i class="fas fa-dollar-sign"></i> Preço</a>
    					<a class="dropdown-item" href="#" onclick="listaProd(0);"><i class="fas fa-sort-alpha-up"></i> A-Z</a>
    					<a class="dropdown-item" href="#" onclick="listaProd(1);"><i class="fas fa-sort-alpha-down"></i> Z-A</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="categoriaProd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Categoria
  					</button>
					<div class="dropdown-menu" aria-labelledby="categoriaProd">
    					<a class="dropdown-item" href="#" onclick="listaProd('mouse');"><i class="fas fa-mouse-pointer"></i> Mouses</a>
    					<a class="dropdown-item" href="#" onclick="listaProd('teclado');"><i class="fas fa-keyboard"></i> Teclados</a>
    					<a class="dropdown-item" href="#" onclick="listaProd('fone');"><i class="fas fa-headphones"></i> Fones de Ouvido</a>
						<a class="dropdown-item" href="#" onclick="listaProd('hd');"><i class="fas fa-hdd"></i> HD</a>
						<a class="dropdown-item" href="#" onclick="listaProd('memoria');"><i class="fas fa-save"></i> Memória</a>
						<a class="dropdown-item" href="#" onclick="listaProd('pendrive');"><i class="fab fa-usb"></i> Pendrive</a>
  					</div>
				</div>
			</div>
		</div>
	</div>

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