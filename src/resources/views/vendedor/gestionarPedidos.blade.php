@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Historial de pedidos')

{{--CONTENIDO--}}
@section('content')

@if( session('pedidoEditado') )
  @section('mensaje',session('pedidoEditado'))
  @section('color','success')
@endif
    <!--Tablas de pedidos-->
    <div class="container mt-3">
      <h1>Historial de pedidos</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
        <div class="row mt-3">
          <div class="col col-4 col-sm-3 col-lg-2">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Estados
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="{{ route('gestionarPedidos.historial') }}">Todos</a></li>
  
              @foreach ($estados as $estado)
                
                  <li><a class="dropdown-item" href="{{ route('gestionarPedidos.estado',$estado->id) }}">{{ $estado->Estado }}</a></li>
                
              @endforeach
              </ul>
          </div>
          <div class="col col-4 col-sm-3 col-lg-2">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pago
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="{{ route('gestionarPedidos.historial') }}">Todos</a></li>
  
              @foreach ($metodos as $metodo)
                
                  <li><a class="dropdown-item" href="{{ route('gestionarPedidos.metodo',$metodo->id) }}">{{ $metodo->Metodo }}</a></li>
                
              @endforeach
              </ul>
          </div>
          
          <div class="col col-4 col-sm-3 col-lg-2">
            <form action="{{ route('gestionarPedidos.search') }}" method="GET">
              <input type="search" class="form-control" name="buscarPedidoHistorial" placeholder="Buscar">
            </form>
          </div>
        </div>

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
              </tr>
            </thead>
            <tbody>
               @foreach ($pedidos as $pedido)
                <tr class="table-{{ $pedido->Estadopedido->Color }}">
                  <th scope="row">{{ $pedido->id}}</th>
                  <td>${{ $pedido->Precio }}</td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido{{ $pedido->id }}"><img src="{{asset('css/imagenes/file-earmark.svg')}}"></button>
                      @include('vendedor.partials.modalDetallePedido')
                  </td>
                  <td>{{ $pedido->Fecha }}</td>
                  <td>{{ $pedido->Metodopago->Metodo }}</td>
                  <td>{{ $pedido->Estadopedido->Estado }}</td>
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