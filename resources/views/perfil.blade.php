@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Perfil')

{{--CONTENIDO--}}
@section('content')
    <!--PERFIL-->
    <div class="container-fluid mt-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3"><br>
                <img src="
                @if($usuario->Foto == null)
                {{ Storage::url('public/usuarios/default.svg')}}
                @else
                {{ Storage::url($usuario->Foto) }}
                @endif
                " class="mb-3 rounded-4" style="width:100%; max-width:410px">
            </div>

            <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                 <h2>{{ $usuario->Nombre }}</h2><hr>
                 <h2>{{ $usuario->Apellidos }}</h2><hr>
                 <h3>{{ $usuario->Tipousuarios->Rol }}</h3><hr>
                 <h3>{{ $usuario->Centros->Centro }}</h3><hr>
                 <h3>ID: #{{ $usuario->id }}</h3><hr>

                    <div>
                      <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modificarProducto">Modificar Usuario</button>

                      @include('partials.modalModificarse')
                    </div>
                    
            </div>
        </div>

@endsection