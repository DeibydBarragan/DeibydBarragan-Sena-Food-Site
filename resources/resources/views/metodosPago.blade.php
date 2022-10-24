@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Métodos de pago')

{{--CONTENIDO--}}
@section('content')
    <!--MÉTODOS DE PAGO-->
    <div class="container-fluid col-12 col-lg-11 col-xl-10 mt-3">
        <div class="row justify-content-center gap-4 gap-sm-4 gap-md-5">
            @foreach($metodos as $metodo)
                <div class="col col-10 col-sm-5 col-md-5 col-lg-3 border border-2 shadow-lg rounded-4 p-4">
                    <img src="{{asset('imgProducts/'.$metodo->Foto)}}" class="card-img">
                    <h3>{{ $metodo->Metodo }}</h3>
                    <p>
                        {{ $metodo->Descripcion }}
                    </p>
                </div>
            @endforeach
            
        </div>
      </div>
    
@endsection