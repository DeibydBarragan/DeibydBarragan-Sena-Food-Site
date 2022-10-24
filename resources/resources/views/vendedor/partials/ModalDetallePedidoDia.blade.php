<div class="modal fade" id="detallePedido{{$pedido->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Pedido #{{ $pedido->id }}</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="modal-body" method="POST" action="{{ route('gestionarPedidos.update', $pedido->id)}}">
        @csrf
          <div class="mb-3">
              <label class="col-form-label"><h4>Id del usuario</h4></label>
              <h5 class="text-dark">{{ $pedido->id_usuario }}</h5>
            </div>
          <div class="mb-3">
            <label class="col-form-label"><h4>Nombre del usuario</h4></label>
            <h5 class="text-dark">{{ $pedido->Usuario->Nombre }} {{ $pedido->Usuario->Apellidos }}</h5>
          </div>

          <div class="mb-3">
              <label class="col-form-label"><h4>Productos</h4></label>
              @foreach ( $pedido->PedidosProductos as $producto)
              <h5 class="text-dark"><li>{{ $producto->Cantidad }} {{ $producto->Productos->Nombre}}(s)</li></h5>
              @endforeach
          </div>
          <div class="mb-3">
              <label class="col-form-label"><h4>Hora</h4></label>
              <h5 class="text-dark"> {{ $pedido->Fecha }}</h5>
          </div>
          
          <div class="mb-3">
              <label class="col-form-label"><h4>Precio</h4></label>
              <h5 class="text-dark">${{ $pedido->Precio }}</h5>
          </div>

          <div class="mb-3">
            <label class="col-form-label"><h4>Método de pago</h4></label>
            <h5 class="text-dark">{{ $pedido->Metodopago->Metodo }}</h5>
          </div>

          @if ($pedido->Estadopedido->id != 4)
            @if ($pedido->id_preparacion = 1)
              <div class="mb-3">
                <label class="col-form-label"><h4>Estado</h4></label>
                <select class="form-control" name="estado">
                  <option value="{{ $pedido->Estadopedido->id }}" hidden selected>{{ $pedido->Estadopedido->Estado }}</option>
                  @if ($pedido->Estadopedido->id != 2)
                    <option value="2">Pagado</option>  
                  @endif
                  @if ( $pedido->Estadopedido->id >= 2)
                    @if ( $pedido->Preparacion->id == 2)
                      <option value="3">Entregado</option>
                    @endif
                    
                  @endif
                </select>
              </div>
            @endif

            @if ($pedido->Estadopedido->id != 1)
              <div class="mb-3">
                <label class="col-form-label"><h4>Preparacion</h4></label>
                <select class="form-control" name="preparacion">
                  <option value="{{ $pedido->Preparacion->id }}" hidden selected>{{ $pedido->Preparacion->Preparacion }}</option>
                  @foreach ($preparaciones as $preparacion)
                    <option value="{{ $preparacion->id }}">{{ $preparacion->Preparacion }}</option>
                  @endforeach
                </select>
              </div>
            @endif
            

            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
            </div>
              
          @else
          <label class="col-form-label"><h4>Estado: {{ $pedido->Estadopedido->Estado }}</h4></label>
              
          @endif
          
      </form>
    </div>
  </div>
</div>