<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>
<div class="prodCentro">
	<div class="row conteudoProd">
		<div class="col">
			<h3 class="text-center">Produtos</h3>
		</div>
	</div>
	<div class="row pc" style="margin:0 10%;">
		<div class="col filtroBtn">
			<div class="form-inline">
				<label for="ordenar">Ordenar por: </label>
				<select id="ordenar" name="ordenar" onchange="ordenarEFiltrar($('#ordenar').val(),$('#categoria').val());">
					<option value="nome.asc"><i class="fas fa-sort-alpha-up"></i> A-Z</option>
					<option value="nome.desc"><i class="fas fa-sort-alpha-down"></i> Z-A</option>
					<option value="preco.asc"><i class="fas fa-dollar-sign"> Preço</option>
					<option value="promocional.desc"><i class="fas fa-tags"></i> Promocional</option>
				</select>
  				<label for="categoria">Categoria: </label>
  				<select id="categoria" name="categoria" onchange="ordenarEFiltrar($('#ordenar').val(),$('#categoria').val());">
					<option value="geral"><i class="fas fa-warehouse"></i> Geral</option>
					<option value="acessorios"><i class="fas fa-boxes"></i> Acessórios</option>
					<option value="armazenamento"><i class="far fa-hdd"></i> Armazenamento</option>
					<option value="fones"><i class="fas fa-headphones"></i> Fones de Ouvido</option>
					<option value="memoria"><i class="fas fa-microchip"></i> Memória</option>
					<option value="mouse"><i class="fas fa-mouse-pointer"></i> Mouse</option>
					<option value="teclado"><i class="fas fa-keyboard"></i> Teclado</option>
					<option value="peca"><i class="fas fa-cogs"></i> Peça</option>
				</select>
				<input type="hidden" id="categoriaPesquisa" name="categoriaPesquisa" value="<?php echo e($categoria); ?>"/>
			</div>
		</div>
	</div>

	<div id="prods"></div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

	<script>

		$(ordenarEFiltrar("nome.asc",$('#categoriaPesquisa').val()));//chama os produtos
		
		function ordenarEFiltrar(orderBy, categoria){

			console.log(orderBy + " + " + categoria);
		
			// var orderBy = $('#ordenar').val();
			// var categoria = $('#categoria').val();
			
			$.ajax({
				type: "get",
				url: "listaProd/" + orderBy + "/" + categoria,
				success: function(response){

					$('.promoProd').remove();
					$('#prods small').remove();//remove as divs de resultados anteriores

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