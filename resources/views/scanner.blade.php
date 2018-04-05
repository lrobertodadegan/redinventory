@extends('templates.master')
@section('css')
@endsection
@section('centro')
    <div class="row">
        <h2>Scanner</h2>
        <div class="col">
            <button onclick="scan('simples');">Escaneamento Simples</button>
            <small>Para realizar o levantamento de ifnromações básicas a respeito dos equipamentos conectados em sua rede.<br>Neste modo, informações de hardware não são buscadas, apenas informações de rede como IP, Hostanem, MAC e o Sistema Operacional.<br>O tempo estimado da operação é de 5 minutos.</small>
        </div>
        <div class="col">
            <button onclick="scan('avancado');">Escaneamento Avançado</button>
            <small>Realiza i levantamento de informações mais detalhadas acerca dos equipamentos conectados em sua rede.<br>Neste modo, buscamos informações de rede assim como alguns detalhes do sistema Operacional e Hardware.<br>O tempo estimado da Operação é de 30 minutos.</small>
        </div>
    </div>
@endsection
@section('js')
@endsection