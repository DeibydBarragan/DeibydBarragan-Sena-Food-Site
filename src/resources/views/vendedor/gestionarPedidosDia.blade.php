@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Pedidos del día')

{{--CONTENIDO--}}
@section('content')

@if( session('pedidoEditado') )
  @section('mensaje',session('pedidoEditado') )
  @section('color','success')
@endif

    <!--Tablas de pedidos-->
    <div class="container  mt-3">
      <h1>Pedidos del día</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
        <div class="row mt-3">
            <div class="col col-xl-2">
              <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estados
              </button>
                <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                <li><a class="dropdown-item" href="{{ route('gestionarPedidos.index') }}">Todos</a></li>
    
                @foreach ($estados as $estado)
                  
                    <li><a class="dropdown-item" href="{{ route('gestionarPedidosDia.estado',$estado->id) }}">{{ $estado->Estado }}</a></li>
                  
                @endforeach
                </ul>
            </div>
          
          <div class="col col-xl-2">
            <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Preparación
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="{{ route('gestionarPedidos.index') }}">Todas</a></li>
  
              @foreach ($preparaciones as $preparacion)
                
                  <li><a class="dropdown-item" href="{{ route('gestionarPedidosDia.preparacion',$preparacion->id) }}">{{ $preparacion->Preparacion }}</a></li>
                
              @endforeach
              </ul>
          </div>
          <div class="col col-5 mt-3 col-lg-3 mt-sm-0 mt-lg-0">
            <form action="{{ route('gestionarPedidosDia.search') }}" method="GET">
              <input type="search" name="buscarPedidoDia" class="form-control" placeholder="Buscar">
            </form>
          </div>
          <div class="col col-7 mt-3 col-lg-3 mt-lg-0">
            <a href="{{route('gestionarPedidos.historial')}}" class="btn btn-outline-success">Historial de pedidos</a>
          </div>
        </div>

        
        <!--TABLA DE PEDIDOS-->
        <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">Pedido #</th>
                <th scope="col">Precio</th>
                <th scope="col">Detalles</th>
                <th scope="col">Hora</th>
                <th scope="col">Preparación</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($pedidos as $pedido)
               @if ($pedido->id_estado != 4)
                <tr class="table-{{ $pedido->Preparacion->Color }}">

               @else
                <tr class="table-{{ $pedido->Estadopedido->Color }}">
                  
               @endif
                  <th scope="row">{{ $pedido->id}}</th>
                  <td>${{ $pedido->Precio }}</td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido{{ $pedido->id }}"><img src="{{asset('css/imagenes/file-earmark.svg')}}"></button>
                      @include('vendedor.partials.ModalDetallePedidoDia')
                  </td>
                  <td>{{ $pedido->Fecha }}</td>
                  <td>
                    @if ($pedido->id_estado != 4)
                        {{ $pedido->Preparacion->Preparacion }}
                    @endif
                  </td>
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