<div class="modal fade" id="detallePedido<?php echo e($pedido->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Pedido #<?php echo e($pedido->id); ?></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label class="col-form-label"><h4>Productos</h4></label>
                <?php $__currentLoopData = $pedido->PedidosProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h5 class="text-dark"><li><?php echo e($producto->Cantidad); ?> <?php echo e($producto->Productos->Nombre); ?>(s)</li></h5>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="mb-3">
                <label class="col-form-label"><h4>Fecha</h4></label>
                <h5 class="text-dark"><?php echo e($pedido->Fecha); ?></h5>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h4>Precio</h4></label>
                <h5 class="text-dark">$<?php echo e($pedido->Precio); ?></h5>
            </div>

            <div class="mb-3">
              <label class="col-form-label"><h4>Método de pago</h4></label>
              <h5 class="text-dark"><?php echo e($pedido->Metodopago->Metodo); ?></h5>
            </div>

            <div class="mb-3">
              <label class="col-form-label"><h4>Estado</h4></label>
              <h5 class="text-dark"><?php echo e($pedido->Estadopedido->Estado); ?></h5>
            </div>
          </div>

          <?php if($pedido->id_estado != 4): ?>
            
            <div class="modal-footer">
    
              <form action="<?php echo e(route('cancelarPedido', $pedido->id)); ?>">

                <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Cancelar pedido</button>
                <div class="dropdown-menu p-4 shadow-lg">
                  <p>¿Desea cancelar el pedido?</p>
                  
                  <button type="submit" class="btn btn-outline-danger">Continuar</button>
                </div>
              </form>
              <a href="<?php echo e(route('codigoQr', $pedido->id)); ?>" class="btn btn-outline-success">Codigo QR</a>
            </div>

          <?php endif; ?>
          

        </div>
      </div>
    </div>
</div><?php /**PATH C:\laragon\www\Proyecto\resources\views/consumidor/partials/modalDetallePedido.blade.php ENDPATH**/ ?>