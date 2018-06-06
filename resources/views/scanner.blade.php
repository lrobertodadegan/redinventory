@extends('templates.master')
@section('css')
@endsection
@section('centro')
<div class="row telas">
    <div class="col-sm-12 text-center">
        <h2>Scanner</h2>
        <div class="row scanner">
            <div class="col-sm-6 text-justify">
                <button class="btn btn-outline-secondary w-100" onclick="scan('basico');">Escaneamento Simples</button>
                <small>
                    Para realizar o levantamento de ifnromações básicas a respeito dos equipamentos conectados em sua rede.
                    Neste modo, informações de hardware não são buscadas, apenas informações de rede como IP, Hostanem, MAC e o Sistema Operacional.
                    O tempo estimado da operação é de 5 minutos.
                </small>
            </div>
            <div class="col-sm-6 text-justify">
                <button class="btn btn-outline-secondary w-100" onclick="scan('avancado');">Escaneamento Avançado</button>
                <small>
                    Realiza o levantamento de informações mais detalhadas acerca dos equipamentos conectados em sua rede.
                    Neste modo, buscamos informações de rede assim como alguns detalhes do sistema Operacional e Hardware.
                    O tempo estimado da Operação é de 30 minutos.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script>
    function scan(modo){
        $.ajax({
            method: "post",
            data:{'_token':'{{csrf_token()}}'},
            url: "/scanner/" + modo,
            success:function(resposta){
                console.log(resposta);
            },
            error:function(e){
                console.log(e.responseText);
            },
        });
    }
</script>

@endsection