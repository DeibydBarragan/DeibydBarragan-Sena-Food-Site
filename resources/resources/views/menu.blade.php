@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Menú')

{{--CONTENIDO--}}
@section('content')

@if( session('productoCreado') )
  @section('mensaje',session('productoCreado'))
  @section('color','danger')
@endif
    
@if( session('productoEliminado') )

  @section('mensaje', session('productoEliminado'))
  @section('color','dark')

@endif

@if( session('productoEditado') )

  @section('mensaje', session('productoEditado'))
  @section('color','success')

@endif

@if( session('productoCarrito') )
  @section('mensaje',session('productoCarrito'))
  @section('color','danger')
@endif

    {{--FILTRAR--}}
    <div class="container-fluid col col-xxl-10 mt-3 mt-sm-2" name="catalogo">
        @include('partials.filtrar')
        <div class="row justify-content-center">
          <div class="row mt-2 col-11">
            @isset($categoria)    
              <h1>{{ $categoria }}</h1>
            @endisset
          </div>
        </div>

        @auth
          @if (Auth::user()->id_tipousuario == 3)
          <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            @foreach($productos as $producto)
              @if ($producto->Disponibilidad == 1)
                @include('partials.contenedorProducto')           
              @endif
            @endforeach
          </div>
          @else
            <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
              @foreach($productos as $producto)
                  @include('partials.contenedorProducto')
              @endforeach
            </div>
          @endif
        @endauth
        
        @guest
          <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            @foreach($productos as $producto)
              @if ($producto->Disponibilidad == 1)
                @include('partials.contenedorProducto')           
              @endif
            @endforeach
          </div>
        @endguest
        
    </div>
    
@endsection
