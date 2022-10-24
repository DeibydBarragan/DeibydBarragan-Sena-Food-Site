<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <title>Factura</title>
</head>
<body>
    <h3 style="font-family: Arial;">Pedido #<?php echo e($pedido->id); ?></h3>
    <h5 style="font-family: Verdana;">Id del usuario: <?php echo e($pedido->id_usuario); ?></h5>
    <h5 style="font-family: Verdana;">Nombre del usuario: <?php echo e($pedido->Usuario->Nombre); ?> <?php echo e($pedido->Usuario->Apellidos); ?></h5>
    <h5 style="font-family: Verdana;">Fecha: <?php echo e($pedido->Fecha); ?></h5>
    <h5 style="font-family: Verdana;">Método de pago: <?php echo e($pedido->Metodopago->Metodo); ?></h5>
    <h4 style="font-family: Verdana;">Productos </h4>
    <?php $__currentLoopData = $productosPedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        <h5 style="font-family: Verdana;"><?php echo e($producto->Productos->Nombre); ?></h5>
        <h5 style="font-family: Verdana;">$<?php echo e($producto->Productos->Precio); ?> x <?php echo e($producto->Cantidad); ?>= $<?php echo e($producto->Productos->Precio * $producto->Cantidad); ?></h5>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h4 style="font-family: Verdana;">Total: $<?php echo e($pedido->Precio); ?> </h4>

    <footer class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">© 2022 SENA FOOD-SITE, Inc</p>

          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="https://www.youtube.com/watch?v=mCdA4bJAGGk" class="nav-link px-2 text-muted">Hecho por los pibes</a></li>
          </ul>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\laragon\www\Proyecto\resources\views/mails/factura.blade.php ENDPATH**/ ?>