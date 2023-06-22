@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Soporte técnico')

{{--CONTENIDO--}}
@section('content')

@if( session('comentarioCreado') )
  @section('mensaje',session('comentarioCreado'))
  @section('color','danger')
@endif



    <!--SOPORTE TÉCNICO-->
    <form class="container-fluid col-11 col-md-10 col-lg-8 col-xl-7 mt-3" method="POST" action="{{ route('soporte.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <h2>Soporte técnico</h2>
            <h4>Haz una breve descripción del problema que tuviste con la página web</h4>
        </div>
        <div class="col col-5 col-sm-3 mt-3">
            <input type="text" name="tipo" placeholder="Tipo de error" class="form-control" value="{{ old('tipo') }}" minlength="4" maxlength="15" required>
        </div>
        <div class="col col-11 col-sm-10 shadow mt-4">
            <textarea class="form-control" placeholder="Descripción del error..." name="comentario" minlength="20" maxlength="200" required>{{ old('comentario') }}</textarea>
        </div>
        <div class="col mt-3 ">
            <h5>Puedes adjuntar una foto o pantallazo del error</h5>
            <input class="form-control w-75" type="file" name="imagen" accept="image/*">
            @error('imagen')
                  <h5 class="text-danger mt-2">{{ $message }}</h5>
            @enderror
            <button type="submit" class="btn btn-primary col-4 col-sm-3 col-md-2 mt-3"><img src="{{asset('css/imagenes/send.svg')}}"> Enviar</button>
        </div>
    </form>
@endsection