<div class="row col-12 justify-content-center">
    <div class="row col-12 col-sm-11">
      <div class="col col-sm-12 col-lg-9 col-xl-10">
        <div class="row col-12 col-md-10 col-lg-9 col-xl-7">
          <div class="col col-6 col-sm-auto">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              @foreach ($categorias as $categoria)
                
                  <li><a class="dropdown-item" href="{{ route('menu.categoria',$categoria->id) }}">{{ $categoria->Categoria }}</a></li>
                
              @endforeach
              </ul>
          </div>
          
          <div class="col col-6 col-sm-auto">
            <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Precios
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">

                  <li><a class="dropdown-item" href="{{ route('menu.categoria',"menorprecio") }}">Menor precio</a></li>
                  <li><a class="dropdown-item" href="{{ route('menu.categoria',"mayorprecio") }}">Mayor precio</a></li>
                
              </ul>
          </div>

          @auth
              
            @if ((Auth::user()->id_tipousuario == 1) or (Auth::user()->id_tipousuario == 2))
              {{--BOTON SOLO PARA VENDEDORES--}}
              <div class="col col-8 col-sm-auto mt-3 mt-sm-0">
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#crearProducto">Añadir producto</button>
                @include('vendedor.partials.ModalCrearProducto')
              </div>
            @endif
            
          @endauth
          
          
        </div> 
      </div>
    </div>
</div>