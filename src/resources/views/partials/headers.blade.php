    <!--CABECERA-->
    <style>
      .botonMenu{
        max-height: 52px
      }
      .botonMenu:hover {
        background-size: 2vw;
      }

      @media screen and (max-width: 900px) {
        .botonMenu{
          font-size: 15px;
          width: 17vw;
          max-height: none;
          height: 9vw;
        }
        .botonMenu:hover{
          background-size: 3.7vw;
          width: 20vw;
        }

      }

      @media screen and (max-width: 1200px) {
        .botonMenu{
          font-size: 17px;
        }
        .botonMenu:hover{
          background-size: 2.6vw;
        }
      }
      @media screen and (max-width: 927px) {
        .botonMenu{
          font-size: 17px;
        }
        .botonMenu:hover{
          background-size: 2.6vw;
        }
      }

    </style>
    <header class="py-3 sticky-top bg-white" name="cabecera">
      <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;" name="contenedorCabecera">
        <div class="dropdown" name="dropMenu">
          <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('logo.png')}}" alt="" width="100vw" name="logo">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="{{route('menu.index')}}">Menú</a></li>
            @auth
              @if (Auth::user()->id_tipousuario == 3)
                <li><a class="dropdown-item" href="{{route('carrito.index')}}">Tu carrito</a></li>    
                <li><a class="dropdown-item" href="{{route('soporte.show')}}">Soporte técnico</a></li>

              @elseif (Auth::user()->id_tipousuario == 2)
                <li><a class="dropdown-item" href="{{route('gestionarPedidos.index')}}">Pedidos del día</a></li>
                <li><a class="dropdown-item" href="{{route('soporte.show')}}">Soporte técnico</a></li>

              @else
                <li><a class="dropdown-item" href="{{route('soporteAdmin.index')}}">Gestionar soporte</a></li>
                <li><a class="dropdown-item" href="{{route('gestionarUsuarios.index')}}">Gestionar usuarios</a></li>

              @endif
                
            @endauth
            <li><a class="dropdown-item" href="{{route('metodosPago')}}">Métodos de pago</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('perfil')}}">Configuración</a></li>
          </ul>
        </div>
  
        <div class="d-flex align-items-center">
          <form class="w-100 me-3" role="search" method="get" action="{{ route('menu.search')}}">
            <input type="search" name="buscarProducto" class="form-control" placeholder="¿Qué estás buscando?" aria-label="Search">
          </form>
  
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="
                @guest
                  {{ Storage::url('public/usuarios/default.svg') }}
                @endguest
                @auth
                  @if (Auth::user()->Foto == null)
                    {{ Storage::url('public/usuarios/default.svg') }}
                  @else
                    {{ Storage::url(Auth::user()->Foto) }}
                  @endif
                @endauth
              " alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
              @guest
                <li><a href="{{ route('login') }}" class="dropdown-item">Iniciar sesión</a></li> 
                <li><hr class="dropdown-divider"></li>
                <li><a href="{{ route('registro.index') }}" class="dropdown-item">Registrarse</a></li>    
              @endguest

              @auth
              <li><a class="dropdown-item" href="/perfil">Perfil</a></li> 
                @if (Auth::user()->id_tipousuario == 3)
                <li><a class="dropdown-item" href="{{ route('pedidosUsuario') }}">Tus pedidos</a></li>
                @elseif (Auth::user()->id_tipousuario == 2)
                <li><a class="dropdown-item" href="{{route('gestionarPedidos.historial')}}">Historial de pedidos</a></li> 
                
                @endif
                <li><hr class="dropdown-divider"></li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <li><a class="dropdown-item" href="#" onclick="this.closest('form').submit()" name="cerrarSesion">Cerrar sesión</a></li>
                </form>
              @endauth
              </ul>
          </div>
        </div>
      </div>
    </header>
    
    <!--MENÚ DE BOTONES PRINCIPALES-->
    <header2 class="container-fluid col-xxl-11" name="menuBotones">

      <a href="{{route('menu.index')}}">
        <button class="botonMenu" name="menu">Menú</button>
      </a>

      @guest
        <a href="{{route('carrito.index')}}">
          <button class="botonMenu" name="carro">Tu carrito</button>
        </a>
      @endguest
      <a href="{{route('metodosPago')}}">
        <button class="botonMenu" name="pago">Métodos de pago</button>
      </a>
      @auth
          
        @if (Auth::user()->id_tipousuario == 3)
        <a href="{{route('carrito.index')}}">
          <button class="botonMenu" name="carro">Tu carrito</button>
        </a>
        <a href="{{route('soporte.show')}}">
          <button class="botonMenu" name="tecn">Soporte técnico</button>
        </a>
        @elseif (Auth::user()->id_tipousuario == 2)
        <a href="{{route('gestionarPedidos.index')}}">
          <button class="botonMenu" name="gestionarPedidos">Pedidos</button>
        </a>
        <a href="{{route('soporte.show')}}">
          <button class="botonMenu" name="tecn">Soporte técnico</button>
        </a>
        
        @elseif (Auth::user()->id_tipousuario == 1)
        <a href="{{route('gestionarUsuarios.index')}}">
          <button class="botonMenu" name="database">Usuarios</button>
        </a>
        <a href="{{route('soporteAdmin.index')}}">
          <button class="botonMenu" name="gestionarSoporte">Soporte</button>
        </a>
        
        @endif
      
      @endauth

      @guest
        <a href="{{route('soporte.show')}}">
          <button class="botonMenu" name="tecn">Soporte técnico</button>
        </a>
      @endguest
        <a href="{{route('perfil')}}">
          <button class="botonMenu" name="conf">Configuración</button>
        </a>

      </header2>