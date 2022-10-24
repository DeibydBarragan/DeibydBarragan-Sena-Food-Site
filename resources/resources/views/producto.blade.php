@extends('layouts.plantillaPrincipal')

{{--TITULO DE LA PAGINA--}}
@section('title','Producto')

{{--CONTENIDO--}}
@section('content')

@if( session('productoEditado') )
  @section('mensaje',session('productoEditado'))
  @section('color','success')
@endif

@if( session('productoCarrito') )
  @section('mensaje',session('productoCarrito'))
  @section('color','danger')
@endif
    <!--PRODUCTO-->
    <!--VISTA DEL PRODUCTO-->
    <div class="container-fluid col col-xxl-10 mt-3 mt-sm-2">
        <div class="row justify-content-center align-items-center">
            <div class="col col-10 col-sm-6 col-md-5 col-lg-4">
                <img src="{{ Storage::url($producto->Foto) }}" style="width:90%; max-width:410px; float:right;">
            </div>

            <div class="col col-12 col-sm-6 col-md-5 col-lg-4">
                 <h1>{{ $producto->Nombre }}</h1>
                 <h3>${{ $producto->Precio }}</h3>
                 <textarea class="form-control shadow" rows="3" disabled>{{ $producto->Descripcion }}
                 </textarea>
                <hr>
                <h5>Categoría:</h5>
                <a href="{{route('menu.categoria', $producto->id_categoria)}}" class="btn btn-outline-success">{{ $producto->Categoria->Categoria }}</a>
                <hr>
                
                @auth
                    @if (Auth::user()->id_tipousuario == 3)
                    @if($producto->Disponibilidad == 2)
                    <h4>Lo sentimos, este producto no está disponible</h4>
                    @else
                            
                        <form action="{{ route('addToCart', $producto->id) }}">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="button-addon2" name="cantidadProducto" max="10">
                                
                                    <button type="submit" class="btn btn-outline-primary">Añadir al carrito</button>                     
                                
                            </div>
                        </form>
                    @endif
                    
                    @else

                        @if($producto->Disponibilidad == 2)
                            <h4>No disponible</h4><hr>
                        @endif 
                        <div>
                            <button class="btn btn-outline-dark mb-3" data-bs-toggle="modal" data-bs-target="#modificarProducto{{$producto->id}}">Modificar producto</button>
                            @include('vendedor.partials.ModalModificarProducto')
                        </div> 
                    @endif
                @endauth
                
                @guest
                    @if($producto->Disponibilidad == 2)
                    <h4>Lo sentimos, este producto no está disponible</h4>
                    @else
                            
                        <form action="{{ route('addToCart', $producto->id) }}">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="button-addon2" name="cantidadProducto" max="10">
                                
                                    <button type="submit" class="btn btn-outline-primary">Añadir al carrito</button>                     
                                
                            </div>
                        </form>
                    @endif
                @endguest
                
            </div>
        </div>
    <!--PRODUCTOS RELACIONADOS-->
        <div class="row justify-content-center">
            <hr class="col-10">
            <div class="col-10">
                <h4>Productos relacionados</h4>
            </div>
        </div>
        <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            @foreach($productos as $producto)
                @include('partials.contenedorProducto')
            @endforeach
            
        </div>
    </div>

@endsection