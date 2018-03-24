<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('centro'); ?>

    <div class="row" id="sobre">
        <div class="col text-center">
			<h3>Sobre</h3>
			<p>
				Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto
				Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto
				Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto
			</p>
		</div>
	</div>
	<div class="row equipe">
		<div class="col text-center">
			<h3>Equipe</h3>
		</div>
	</div>
	<div class="row" id="equipe">
		<div class="col-sm-2 equipeMembro">
			<img src="<?php echo e(asset('imagens/equipe/membro1.jpeg')); ?>" class="rounded-circle"/>
		</div>
		<div class="col-sm-10 equipeMembro">
			<div class="equipeMembroTexto">
				<h5>Nome completo</h5>
				<p>Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto</p>
			</div>
		</div>
	</div>
	<div class="row equipe">
		<div class="col-sm-8 equipeMembro">
			<div class="equipeMembroTexto">
				<h5>Nome completo</h5>
				<p>Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto</p>
			</div>
		</div>
		<div class="col-sm-4 equipeMembro">
			<img src="<?php echo e(asset('imagens/equipe/membro2.jpeg')); ?>" class="rounded-circle"/>
		</div>
	</div>
	<div id="servicos" class="row">
		<div class="col text-center">
			<h3>Servicos</h3>
		</div>
	</div>
	<div class="row servicos">
        <div class="col text-center ">
			<h5>Manutenção</h5>
			<p>Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto</p>
		</div>
		<div class="col text-center ">
			<h5>Produtos</h5>
			<p>Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto</p>
		</div>
		<div class="col text-center ">
			<h5>Visita técnica agendada</h5>
			<p>Texto texto textão mais texto Texto texto textão mais texto Texto texto textão mais texto</p>
		</div>
	</div>
	<div class="row" id="localizacao">
        <div class="col text-center ">
			<h3>Localização</h3>
			<div class="row mapa">
        		<div id="mapa"></div>
    		</div>
			<a href="">Endereço</a>
		</div>
	</div>
	<div class="row" id="trabalhe">
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="http://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAPS_KEY')); ?>&amp;sensor=false"></script>
<script>
	var map;
 
	function initialize() {
    	var latlng = new google.maps.LatLng(-25.3706512,-49.1859961);

    	var options = {
        	zoom: 16,
        	center: latlng,
        	mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
 
    	map = new google.maps.Map(document.getElementById("mapa"), options);

    	var marker = new google.maps.Marker({
        	position: latlng,
        	title: "EMPRESA",
        	map: map
    	});
	}
 
	initialize();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>