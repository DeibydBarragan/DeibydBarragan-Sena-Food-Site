<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importar estilos de CSS-->
    <link rel="shortcut icon" href="<?php echo e(asset('logo.png')); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/styles2.css')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php if((session('productoCreado')) or (session('productoEliminado')) or (session('productoEditado'))
         or (session('comentarioCreado')) or (session('comentarioEliminado')) or (session('usuarioCreado')) 
         or (session('usuarioEliminado')) or (session('usuarioEditado')) or (session('productoCarrito')) 
         or (session('pedidoEditado')) or (session('pedidoEliminado')) or (session('pedidoCancelado')) 
         or (session('pedidoPagado'))): ?>
        <?php echo $__env->make('partials.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--CABECERA-->
    <?php echo $__env->make('partials.headers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--CONTENIDO-->
        <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/layouts/plantillaPrincipal.blade.php ENDPATH**/ ?>