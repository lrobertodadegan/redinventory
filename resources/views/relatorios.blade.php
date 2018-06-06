@extends('templates.master')
@section('css')
@endsection
@section('centro')

    <div class="row telas">
        <div class="col-sm-12 text-center">
            <h2>Relatórios</h2>
            <div class="form-inline">
                <label for="tipo">Tipo de relatório:</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="0">Selecione</option>
                    <option value="simples">Simples</option>
                    <option value="completo">Completo</option>
                </select>
            </div>
            <div id="informacoes"></div>
            <div class="form-group">
                <button class="btn-btn-outline-secondary">Download</button>
            </div>
        </div>
    </div>

@endsection
@section('js')

<script>
    $('#tipo').on('change', function(){

        if($('#tipo').val() == "simples")
            var mensagem = "Exibe informações básicas como Hostname, MAC, SO e IP.";
        else
            var mensagem = "";

        $('#informacoes').html(mensagem);
    });
</script>

@endsection