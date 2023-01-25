


<?php $__env->startSection('title','Carrito'); ?>


<?php $__env->startSection('content'); ?>
    <!--QR-->
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-10 col-md-5 col-lg-4">
                <div class="container border boder-2 rounded-3 shadow-lg p-3 p-md-5 mb-4">
                    <h3>¡Gracias por tu compra!</h3>
                        <h4>Id del pedido: <?php echo e($pedido->id); ?> </h4>
                    <?php if( $pedido->id_pago == 1 ): ?>
                        <h5 class="text-dark">Cuando pagues, tu factura te llegará al correo electrónico.</h5>
                        <h5 class="text-dark">También te llegará una notificación a tu correo cuando esté listo tu pedido, puedes revisar el estado en <a href="<?php echo e(route('pedidosUsuario')); ?>">Tus pedidos</a>.</h5>
                    <?php else: ?>
                        <h5 class="text-dark">Te llegará una notificación a tu correo electrónico cuando esté listo tu pedido, también puedes revisar el estado en <a href="<?php echo e(route('pedidosUsuario')); ?>">Tus pedidos</a>.</h5>
                        <h5 class="text-dark">Tu factura te llegará al correo electrónico</h5>
                    <?php endif; ?>     
                </div>
            </div>
            <div class="col-10 col-md-5 col-lg-4">
                <?php if( $pedido->id_pago == 1 ): ?>
                    <h5 class="text-dark">Presenta este código QR en la cafetería para poder pagar y reclamar tu pedido:</h5>
                <?php else: ?>
                    <h5 class="text-dark">Presenta este código QR en la cafetería para poder reclamar tu pedido:</h5>
                <?php endif; ?>
                <center>
                    <object data="<?php echo e(Storage::url('public/qrcodes/'.md5($pedido->id_usuario.'-'.$pedido->id).'.svg')); ?>"></object>
                </center>
                
            </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/consumidor/codigo.blade.php ENDPATH**/ ?>