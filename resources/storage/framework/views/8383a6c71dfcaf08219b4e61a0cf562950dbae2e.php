


<?php $__env->startSection('title','Gestionar soporte'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('comentarioEliminado') ): ?>
  <?php $__env->startSection('mensaje',session('comentarioEliminado')); ?>
  <?php $__env->startSection('color','dark'); ?>
<?php endif; ?>

     <!--Tablas de soporte-->
    <div class="container mt-2">
      <h1>Gestionar soporte</h1>
      <!--FILTRAR-->
    <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded">
      <div class="row col-lg-7 mt-3">
        <div class="col col-5 col-sm-3 col-lg-3">
          <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estados
          </button>
            <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
            <li><a class="dropdown-item" href="<?php echo e(route('soporteAdmin.index')); ?>">Todos</a></li>

            <?php $__currentLoopData = $estados_soporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <li><a class="dropdown-item" href="<?php echo e(route('soporteAdmin.estado',$estado->id)); ?>"><?php echo e($estado->Estado); ?></a></li>
              
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        
        <div class="col col-5 col-sm-3 col-lg-4">
          <form action="<?php echo e(route('soporte.search')); ?>" method="GET">
            <input type="search" name="buscarComentario" class="form-control" placeholder="Buscar">
          </form>
        </div>
      </div>
      <!--TABLA-->
      <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tipo de error</th>
              <th scope="col">Fecha</th>
              <th scope="col">Detalles</th>
              <th scope="col">Estado</th>
            </tr>
          </thead> 
          <tbody>
            <?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-<?php echo e($comentario->Estado->Color); ?>">
                  <th scope="row"><?php echo e($comentario->id); ?></th>
                  <td><?php echo e($comentario->Tipo); ?></td>
                  <td><?php echo e($comentario->fechaHora); ?></td>
                  <td>
                    <button class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#detalleSoporte<?php echo e($comentario->id); ?>"><img src="<?php echo e(asset('css/imagenes/file-earmark.svg')); ?>"></button>
                    <?php echo $__env->make('admin.partials.modalDetalleSoporte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                  <td><?php echo e($comentario->Estado->Estado); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
          </tbody>
        </table>
        <div>
          <?php echo $comentarios->links(); ?>

        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/admin/gestionarSoporte.blade.php ENDPATH**/ ?>