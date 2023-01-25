@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Carrito')

{{--CONTENIDO--}}
@section('content')

@if ($pedido == false)
  <div class="row col-12 justify-content-center mt-4">
    <div class="col col-10 col-sm-8 col-md-6 col-xl-4 col-xxl-3">
      <h1>Carrito de compras</h1>
      <h4>No hay productos en tu carrito</h4>
      <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
        <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
      </svg>
    </div>
  </div>
@else
<div class="container col-12 col-xl-11 mt-4 mt-lg-2">
    <div class="row col-11 justify-content-center">
      <div class="col col-lg-10 col-xl-10">
        <h1>Carrito de compras</h1>
      </div>
    </div>
    <div class="row">
          <div class="row col-md-9 col-lg-9 mt-2 gap-2 gap-sm-3 justify-content-center">
              @foreach($productosPedido as $producto) 
                    @include('consumidor.partials.contenedorCarrito')
              @endforeach 
          </div>

          <div class="col mt-2 mt-sm-0 col-sm-10 col-md-3">
              <div class="row p-3 rounded-3 shadow border border-1">
                  <h3>Suma</h3>
                  <h4>{{ $pedido->CantidadProductos }} producto(s)</h4>
                  <div class="row">
                    <div class="col col-8">
                      <h4>Total</h4>
                    </div>
                    <div class="col col-4">
                      <h4>${{ $pedido->Precio }}</h4>
                    </div>
                  </div>
                  <div class="row mt-2 ms-1">
                    @include('consumidor.partials.contenedorMetodos')
                      <button class="botonMenu" name="pagar" data-bs-toggle="modal" data-bs-target="#metodoPago">
                        Pagar
                      </button>
                  </div>
              </div>
              <div class="row mt-3">
              </div>
          </div>
    </div>
  </div>
@endif

@endsection