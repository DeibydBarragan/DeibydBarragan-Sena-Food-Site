


<?php $__env->startSection('title','Menú'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('productoCreado') ): ?>
  <?php $__env->startSection('mensaje',session('productoCreado')); ?>
  <?php $__env->startSection('color','danger'); ?>
<?php endif; ?>
    
<?php if( session('productoEliminado') ): ?>

  <?php $__env->startSection('mensaje', session('productoEliminado')); ?>
  <?php $__env->startSection('color','dark'); ?>

<?php endif; ?>

<?php if( session('productoEditado') ): ?>

  <?php $__env->startSection('mensaje', session('productoEditado')); ?>
  <?php $__env->startSection('color','success'); ?>

<?php endif; ?>

<?php if( session('productoCarrito') ): ?>
  <?php $__env->startSection('mensaje',session('productoCarrito')); ?>
  <?php $__env->startSection('color','danger'); ?>
<?php endif; ?>

    
    <div class="container-fluid col col-xxl-10 mt-3 mt-sm-2" name="catalogo">
        <?php echo $__env->make('partials.filtrar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row justify-content-center">
          <div class="row mt-2 col-11">
            <?php if(isset($categoria)): ?>    
              <h1><?php echo e($categoria); ?></h1>
            <?php endif; ?>
          </div>
        </div>

        <?php if(auth()->guard()->check()): ?>
          <?php if(Auth::user()->id_tipousuario == 3): ?>
          <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($producto->Disponibilidad == 1): ?>
                <?php echo $__env->make('partials.contenedorProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php else: ?>
            <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
              <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo $__env->make('partials.contenedorProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(auth()->guard()->guest()): ?>
          <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($producto->Disponibilidad == 1): ?>
                <?php echo $__env->make('partials.contenedorProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>
        
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/menu.blade.php ENDPATH**/ ?>