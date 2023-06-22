@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Gestionar usuarios')

{{--CONTENIDO--}}
@section('content')

@if( session('usuarioCreado') )
  @section('mensaje',session('usuarioCreado'))
  @section('color','danger')
@endif

@if( session('usuarioEliminado') )
  @section('mensaje',session('usuarioEliminado') )
  @section('color','dark')
@endif

@if( session('usuarioEditado') )
  @section('mensaje',session('usuarioEditado') )
  @section('color','success')
@endif

<!--Tablas de usuarios-->
      
<div class="container  mt-3">
  <h1>Gestionar usuarios</h1>
    <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded" name="catalogo">
            <div class="row mt-3">
              <div class="col col-auto">
                <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Roles
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                  @foreach ($tipousuarios as $tipousuario)
                    
                      <li><a class="dropdown-item" href="{{ route('gestionarUsuarios.rol',$tipousuario->id) }}">{{ $tipousuario->Rol }}</a></li>
                    
                  @endforeach
                  </ul>
              </div>

              <div class="col col-auto ">
                <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Centros
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                  @foreach ($centros as $centro)
                    
                      <li><a class="dropdown-item" href="{{ route('gestionarUsuarios.centro',$centro->id) }}">{{ $centro->Centro }}</a></li>
                    
                  @endforeach
                  </ul>
              </div>
              
              <div class="col col-auto mt-3 mt-sm-0">
                <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ordenar por
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
    
                      <li><a class="dropdown-item" href="{{ route('gestionarUsuarios.rol',"id") }}">Id</a></li>
                      <li><a class="dropdown-item" href="{{ route('gestionarUsuarios.rol',"nombre") }}">Nombre</a></li>
                    
                  </ul>
              </div>

              <div class="col col-auto mt-3 mt-md-0">
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#crearUsuario">Crear usuario</button>
                @include('admin.partials.modalCrearUsuario')
              </div>

              <div class="col col-auto mt-3 mt-lg-0">
                <form method="GET" action="{{ route('gestionarUsuarios.search') }}">
                  <input type="search" name="buscarUsuario" placeholder="Buscar" class="form-control">
                </form>
              </div>
            </div> 

        


    <table class="table table-bordered mt-3">
        <thead> 
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Rol</th>
            <th scope="col">Correo</th>
            <th scope="col">Centro</th>
            <th scope="col">Foto</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          
          @foreach ($usuarios as $usuario)
            <tr class="table-{{ $usuario->Tipousuarios->Color }}">
              <th scope="row">{{ $usuario->id }}</th>
              <td>{{ $usuario->Nombre }}</td>
              <td>{{ $usuario->Apellidos }}</td>
              <td>{{ $usuario->Tipousuarios->Rol }}</td>
              <td>{{ $usuario->Correo }}</td>
              <td>{{ $usuario->Centros->Centro }}</td>
              <td><img src="
                @if($usuario->Foto == null)
                {{ Storage::url('public/usuarios/default.svg')}}
                @else
                {{ Storage::url($usuario->Foto) }}
                @endif
                " width="32" height="32" class="rounded-circle"></td>
              <td>
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modificarUsuario{{ $usuario->id }}">Modificar Usuario</button>
                @include('admin.partials.modalModificarUsuario')
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div>
        {!! $usuarios->links() !!}
      </div>
    </div>
  </div>

@endsection