


<?php $__env->startSection('title','Soporte técnico'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('comentarioCreado') ): ?>
  <?php $__env->startSection('mensaje',session('comentarioCreado')); ?>
  <?php $__env->startSection('color','danger'); ?>
<?php endif; ?>



    <!--SOPORTE TÉCNICO-->
    <form class="container-fluid col-11 col-md-10 col-lg-8 col-xl-7 mt-3" method="POST" action="<?php echo e(route('soporte.create')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col">
            <h2>Soporte técnico</h2>
            <h4>Haz una breve descripción del problema que tuviste con la página web</h4>
        </div>
        <div class="col col-5 col-sm-3 mt-3">
            <input type="text" name="tipo" placeholder="Tipo de error" class="form-control" value="<?php echo e(old('tipo')); ?>" minlength="4" maxlength="15" required>
        </div>
        <div class="col col-11 col-sm-10 shadow mt-4">
            <textarea class="form-control" placeholder="Descripción del error..." name="comentario" minlength="20" maxlength="200" required><?php echo e(old('comentario')); ?></textarea>
        </div>
        <div class="col mt-3 ">
            <h5>Puedes adjuntar una foto o pantallazo del error</h5>
            <input class="form-control w-75" type="file" name="imagen" accept="image/*">
            <?php $__errorArgs = ['imagen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <h5 class="text-danger mt-2"><?php echo e($message); ?></h5>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="submit" class="btn btn-primary col-4 col-sm-3 col-md-2 mt-3"><img src="<?php echo e(asset('css/imagenes/send.svg')); ?>"> Enviar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/soporte.blade.php ENDPATH**/ ?>