


<?php $__env->startSection('title','Producto'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('productoEditado') ): ?>
  <?php $__env->startSection('mensaje',session('productoEditado')); ?>
  <?php $__env->startSection('color','success'); ?>
<?php endif; ?>

<?php if( session('productoCarrito') ): ?>
  <?php $__env->startSection('mensaje',session('productoCarrito')); ?>
  <?php $__env->startSection('color','danger'); ?>
<?php endif; ?>
    <!--PRODUCTO-->
    <!--VISTA DEL PRODUCTO-->
    <div class="container-fluid col col-xxl-10 mt-3 mt-sm-2">
        <div class="row justify-content-center align-items-center">
            <div class="col col-10 col-sm-6 col-md-5 col-lg-4">
                <img src="<?php echo e(Storage::url($producto->Foto)); ?>" style="width:90%; max-width:410px; float:right;">
            </div>

            <div class="col col-12 col-sm-6 col-md-5 col-lg-4">
                 <h1><?php echo e($producto->Nombre); ?></h1>
                 <h3>$<?php echo e($producto->Precio); ?></h3>
                 <textarea class="form-control shadow" rows="3" disabled><?php echo e($producto->Descripcion); ?>

                 </textarea>
                <hr>
                <h5>Categoría:</h5>
                <a href="<?php echo e(route('menu.categoria', $producto->id_categoria)); ?>" class="btn btn-outline-success"><?php echo e($producto->Categoria->Categoria); ?></a>
                <hr>
                
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->id_tipousuario == 3): ?>
                    <?php if($producto->Disponibilidad == 2): ?>
                    <h4>Lo sentimos, este producto no está disponible</h4>
                    <?php else: ?>
                            
                        <form action="<?php echo e(route('addToCart', $producto->id)); ?>">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="button-addon2" name="cantidadProducto" max="10">
                                
                                    <button type="submit" class="btn btn-outline-primary">Añadir al carrito</button>                     
                                
                            </div>
                        </form>
                    <?php endif; ?>
                    
                    <?php else: ?>

                        <?php if($producto->Disponibilidad == 2): ?>
                            <h4>No disponible</h4><hr>
                        <?php endif; ?> 
                        <div>
                            <button class="btn btn-outline-dark mb-3" data-bs-toggle="modal" data-bs-target="#modificarProducto<?php echo e($producto->id); ?>">Modificar producto</button>
                            <?php echo $__env->make('vendedor.partials.ModalModificarProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div> 
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php if(auth()->guard()->guest()): ?>
                    <?php if($producto->Disponibilidad == 2): ?>
                    <h4>Lo sentimos, este producto no está disponible</h4>
                    <?php else: ?>
                            
                        <form action="<?php echo e(route('addToCart', $producto->id)); ?>">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="button-addon2" name="cantidadProducto" max="10">
                                
                                    <button type="submit" class="btn btn-outline-primary">Añadir al carrito</button>                     
                                
                            </div>
                        </form>
                    <?php endif; ?>
                <?php endif; ?>
                
            </div>
        </div>
    <!--PRODUCTOS RELACIONADOS-->
        <div class="row justify-content-center">
            <hr class="col-10">
            <div class="col-10">
                <h4>Productos relacionados</h4>
            </div>
        </div>
        <div class="row justify-content-center mt-3 gap-2 gap-lg-3">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('partials.contenedorProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/producto.blade.php ENDPATH**/ ?>