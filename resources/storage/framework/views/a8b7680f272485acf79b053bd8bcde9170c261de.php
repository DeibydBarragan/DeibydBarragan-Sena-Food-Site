


<?php $__env->startSection('title','Pedidos del día'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('pedidoEditado') ): ?>
  <?php $__env->startSection('mensaje',session('pedidoEditado') ); ?>
  <?php $__env->startSection('color','success'); ?>
<?php endif; ?>

    <!--Tablas de pedidos-->
    <div class="container  mt-3">
      <h1>Pedidos del día</h1>
        <!--FILTRAR-->
      <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
        <div class="row mt-3">
            <div class="col col-xl-2">
              <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estados
              </button>
                <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.index')); ?>">Todos</a></li>
    
                <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                    <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidosDia.estado',$estado->id)); ?>"><?php echo e($estado->Estado); ?></a></li>
                  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          
          <div class="col col-xl-2">
            <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Preparación
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidos.index')); ?>">Todas</a></li>
  
              <?php $__currentLoopData = $preparaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preparacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <li><a class="dropdown-item" href="<?php echo e(route('gestionarPedidosDia.preparacion',$preparacion->id)); ?>"><?php echo e($preparacion->Preparacion); ?></a></li>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          <div class="col col-5 mt-3 col-lg-3 mt-sm-0 mt-lg-0">
            <form action="<?php echo e(route('gestionarPedidosDia.search')); ?>" method="GET">
              <input type="search" name="buscarPedidoDia" class="form-control" placeholder="Buscar">
            </form>
          </div>
          <div class="col col-7 mt-3 col-lg-3 mt-lg-0">
            <a href="<?php echo e(route('gestionarPedidos.historial')); ?>" class="btn btn-outline-success">Historial de pedidos</a>
          </div>
        </div>

        
        <!--TABLA DE PEDIDOS-->
        <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">Pedido #</th>
                <th scope="col">Precio</th>
                <th scope="col">Detalles</th>
                <th scope="col">Hora</th>
                <th scope="col">Preparación</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($pedido->id_estado != 4): ?>
                <tr class="table-<?php echo e($pedido->Preparacion->Color); ?>">

               <?php else: ?>
                <tr class="table-<?php echo e($pedido->Estadopedido->Color); ?>">
                  
               <?php endif; ?>
                  <th scope="row"><?php echo e($pedido->id); ?></th>
                  <td>$<?php echo e($pedido->Precio); ?></td>
                  <td>
                      <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detallePedido<?php echo e($pedido->id); ?>"><img src="<?php echo e(asset('css/imagenes/file-earmark.svg')); ?>"></button>
                      <?php echo $__env->make('vendedor.partials.ModalDetallePedidoDia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </td>
                  <td><?php echo e($pedido->Fecha); ?></td>
                  <td>
                    <?php if($pedido->id_estado != 4): ?>
                        <?php echo e($pedido->Preparacion->Preparacion); ?>

                    <?php endif; ?>
                  </td>
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
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/vendedor/gestionarPedidosDia.blade.php ENDPATH**/ ?>