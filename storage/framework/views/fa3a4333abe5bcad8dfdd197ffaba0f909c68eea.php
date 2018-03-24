
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
							<input type="hidden" id="idItem" name="idItem"/>
                            <input type="hidden" name="item" value="produto"/>
                       		<div class="form-inline">
                           		<input id="codigo" name="codigo" type="text" class="form-control form-control-sm" placeholder="Código" required>
                           		<input id="nome" name="nome" type="text" class="form-control form-control-sm" placeholder="Nome" required>
                       		</div>
                       		<div class="form-group">
                   				<textarea id="descricao" name="descricao" type="text" class="form-control form-control-sm" placeholder="Descrição" maxlength="60" required></textarea>
                            </div>
                            <div class="form-inline">
                                <label for="categoria">Categoria: </label>
                           		<select id="categoria" name="categoria" required>
									<option value="geral"><i class="fas fa-warehouse"></i> Geral</option>
									<option value="acessorios"><i class="fas fa-boxes"></i> Acessórios</option>
									<option value="armazenamento"><i class="far fa-hdd"></i> Armazenamento</option>
									<option value="fones"><i class="fas fa-headphones"></i> Fones de Ouvido</option>
									<option value="memoria"><i class="fas fa-microchip"></i> Memória</option>
									<option value="mouse"><i class="fas fa-mouse-pointer"></i> Mouse</option>
									<option value="teclado"><i class="fas fa-keyboard"></i> Teclado</option>
									<option value="peca"><i class="fas fa-cogs"></i> Peça</option>
                                </select>
                            </div>
                            <div class="form-group">
                           		<input id="preco" name="preco" type="number" class="form-control form-control-sm" placeholder="Preço (Ex.: '12,00')" step="0.01" maxlength="6" required>
                            </div>
							<div class="form-inline">
                                <label for="promocional">É um produto em promoção?</label>
                           		<input id="promocional" name="promocional" type="number" class="form-control form-control-sm" placeholder="0 para não e 1 para sim" maxlength="1" required>
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
							<th scope="col">Promocional</th>
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
								<td><?php echo e($item->promocional); ?></td>
                                <td class="btnTblAdm">
									<form action="/excluir" method="post">
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
										<input type="hidden" name="id" value="<?php echo e($item->id); ?>"/>
                                    	<button type="submit">
											<i class="fas fa-trash"></i>
										</button>
									</form>
									<?php if($item->item != "banner"): ?>
										<button onclick="prod(<?php echo e($item->id); ?>);" data-toggle="modal" data-target="#modalProd">
											<i class="fas fa-edit"></i>
										</button>
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
                <div class="formAdmTitulo">
                    <h3>Visitas agendadas</h3>
                </div>
                <table class="table table-striped tabela">
                    <thead>
                        <tr class="bg-primary" style="color:white">
							<th scope="col">ID</th>
                            <th scope="col">Nome do Cliente</th>
                            <th scope="col">Contato</th>
							<th scope="col">Problema</th>
                            <th scope="col">Data / Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $visitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
								<td><?php echo e($visita->id); ?></td>
                                <td><?php echo e($visita->nome); ?></td>
                                <td><?php echo e($visita->contato); ?></td>
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
		
		function prod(id){
			$.ajax({
				type: "get",
				url: "/editarProd/" + id,
				success: function(response){
					//console.log(response);
					$('#idItem').val(response.id);
					$('#codigo').val(response.codigo);
					$('#nome').val(response.nome);
					$('#descricao').val(response.descricao);
					$('#categoria').val(response.categoria);
					$('#preco').val(response.preco);
                    $('#promocional').val(response.promocional);
				},
				error: function(e){
                
				}
			});
		}
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>