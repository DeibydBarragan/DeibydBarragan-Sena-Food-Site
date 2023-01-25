@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Pedidos')

{{--CONTENIDO--}}
@section('content')

@if( session('pedidoCancelado') )
  @section('mensaje',session('pedidoCancelado'))
  @section('color','dark')
@endif
    <!--Tablas de pedidos-->
    <div class="container mt-3">
      <h1>Tus pedidos</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">

        <!--TABLA DE PEDIDOS-->
        <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">Pedido #</th>
                <th scope="col">Precio</th>
                <th scope="col">Detalles</th>
                <th scope="col">Fecha</th>
                <th scope="col">Metodo de pago</th>
                <th scope="col">Estado</th>
                <th scope="col">Preparación</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($pedidos as $pedido)
                <tr class="table-{{ $pedido->Estadopedido->Color }}">
                  <th scope="row">{{ $pedido->id}}</th>
                  <td>${{ $pedido->Precio }}</td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido{{ $pedido->id }}"><img src="{{asset('css/imagenes/file-earmark.svg')}}"></button>
                      @include('consumidor.partials.modalDetallePedido')
                  </td>
                  <td>{{ $pedido->Fecha }}</td>
                  <td>{{ $pedido->Metodopago->Metodo }}</td>
                  <td>{{ $pedido->Estadopedido->Estado }}</td>
                  <td>
                    @if ($pedido->id_estado != 4)
                        {{ $pedido->Preparacion->Preparacion }}
                    @endif
                  </td>
                  
                </tr>
               @endforeach
              
            </tbody>
          </table>
          <div>
            {!! $pedidos->links() !!}
          </div>
        </div>
      </div>

@endsection