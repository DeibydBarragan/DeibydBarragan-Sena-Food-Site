<div class="modal fade" id="detallePedido{{$pedido->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Pedido #{{ $pedido->id }}</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label class="col-form-label"><h4 >Id del usuario</h4></label>
                <h5 class="text-dark">{{ $pedido->id_usuario }}</h5>
              </div>
            <div class="mb-3">
              <label class="col-form-label"><h4>Nombre del usuario</h4></label>
              <h5 class="text-dark">{{ $pedido->Usuario->Nombre }} {{ $pedido->Usuario->Apellidos }}</h5>
            </div>

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
      </div>
    </div>
</div>