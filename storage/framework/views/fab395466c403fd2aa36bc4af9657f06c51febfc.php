<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Site05</title>
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style_mobile.css')); ?>" rel="stylesheet">
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row cabecalho pc">
                <div class="col-sm-2 text-center logo">
                    <a href="<?php echo e(env('APP_URL')); ?>:8000"><img src="<?php echo e(asset('imagens/logo.jpeg')); ?>"/></a>
                </div>
				<div class="col-sm-7 text-center pesquisa">
                    <form class="navbar-form">
        				<div class="form-inline">
          					<input id="pesquisaInput" type="text" placeholder="Pesquisar peça ou categoria">
							<button type="submit" class="btn btn-default"><i class="fab fa-searchengin"></i></button>
						</div>
      				</form>
					<div class="linksCabecalho">
						<ul class="nav justify-content-center">
  							<li class="nav-item">
	    						<a class="nav-link" href="/sobre">Sobre</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" href="/sobre/#servicos">Serviços</a>
  							</li>
  							<li class="nav-item">
    							<a class="nav-link" href="/produtos">Produtos</a>
  							</li>
  							<li class="nav-item">
	    						<a class="nav-link" href="/sobre/#localizacao">Localização</a>
  							</li>
						</ul>
					</div>
                </div>
                <div class="col-sm-3 text-center botoesCabecalho">
                    <nav id="navbar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalVisita"><i class="far fa-calendar-alt"></i><br>Agendar Visita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalEmail"><i class="far fa-envelope"></i><br>Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
			<!-- Mobile -->
            <div class="row cabecalho mobile">
                <div class="col-sm-2 text-left logo_mobile">
                    <a href="<?php echo e(env('APP_URL')); ?>:8000"><img src="<?php echo e(asset('imagens/logo.jpeg')); ?>"/></a>
                </div>				
				<div class="dropdown">
  					<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="menuCabecalho" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					<i class="fas fa-bars"></i>
  					</button>
  					<div class="dropdown-menu" aria-labelledby="menuCabecalho">
    					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalVisita">Agendar Visita</a>
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEmail">Contato</a>
  					</div>
				</div>
            </div>
			<!--Modal de contato -->
    		<div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="contatoModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
                		<form action="/" method="POST" class="form-group">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<div class="modal-header">
								<h5 class="modal-title" id="contatoModalLabel">Contato</h5>
                        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            		<span aria-hidden="true">&times;</span>
                        		</button>
                    		</div>
                    		<div class="modal-body">
                        		<div class="form-inline">
                            		<input name="nome" type="text" class="form-control form-control-sm" placeholder="Nome Completo" required>
                            		<input name="contato" type="text" class="form-control form-control-sm" placeholder="E-mail ou telefone" required>
                        		</div>
                        		<div class="form-group">
                    				<input name="assunto" type="text" class="form-control form-control-sm" placeholder="Assunto">
                        		</div>
                        		<div class="form-group">
                    				<textarea name="mensagem" type="text" class="form-control form-control-sm" placeholder="Mensagem" required></textarea>
                        		</div>
                        		<button type="submit" class="btn btn-sm btn-primary" id="btnEnviarEmail">Enviar</button>
                    		</div>
                		</form>
            		</div>
        		</div>
    		</div>
			<!--Modal de Agendamento de Visita -->
    		<div class="modal fade" id="modalVisita" tabindex="-1" role="dialog" aria-labelledby="visitaModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
                		<form action="/" method="POST" class="form-group">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<div class="modal-header">
								<h5 class="modal-title" id="visitaModalLabel">Agendar Visita</h5>
                        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            		<span aria-hidden="true">&times;</span>
                        		</button>
                    		</div>
                    		<div class="modal-body">
                        		<div class="form-inline">
                            		<input name="nome" type="text" class="form-control form-control-sm" placeholder="Nome Completo" required>
                            		<input name="contato" type="text" class="form-control form-control-sm" placeholder="E-mail ou telefone" required>
                        		</div>
                        		<div class="form-group">
                    				<input name="problema" type="text" class="form-control form-control-sm" placeholder="Resumo do problema">
                        		</div>
                        		<div class="form-group">
                    				<input name="horario" type="datetime-local" class="form-control form-control-sm" placeholder="12/05/2018 10:00">
                        		</div>
                        		<button type="submit" class="btn btn-sm btn-primary" id="btnEnviarEmail">Enviar</button>
                    		</div>
                		</form>
            		</div>
        		</div>
    		</div>

        <?php echo $__env->yieldContent('centro'); ?>
		
			<div class="row rodape">
				<div class="col-sm-3 text-left">
                	<h5 class="text-center">Dúvidas</h5>
					<a href="#" data-toggle="modal" data-target="#modalComprar">Como comprar</a><br>
					<a href="/sobre/#servicos">Atendimento</a><br>
					<a href="/sobre/#localizacao">Como chegar</a><br>
					<a href="/sobre/#servicos">Visita técnica agendada</a><br>
				</div>
				<div class="col-sm-3 text-left">
					<h5 class="text-center">Institucional</h5>
					<a href="/sobre">Sobre</a><br>
					<a href="/sobre/#localizacao">Localização</a><br>
					<a href="#" data-toggle="modal" data-target="#modalEmail">Contato</a><br>
				</div>
				<div class="col-sm-3 text-left">
					<h5 class="text-center">Horário e Atendimento</h5>
					<p>Segunda a Sexta-feira: 8h - 18h</p>
					<p>Sábado: 10h - 17h</p>
				</div>
				<div class="col-sm-3 text-center social">
					<img src="<?php echo e(asset('imagens/logo.jpeg')); ?>"/><br>
					<a href="https://www.facebook.com/informaticaclock/?ref=aymt_homepage_panel">
						<i class="fab fa-facebook-square"></i>
					</a>
					<a href="https://www.instagram.com/clockinformatica/">
						<i class="fab fa-instagram"></i>
					</a>
					<!--<i class="fab fa-google-plus"></i>
					<i class="fab fa-youtube"></i>-->
				</div>
				<small>Endereço | Clock Informática - Serviços de Tecnologia da Informação | Desenvolvido por Lucas.</small>
			</div>
		</div>
		
		<!--Modal Como comprar -->
    		<div class="modal fade" id="modalComprar" tabindex="-1" role="dialog" aria-labelledby="comprarModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="comprarModalLabel">Como comprar</h5>
                        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           		<span aria-hidden="true">&times;</span>
                        	</button>
                    	</div>
                    	<div class="modal-body">
                        	<p class="text-justify">
								Por enquanto só realizamos vendas presencialmente. Venha conferir nossa loja e atendimento personalizado! Caso não queira sair de casa
								, nós vamos até você! Basta agendar uma visita no topo do site!
							</p>
                    	</div>
            		</div>
        		</div>
    		</div>

        <script src="<?php echo e(asset('jquery/jquery.min.js')); ?>"></script>
		<script src="<?php echo e(asset('jquery/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/js.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
		<script>
			$.ajaxSetup({
    			headers: {
        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
			});
			$( function(){
    			var availableTags = [
      				"teste"
    			];
    			$("#pesquisaInput").autocomplete({
      				source: availableTags
    			});
  			});
		</script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>