
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
<div class="row configInicial">
    <div class="col">
        <h2>Antes de continuar...</h2>
    </div>
</div>
<div class="row">
    <form action="/salvarRede" method="post">
        <div class="col configInicialLateral">
            <h2>REDE</h2>
        </div>
        <div class="col configInicialForm">
            <input type="text" class="form-control" name="rede" placeholder="Endereço da rede para escaneamento. Ex.: 192.168.0.0/24"/>
            <input type="text" class="form-control" name="range" placeholder="Range para escaneamento. Ex.: 1-254"/>
            <input type="text" class="form-control" name="ignore" placeholder="Ignorar estes hosts. Ex.: 192.168.0.25"/>
            <button type="submit" class="btn btn-secondary-outline">Cadastrar e scanear Agora</button>
            <button onclick="toHome();" class="btn btn-secondary-outline">Cadastrar e scannear mais tarde</button>
        </div>
    </form>
 <!-- Modal welcome -->
    <div class="modal fade" id="modalWelcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
        	<div class="modal-content">
           		<form action="/" method="POST" class="form-group">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Muito bem!</h5>
                   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       		<span aria-hidden="true">&times;</span>
                   		</button>
               		</div>
               		<div class="modal-body">
                   		<p>Suas configurações foram salvas com sucesso! Antes de continuar, queremos que saiba que os dados capturados pelo sistema não serão compartilhados com terceiros. Aquilo que vemos aqui, permanecerá aqui, a não ser que euria enviar estes dados para outras pessoas, o que não é da nossa conta.</p>
                           <p>Fique a vontade! Nossa documentação pode ser encontrada no GitHub <a href="https://github.com/lrobertodadegan/redinventory">aqui</a>.
                           <p>Bom trabalho!</p>
                           <small>Lucas Roberto Daldegan<br>
                           Juliano Barreira<br>
                           Leandro Batista<br>
                           Wesley Braga<br>
                           Evandro Soares<br>
                           Ernani Maneira<br>
                           João Guilherme<br>
                           Yuri</small>
               		</div>
           		</form>
        	</div>
    	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

$(function(){
    $('#modalWelcome').modal('show');
});

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.configMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>