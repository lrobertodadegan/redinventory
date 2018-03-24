<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

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

	<div id="prods"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

	<script>
		$(listaProd(0));
		
		function listaProd(idOp){

			$.ajax({
				type: "get",
				url: "listaProd/" + idOp,
				success: function(response){
					$('.promoProd').remove();//remove as divs de resultados anteriores

					if(response.length >= 1){
						$('#prods').append(response);//adiciona divs novas
					}else{
						//informa que n há dados para o filtro
						$('#prods').append("<small>Nenhum registro encontrado para o filtro.</small>");
					}
				},
				error: function(e){
					console.log(e.responseText);
				}
			});
		}
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>