<div class="modal fade" id="detallePedido<?php echo e($pedido->id); ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Pedido #<?php echo e($pedido->id); ?></h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="modal-body" method="POST" action="<?php echo e(route('gestionarPedidos.update', $pedido->id)); ?>">
        <?php echo csrf_field(); ?>
          <div class="mb-3">
              <label class="col-form-label"><h4>Id del usuario</h4></label>
              <h5 class="text-dark"><?php echo e($pedido->id_usuario); ?></h5>
            </div>
          <div class="mb-3">
            <label class="col-form-label"><h4>Nombre del usuario</h4></label>
            <h5 class="text-dark"><?php echo e($pedido->Usuario->Nombre); ?> <?php echo e($pedido->Usuario->Apellidos); ?></h5>
          </div>

          <div class="mb-3">
              <label class="col-form-label"><h4>Productos</h4></label>
              <?php $__currentLoopData = $pedido->PedidosProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h5 class="text-dark"><li><?php echo e($producto->Cantidad); ?> <?php echo e($producto->Productos->Nombre); ?>(s)</li></h5>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <div class="mb-3">
              <label class="col-form-label"><h4>Hora</h4></label>
              <h5 class="text-dark"> <?php echo e($pedido->Fecha); ?></h5>
          </div>
          
          <div class="mb-3">
              <label class="col-form-label"><h4>Precio</h4></label>
              <h5 class="text-dark">$<?php echo e($pedido->Precio); ?></h5>
          </div>

          <div class="mb-3">
            <label class="col-form-label"><h4>Método de pago</h4></label>
            <h5 class="text-dark"><?php echo e($pedido->Metodopago->Metodo); ?></h5>
          </div>

          <?php if($pedido->Estadopedido->id != 4): ?>
            <?php if($pedido->id_preparacion = 1): ?>
              <div class="mb-3">
                <label class="col-form-label"><h4>Estado</h4></label>
                <select class="form-control" name="estado">
                  <option value="<?php echo e($pedido->Estadopedido->id); ?>" hidden selected><?php echo e($pedido->Estadopedido->Estado); ?></option>
                  <?php if($pedido->Estadopedido->id != 2): ?>
                    <option value="2">Pagado</option>  
                  <?php endif; ?>
                  <?php if( $pedido->Estadopedido->id >= 2): ?>
                    <?php if( $pedido->Preparacion->id == 2): ?>
                      <option value="3">Entregado</option>
                    <?php endif; ?>
                    
                  <?php endif; ?>
                </select>
              </div>
            <?php endif; ?>

            <?php if($pedido->Estadopedido->id != 1): ?>
              <div class="mb-3">
                <label class="col-form-label"><h4>Preparacion</h4></label>
                <select class="form-control" name="preparacion">
                  <option value="<?php echo e($pedido->Preparacion->id); ?>" hidden selected><?php echo e($pedido->Preparacion->Preparacion); ?></option>
                  <?php $__currentLoopData = $preparaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preparacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($preparacion->id); ?>"><?php echo e($preparacion->Preparacion); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            <?php endif; ?>
            

            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
            </div>
              
          <?php else: ?>
          <label class="col-form-label"><h4>Estado: <?php echo e($pedido->Estadopedido->Estado); ?></h4></label>
              
          <?php endif; ?>
          
      </form>
    </div>
  </div>
</div><?php /**PATH C:\laragon\www\Proyecto\resources\views/vendedor/partials/modalDetallePedidoDia.blade.php ENDPATH**/ ?>