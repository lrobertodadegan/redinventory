
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

        <div class="row formAdmTitulo">
            <div class="col">
                <h3>Adicionar</h3>
            </div>
        </div>
        <div class="row formAdmOpt">
            <div class="col text-center">
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalProd">
                    <i class="fas fa-plus-circle"></i><br>
                    Novo Produto
                </a>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalBanner">
                    <i class="fas fa-plus-circle"></i><br>
                    Novo Banner
                </a>
            </div>
        </div>
        <!--Modal Produto -->
        <div class="modal fade" id="modalProd" tabindex="-1" role="dialog" aria-labelledby="produtoModalLabel" aria-hidden="true">
        	<div class="modal-dialog" role="document">
            	<div class="modal-content">
               		<form action="/salvar" method="POST" enctype="multipart/form-data" class="form-group">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<div class="modal-header">
							<h5 class="modal-title" id="produtpModalLabel">Produto Novo</h5>
                       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           		<span aria-hidden="true">&times;</span>
                       		</button>
                   		</div>
                   		<div class="modal-body">
                            <input type="hidden" name="item" value="produto"/>
                       		<div class="form-inline">
                           		<input id="codigo" name="codigo" type="text" class="form-control form-control-sm" placeholder="Código" required>
                           		<input id="nome" name="nome" type="text" class="form-control form-control-sm" placeholder="Nome" required>
                       		</div>
                       		<div class="form-group">
                   				<textarea id="descricao" name="descricao" type="text" class="form-control form-control-sm" placeholder="Descrição" required></textarea>
                            </div>
                            <div class="form-inline">
                                <label for="categoria">Categoria: </label>
                           		<select id="categoria" name="categoria" required>
									<option value="mouse">Mouse</option>
									<option value="teclado">Teclado</option>
									<option value="fone">Fones de Ouvido</option>
									<option value="hd">HD</option>
									<option value="memoria">Memória</option>
									<option value="pendrive">Pendrive</option>
                                </select>
                            </div>
                            <div class="form-group">
                           		<input id="preco" name="preco" type="number" class="form-control form-control-sm" placeholder="Preço (Ex.: '12,00')" step="0.50" required>
                            </div>
                            <div class="form-group">
                  				<input id="pasta" type="file" name="pasta">
                            </div>
                      		<button type="submit" class="btn btn-sm btn-primary" id="btnSalvarProd">Enviar</button>
                   		</div>
               		</form>
            	</div>
        	</div>
        </div>
        <!--Modal banner -->
        <div class="modal fade" id="modalBanner" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel" aria-hidden="true">
        	<div class="modal-dialog" role="document">
            	<div class="modal-content">
               		<form action="/salvar" method="POST" enctype="multipart/form-data" class="form-group">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<div class="modal-header">
							<h5 class="modal-title" id="bannerModalLabel">Banner Novo</h5>
                       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           		<span aria-hidden="true">&times;</span>
                       		</button>
                   		</div>
                   		<div class="modal-body">
                            <input type="hidden" name="item" value="banner"/>
                            <input type="hidden" name="categoria" value="banner"/>
                            <div class="form-group">
                           		<input name="nome" type="text" class="form-control form-control-sm" placeholder="Nome" required>
                   				<textarea name="descricao" type="text" class="form-control form-control-sm" placeholder="Descrição" required></textarea>
                            </div>
                            <div class="form-group">
                  				<input type="file" name="pasta"/>
                            </div>
                      		<button type="submit" class="btn btn-sm btn-primary" id="btnSalvarBanner">Enviar</button>
                   		</div>
               		</form>
            	</div>
        	</div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped tabela">
                    <thead>
                        <tr class="bg-primary" style="color:white">
							<th scope="col">Item</th>
                            <th scope="col">Código</th>
							<th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Pasta (imagem)</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
								<td><?php echo e($item->item); ?></td>
                                <td><?php echo e($item->codigo); ?></td>
                                <td><?php echo e($item->nome); ?></td>
                                <td><?php echo e($item->descricao); ?></td>
                                <td><?php echo e($item->categoria); ?></td>
                                <td><?php echo e($item->pasta); ?></td>
                                <td><?php echo e($item->preco); ?></td>
                                <td class="text-center">
                                    <a href="" onclick="prod(<?php echo e($item->id); ?>,0);"><i class="fas fa-trash"></i></a>
									<?php if($item->item != "banner"): ?>
										<a href="#" onclick="prod(<?php echo e($item->id); ?>,1);" data-toggle="modal" data-target="#modalProd"><i class="fas fa-edit"></i></a>
									<?php endif; ?>
								</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" style="margin:50px 0;">
            <div class="col">
                <h3>Visitas agendadas</h3>
                <table class="table table-striped tabela">
                    <thead>
                        <tr class="bg-primary" style="color:white">
							<th scope="col">ID</th>
                            <th scope="col">Nome do Cliente</th>
							<th scope="col">Problema</th>
                            <th scope="col">Data / Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $visitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
								<td><?php echo e($visita->id); ?></td>
                                <td><?php echo e($visita->cliente); ?></td>
                                <td><?php echo e($visita->problema); ?></td>
                                <td><?php echo e($visita->data); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.navbar-form').css({'display':'none'});
		
		function prod(id, opcao){
		
			if(opcao == 0){
				var url = "excluirProd";
			}else{
				var url = "editarProd";
				var dadosModal = function(id){
					
				};
			}
		
			$.ajax({
				type: "post",
				url: url,
				data:{id:id},
				success: function(response){
					//console.log(response);
					$('#codigo').val(response.codigo);
					$('#nome').val(response.nome);
					$('#descricao').val(response.descricao);
					$('#categoria').val(response.categoria);
					$('#preco').val(response.preco);
					$('#pasta').val(response.pasta);
				},
				error: function(){

				}
			});
		}
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>