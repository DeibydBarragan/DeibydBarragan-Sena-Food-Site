


<?php $__env->startSection('title','Historial de pedidos'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('pedidoEditado') ): ?>
  <?php $__env->startSection('mensaje',session('pedidoEditado')); ?>
  <?php $__env->startSection('color','success'); ?>
<?php endif; ?>
    <!--Tablas de pedidos-->
    <div class="container mt-3">
      <h1>Historial de pedidos</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
        <div class="row mt-3">
          <div class="col col-4 col-sm-3 col-lg-2">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Estados
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.historial')); ?>">Todos</a></li>
  
              <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.estado',$estado->id)); ?>"><?php echo e($estado->Estado); ?></a></li>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          <div class="col col-4 col-sm-3 col-lg-2">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pago
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.historial')); ?>">Todos</a></li>
  
              <?php $__currentLoopData = $metodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.metodo',$metodo->id)); ?>"><?php echo e($metodo->Metodo); ?></a></li>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          
          <div class="col col-4 col-sm-3 col-lg-2">
            <form action="<?php echo e(route('gestionarPedidos.search')); ?>" method="GET">
              <input type="search" class="form-control" name="buscarPedidoHistorial" placeholder="Buscar">
            </form>
          </div>
        </div>

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
              </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-<?php echo e($pedido->Estadopedido->Color); ?>">
                  <th scope="row"><?php echo e($pedido->id); ?></th>
                  <td>$<?php echo e($pedido->Precio); ?></td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido<?php echo e($pedido->id); ?>"><img src="<?php echo e(asset('css/imagenes/file-earmark.svg')); ?>"></button>
                      <?php echo $__env->make('vendedor.partials.modalDetallePedido', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </td>
                  <td><?php echo e($pedido->Fecha); ?></td>
                  <td><?php echo e($pedido->Metodopago->Metodo); ?></td>
                  <td><?php echo e($pedido->Estadopedido->Estado); ?></td>
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
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/vendedor/gestionarPedidos.blade.php ENDPATH**/ ?>