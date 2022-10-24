<div class="modal fade" id="detallePedido{{$pedido->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Pedido #{{ $pedido->id }}</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label class="col-form-label"><h4>Productos</h4></label>
                @foreach ($pedido->PedidosProductos as $producto)
                    <h5 class="text-dark"><li>{{ $producto->Cantidad }} {{ $producto->Productos->Nombre}}(s)</li></h5>
                @endforeach

            </div>
            <div class="mb-3">
                <label class="col-form-label"><h4>Fecha</h4></label>
                <h5 class="text-dark">{{ $pedido->Fecha }}</h5>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h4>Precio</h4></label>
                <h5 class="text-dark">${{ $pedido->Precio }}</h5>
            </div>

            <div class="mb-3">
              <label class="col-form-label"><h4>Método de pago</h4></label>
              <h5 class="text-dark">{{ $pedido->Metodopago->Metodo }}</h5>
            </div>

            <div class="mb-3">
              <label class="col-form-label"><h4>Estado</h4></label>
              <h5 class="text-dark">{{ $pedido->Estadopedido->Estado }}</h5>
            </div>
          </div>

          @if ($pedido->id_estado != 4)
            
            <div class="modal-footer">
    
              <form action="{{ route('cancelarPedido', $pedido->id) }}">

                <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Cancelar pedido</button>
                <div class="dropdown-menu p-4 shadow-lg">
                  <p>¿Desea cancelar el pedido?</p>
                  
                  <button type="submit" class="btn btn-outline-danger">Continuar</button>
                </div>
              </form>
              <a href="{{ route('codigoQr', $pedido->id) }}" class="btn btn-outline-success">Codigo QR</a>
            </div>

          @endif
          

        </div>
      </div>
    </div>
</div>