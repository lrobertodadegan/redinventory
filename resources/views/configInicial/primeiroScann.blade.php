@extends('templates.configMaster')
@section('css')
@endsection
@section('centro')
 <div class="row configInicial">
        <h2>Antes de continuar...</h2>
        <form action="/salvarRede" method="post">
            <div class="col configInicialLateral">
                <h2>REDE</h2>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="rede" placeholder="Endereço da rede para escaneamento"/>
                <input type="text" class="form-control" name="range" placeholder="Range para escaneamento"/>
                <input type="text" class="form-control" name="ignore" placeholder="Ignorar estes hosts"/>
            </div>
            <button type="submit" class="btn btn-secondary-outline">Cadastrar e scanear Agora</button>
            <button onclick="toHome();" class="btn btn-secondary-outline">Cadastrar e scannear mais tarde</button>
        </form>
<!-- Modal welcome -->
        <div class="modal fade" id="modalWelcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        		<div class="modal-dialog" role="document">
            		<div class="modal-content">
                		<form action="/" method="POST" class="form-group">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Muito bem!</h5>
                        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            		<span aria-hidden="true">&times;</span>
                        		</button>
                    		</div>
                    		<div class="modal-body">
                        		<p>Suas configurações foram salvas com sucesso! Antes de continuar, queremos que saiba que os dados capturados pelo sistema não serão compartilhados com terceiros. Aquilo que vemos aqui, permanecerá aqui, a não ser que euria enviar estes dados para outras pessoas, o que não é da nossa conta.</p>
                                <p>Fique a vontade! Nossa documentação pode ser encontrada fácilmente no GitHub <a href="">aqui</a>.
                                <p>Bom trabalho!</p>
                                <p>Lucas Roberto Daldegan<br>
                                Juliano Barreira<br>
                                Leandro Batista<br>
                                Wesley Braga<br>
                                Evandro Soares<br>
                                Ernani Maneira<br>
                                João Guilherme<br>
                                Yuri</p>
                    		</div>
                		</form>
            		</div>
        		</div>
    		</div>
    </div>
@endsection
@section('js')

$(function({
    $('#modalWelcome').modal('show');
});

@endsection