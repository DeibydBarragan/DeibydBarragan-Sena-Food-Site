


<?php $__env->startSection('title','Perfil'); ?>


<?php $__env->startSection('content'); ?>
    <!--PERFIL-->
    <div class="container-fluid mt-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3"><br>
                <img src="
                <?php if($usuario->Foto == null): ?>
                <?php echo e(Storage::url('public/usuarios/default.svg')); ?>

                <?php else: ?>
                <?php echo e(Storage::url($usuario->Foto)); ?>

                <?php endif; ?>
                " class="mb-3 rounded-4" style="width:100%; max-width:410px">
            </div>

            <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                 <h2><?php echo e($usuario->Nombre); ?></h2><hr>
                 <h2><?php echo e($usuario->Apellidos); ?></h2><hr>
                 <h3><?php echo e($usuario->Tipousuarios->Rol); ?></h3><hr>
                 <h3><?php echo e($usuario->Centros->Centro); ?></h3><hr>
                 <h3>ID: #<?php echo e($usuario->id); ?></h3><hr>

                    <div>
                      <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modificarProducto">Modificar Usuario</button>

                      <?php echo $__env->make('partials.modalModificarse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/perfil.blade.php ENDPATH**/ ?>