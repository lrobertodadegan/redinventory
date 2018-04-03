<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Clock Informatica e uma loja de servicos em informatica localizada em santa catarina, regiao sul do brasil, focada em atendimento ao cliente">
  		<meta name="keywords" content="HTML,CSS,JavaScript,informatica,helpdesk,help,manutencao,servicos,notebook,acessorios,produtos">
  		<meta name="author" content="Lucas Roberto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Site05</title>
        <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('jquery/jquery-ui.min.js')); ?>" rel="stylesheet">
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
					<form action="/produtos" method="post" class="navbar-form">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
        				<div class="form-inline">
          					<input id="pesquisaInput" name="pesquisa" type="text" placeholder="Pesquisar por categoria de produto">
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
							<!-- <li class="nav-item" style="color:white;"> -->
								<!-- <i class="fab fa-whatsapp" style="color:green;background:white;"></i> <b>(48) 99850-4492</b> -->
							<!-- </li> -->

							  <!-- <i class="fab fa-whatsapp"></i> (48) 99850-4492 -->
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
			<div class="cabecalho mobile">
            	<div class="row">
                	<div class="col-sm-2 text-center login_mobile">
                    	<a href="<?php echo e(env('APP_URL')); ?>:8000"><img src="<?php echo e(asset('imagens/logo.jpeg')); ?>"></a>
					</div>
					<div class="col-sm-10 linksCabecalho">
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
							<li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalVisita"><i class="far fa-calendar-alt"></i> Agendar Visita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalEmail"><i class="far fa-envelope"></i> Contato</a>
                            </li>
						</ul>
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
								<div id="whats" class="text-center">
									<b><i class="fab fa-whatsapp" style="color:green"></i></b>
									(48) 99850-4492
								</div>
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
                    				<input name="data" type="datetime-local" class="form-control form-control-sm" placeholder="12/05/2018 10:00">
                        		</div>
                        		<button type="submit" class="btn btn-sm btn-primary" id="btnEnviarEmail">Enviar</button>
                    		</div>
                		</form>
            		</div>
        		</div>
    		</div>

        <?php echo $__env->yieldContent('centro'); ?>
		
			<div class="row rodape pc">
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
					<a id="facebook" href="https://www.facebook.com/informaticaclock/">
						<i class="fab fa-facebook-square"></i>
					</a>
					<a id="insta" href="https://www.instagram.com/clockinformatica/">
						<i class="fab fa-instagram"></i>
					</a>
					<a id="whats" href="#" data-toggle="modal" data-target="#modalWhats">
						<i class="fab fa-whatsapp"></i>
					</a>
				</div>
				<small>Rua Presidente Castelo Branco N° 200, Condomínio Palmas da Imperatriz, Bloco 5b, apartamento 304 - Santo Amaro da Imperatriz - SC | Informática Clock - Serviços de Tecnologia da Informação | (48) 99850-4492</small>
			</div>

			<!--Mobile-->
			<div class="row rodape mobile">
				<div class="col-sm-3 text-center">
                	<h5>Dúvidas</h5>
					<div class="linksRodapeMobile">
						<a href="#" data-toggle="modal" data-target="#modalComprar">Como comprar</a><br>
						<a href="/sobre/#servicos">Atendimento</a><br>
						<a href="/sobre/#localizacao">Como chegar</a><br>
						<a href="/sobre/#servicos">Visita técnica agendada</a><br>
					</div>

					<h5 class="text-center">Institucional</h5>
					<div class="linksRodapeMobile">
						<a href="/sobre">Sobre</a><br>
						<a href="/sobre/#localizacao">Localização</a><br>
						<a href="#" data-toggle="modal" data-target="#modalEmail">Contato</a><br>
					</div>

					<h5 class="text-center">Horário e Atendimento</h5>
					<div class="linksRodapeMobile">
						<p>Segunda a Sexta-feira: 8h - 18h</p>
						<p>Sábado: 10h - 17h</p>
					</div>
					<div class="linksRodapeMobile">
						<img src="<?php echo e(asset('imagens/logo.jpeg')); ?>"/><br><br>
						<a id="facebook" href="https://www.facebook.com/informaticaclock/">
							<i class="fab fa-facebook-square"></i>
						</a>
						<a id="insta" href="https://www.instagram.com/clockinformatica/">
							<i class="fab fa-instagram"></i>
						</a>
						<a id="whats" href="#" data-toggle="modal" data-target="#modalWhats">
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
				</div>
				<div class="col text-center endereco">
					<small>
						WhatsApp: (48) 99850-4492<br>
						Informática Clock - Serviços de Tecnologia da Informação<br>
					</small>
				</div>
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
			<!--Modal Whats -->
    		<div class="modal fade" id="modalWhats" tabindex="-1" role="dialog" aria-labelledby="whatsModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="whatsModalLabel">Whatsapp</h5>
                        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           		<span aria-hidden="true">&times;</span>
                        	</button>
                    	</div>
                    	<div class="modal-body">
                        	<p class="text-justify">
								<i class="fab fa-whatsapp"></i> (48) 99850-4492
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
      				"geral",
					"acessorios",
					"armazenamento",
					"fones",
					"memoria",
					"mouse",
					"teclado",
					"peca"
    			];
    			$("#pesquisaInput").autocomplete({
      				source: availableTags
    			});
  			});
		</script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>