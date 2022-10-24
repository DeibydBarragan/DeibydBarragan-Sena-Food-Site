<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importar estilos de CSS-->
    <link rel="shortcut icon" href="{{ asset('logo.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{ asset('css/styles2.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @if((session('productoCreado')) or (session('productoEliminado')) or (session('productoEditado'))
         or (session('comentarioCreado')) or (session('comentarioEliminado')) or (session('usuarioCreado')) 
         or (session('usuarioEliminado')) or (session('usuarioEditado')) or (session('productoCarrito')) 
         or (session('pedidoEditado')) or (session('pedidoEliminado')) or (session('pedidoCancelado')) 
         or (session('pedidoPagado')))
        @include('partials.notification')
    @endif
    <!--CABECERA-->
    @include('partials.headers')

        <!--CONTENIDO-->
        @yield('content')

    {{--FOOTER--}}
    @include('partials.footer')