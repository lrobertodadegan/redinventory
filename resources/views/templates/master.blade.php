<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="RED Inventory, é um software web de inventário de computadores de código livre sobre a licença GPLv3.">
  		<meta name="keywords" content="RED,inventario,inventory,brazil,brasil">
  		<meta name="author" content="Lucas Roberto">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RED Inventory</title>
		<link rel="icon" href="{{asset('imagens/red.ico')}}"> 
        <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_mobile.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>

        <div class="container-fluid">
            @include('templates.menuLateral')
            @yield('centro')
        </div>

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/js.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/popper.min.js')}}"></script>
        <script src="{{ asset('bootstrap/dist/js/tooltip.min.js')}}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        @yield('js')
    </body>
</html>