@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Gestionar soporte')

{{--CONTENIDO--}}
@section('content')

@if( session('comentarioEliminado') )
  @section('mensaje',session('comentarioEliminado'))
  @section('color','dark')
@endif

     <!--Tablas de soporte-->
    <div class="container mt-2">
      <h1>Gestionar soporte</h1>
      <!--FILTRAR-->
    <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
      <div class="row col-lg-7 mt-3">
        <div class="col col-5 col-sm-3 col-lg-3">
          <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estados
          </button>
            <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
            <li><a class="dropdown-item" href="{{ route('soporteAdmin.index') }}">Todos</a></li>

            @foreach ($estados_soporte as $estado)
              
                <li><a class="dropdown-item" href="{{ route('soporteAdmin.estado',$estado->id) }}">{{ $estado->Estado }}</a></li>
              
            @endforeach
            </ul>
        </div>
        
        <div class="col col-5 col-sm-3 col-lg-4">
          <form action="{{ route('soporte.search')}}" method="GET">
            <input type="search" name="buscarComentario" class="form-control" placeholder="Buscar">
          </form>
        </div>
      </div>
      <!--TABLA-->
      <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tipo de error</th>
              <th scope="col">Fecha</th>
              <th scope="col">Detalles</th>
              <th scope="col">Estado</th>
            </tr>
          </thead> 
          <tbody>
            @foreach ($comentarios as $comentario)
                <tr class="table-{{ $comentario->Estado->Color }}">
                  <th scope="row">{{ $comentario->id }}</th>
                  <td>{{ $comentario->Tipo }}</td>
                  <td>{{ $comentario->fechaHora }}</td>
                  <td>
                    <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detalleSoporte{{ $comentario->id }}"><img src="{{asset('css/imagenes/file-earmark.svg')}}"></button>
                    @include('admin.partials.modalDetalleSoporte')
                    </td>
                  <td>{{ $comentario->Estado->Estado }}</td>
                </tr>
            @endforeach
              
          </tbody>
        </table>
        <div>
          {!! $comentarios->links() !!}
        </div>
      </div>
    </div>
@endsection