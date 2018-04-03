<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="row" id="sobre">
        <div class="col text-center">
			<h3>Sobre</h3>
			<p>
				A Clock informática foi fundada em 2018, na cidade de Santo Amaro da Imperatriz - SC, pelos Técnicos Flauvi Klock Neto e Jarbas Ferreira Dias.
				Sua principal missão é levar o que há de melhor em Soluções para informática sempre mantendo a qualidade nos serviços/produtos e preços justos.
			</p>
		</div>
	</div>
	<div class="row equipe">
		<div class="col text-center">
			<h3>Equipe</h3>
		</div>
	</div>
	<div class="row" id="equipe">
		<div class="col equipeMembro">
			<img src="<?php echo e(asset('imagens/equipe/membro1.jpeg')); ?>" class="rounded-circle"/>
		</div>
		<div class="col equipeMembro">
			<div class="equipeMembroTexto">
				<h5>Flavio Klock Neto</h5>
				<p>Técnico em informática e sócio fundador da Clock Informática.</p>
			</div>
		</div>
	</div>
	<div class="row equipe">
		<div class="col equipeMembro">
			<div class="equipeMembroTexto">
				<h5>Jarbas Ferreira Dias</h5>
				<p>Técnico em informática especializado com manutenção de eletrônicos e administração de redes e sócio na Clock Informática.</p>
			</div>
		</div>
		<div class="col equipeMembro">
			<img src="<?php echo e(asset('imagens/equipe/membro2.jpeg')); ?>" class="rounded-circle"/>
		</div>
	</div>
	<div id="servicos" class="row">
		<div class="col text-center">
			<h3>Serviços</h3>
		</div>
	</div>
	<div class="row servicos pc">
        <div class="col text-center ">
			<h5>Manutenção</h5>
			<p>
				Trabalhamos com manutenção de Computadores e Notebooks, montagem e diagnóstico de problemas,
				com profissionais sempre muito bem qualificados prontos para solucionar seu problema.
			</p>
		</div>
		<div class="col text-center ">
			<h5>Produtos</h5>
			<p>
				Trabalhamos com uma vasta variedade de produtos de alta qualidade para informática garantindo preços justos.
			</p>
		</div>
		<div class="col text-center ">
			<h5>Visita técnica agendada</h5>
			<p>
				Oferecemos o serviço a domicílio para as pessoas que desejam um atendimento especializado sem que precise sair do conforto de seu lar.
			</p>
		</div>
	</div>
	<div class="row servicos mobile">
        <div class="text-center">
			<h5>Manutenção</h5>
			<p>
				Trabalhamos com manutenção de Computadores e Notebooks, montagem e diagnóstico de problemas,
				com profissionais sempre muito bem qualificados prontos para solucionar seu problema.
			</p>
		</div>
		<div class="text-center">
			<h5>Produtos</h5>
			<p>
				Trabalhamos com uma vasta variedade de produtos de alta qualidade para informática garantindo preços justos.
			</p>
		</div>
		<div class="text-center">
			<h5>Visita técnica agendada</h5>
			<p>
				Oferecemos o serviço a domicílio para as pessoas que desejam um atendimento especializado sem que precise sair do conforto de seu lar.
			</p>
		</div>
	</div>
	<div class="row" id="localizacao">
        <div class="col text-center ">
			<h3>Localização</h3>
			<div class="row mapa">
        		<div id="mapa"></div>
    		</div>
			<a target="_blank" href="https://www.google.com.br/maps/place/Condom%C3%ADnio+Palmas+da+Imperatriz/@-27.6794142,-48.7529882,16.37z/data=!4m5!3m4!1s0x9520cafce3d31933:0x4834d255b3b2b745!8m2!3d-27.680074!4d-48.750865">
				Rua Presidente Castelo Branco N° 200, Condomínio Palmas da Imperatriz,  Bloco 5b, apartamento 304<br>Santo Amaro da Imperatriz - SC
			</a>
		</div>
	</div>
	<div class="row pc" id="trabalhe">
        <div class="col text-center">
			<h3>Trabalhe conosco</h3>
			<form action="trabalhe" method="POST" class="form-group">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="form-inline">
						<input name="nome" type="text" class="form-control form-control-sm" placeholder="*Nome Completo" required>
						<input name="contato" type="text" class="form-control form-control-sm" placeholder="*E-mail ou telefone" required>
					</div>
					<div class="form-inline">
						<label for="cv">Currículo: </label>
						<input type="file" class="form-control-file cvArquivo" name="cv" required>
					</div>
					<div class="form-group">
						<textarea name="mensagem" type="text" class="form-control form-control-sm" placeholder="Resumo sobre suas experiências"></textarea>
					</div>
					<button type="submit" class="btn btn-sm btn-primary" id="btnEnviarEmail">Enviar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row mobile" id="trabalhe">
        <div class="col text-center">
			<h3>Trabalhe conosco</h3>
			<form action="trabalhe" method="POST" class="form-group">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="form-group">
						<input name="nome" type="text" class="form-control form-control-sm" placeholder="*Nome Completo" required>
						<input name="contato" type="text" class="form-control form-control-sm" placeholder="*E-mail ou telefone" required>
					</div>
					<div class="form-group">
						<label for="cv">Currículo: </label>
						<input type="file" class="form-control-file cvArquivo" name="cv" required>
					</div>
					<div class="form-group">
						<textarea name="mensagem" type="text" class="form-control form-control-sm" placeholder="Resumo sobre suas experiências"></textarea>
					</div>
					<button type="submit" class="btn btn-sm btn-primary" id="btnEnviarEmail">Enviar</button>
				</div>
			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="http://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAPS_KEY')); ?>&amp;sensor=false"></script>
<script>
	var map;
 
	function initialize() {
    	var latlng = new google.maps.LatLng(-27.6794142,-48.7529882);

    	var options = {
        	zoom: 15,
        	center: latlng,
        	mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
 
    	map = new google.maps.Map(document.getElementById("mapa"), options);

    	var marker = new google.maps.Marker({
        	position: latlng,
        	title: "Informática Clock",
        	map: map
    	});
	}
 
	initialize();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>