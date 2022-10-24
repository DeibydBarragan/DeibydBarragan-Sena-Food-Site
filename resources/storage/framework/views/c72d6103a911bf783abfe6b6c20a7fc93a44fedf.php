


<?php $__env->startSection('title','Pedidos'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('pedidoCancelado') ): ?>
  <?php $__env->startSection('mensaje',session('pedidoCancelado')); ?>
  <?php $__env->startSection('color','dark'); ?>
<?php endif; ?>
    <!--Tablas de pedidos-->
    <div class="container mt-3">
      <h1>Tus pedidos</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">

        <!--TABLA DE PEDIDOS-->
        <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">Pedido #</th>
                <th scope="col">Precio</th>
                <th scope="col">Detalles</th>
                <th scope="col">Fecha</th>
                <th scope="col">Metodo de pago</th>
                <th scope="col">Estado</th>
                <th scope="col">Preparación</th>
              </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-<?php echo e($pedido->Estadopedido->Color); ?>">
                  <th scope="row"><?php echo e($pedido->id); ?></th>
                  <td>$<?php echo e($pedido->Precio); ?></td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido<?php echo e($pedido->id); ?>"><img src="<?php echo e(asset('css/imagenes/file-earmark.svg')); ?>"></button>
                      <?php echo $__env->make('consumidor.partials.modalDetallePedido', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </td>
                  <td><?php echo e($pedido->Fecha); ?></td>
                  <td><?php echo e($pedido->Metodopago->Metodo); ?></td>
                  <td><?php echo e($pedido->Estadopedido->Estado); ?></td>
                  <td>
                    <?php if($pedido->id_estado != 4): ?>
                        <?php echo e($pedido->Preparacion->Preparacion); ?>

                    <?php endif; ?>
                  </td>
                  
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>
          </table>
          <div>
            <?php echo $pedidos->links(); ?>

          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/consumidor/pedidosUsuario.blade.php ENDPATH**/ ?>