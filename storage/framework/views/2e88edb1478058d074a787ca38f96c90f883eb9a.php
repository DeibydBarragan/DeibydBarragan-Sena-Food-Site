


<?php $__env->startSection('title','Métodos de pago'); ?>


<?php $__env->startSection('content'); ?>
    <!--MÉTODOS DE PAGO-->
    <div class="container-fluid col-12 col-lg-11 col-xl-10 mt-3">
        <div class="row justify-content-center gap-4 gap-sm-4 gap-md-5">
            <?php $__currentLoopData = $metodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col col-10 col-sm-5 col-md-5 col-lg-3 border border-2 shadow-lg rounded-4 p-4">
                    <img src="<?php echo e(asset('imgProducts/'.$metodo->Foto)); ?>" class="card-img">
                    <h3><?php echo e($metodo->Metodo); ?></h3>
                    <p>
                        <?php echo e($metodo->Descripcion); ?>

                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
      </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/metodosPago.blade.php ENDPATH**/ ?>