<form class="card col-5 col-md-3 col-lg-2 col-xl-2 {{--border border-2--}} rounded-3" action="{{ route('addToCart', $producto->id) }}">
    <a href="{{route('productos.show', $producto->id)}}">
      <img src="{{ Storage::url($producto->Foto) }}" class="img-thumbnail border-0 rounded-4">
    </a>
    <div class="card-body">
      <a href="{{route('productos.show', $producto->id)}}" style="text-decoration: none">
        <h5 class="card-title text-dark">{{ $producto->Nombre }}</h5>
      </a>
      
      <p class="card-text">${{ $producto->Precio }}</p>
      @auth
          
        @if (Auth::user()->id_tipousuario == 3)
          <button class="btn btn-outline-primary" type="submit">Añadir al carrito</button>
        @else

          @if ($producto->Disponibilidad == 1)
            <a href="{{route('productos.show', $producto->id)}}" class="btn btn-outline-primary" type="submit">Visualizar</a> 
          @else
            <a href="{{route('productos.show', $producto->id)}}" class="btn btn-outline-dark" type="submit">No disponible</a> 
          @endif

        @endif
      @endauth

      @guest
        <button class="btn btn-outline-primary" type="submit">Añadir al carrito</button>  
      @endguest
    </div>
</form>