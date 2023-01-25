<form class="card col-5 col-md-3 col-lg-2 col-xl-2  rounded-3" action="<?php echo e(route('addToCart', $producto->id)); ?>">
    <a href="<?php echo e(route('productos.show', $producto->id)); ?>">
      <img src="<?php echo e(Storage::url($producto->Foto)); ?>" class="img-thumbnail border-0 rounded-4">
    </a>
    <div class="card-body">
      <a href="<?php echo e(route('productos.show', $producto->id)); ?>" style="text-decoration: none">
        <h5 class="card-title text-dark"><?php echo e($producto->Nombre); ?></h5>
      </a>
      
      <p class="card-text">$<?php echo e($producto->Precio); ?></p>
      <?php if(auth()->guard()->check()): ?>
          
        <?php if(Auth::user()->id_tipousuario == 3): ?>
          <button class="btn btn-outline-primary" type="submit">Añadir al carrito</button>
        <?php else: ?>

          <?php if($producto->Disponibilidad == 1): ?>
            <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-outline-primary" type="submit">Visualizar</a> 
          <?php else: ?>
            <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-outline-dark" type="submit">No disponible</a> 
          <?php endif; ?>

        <?php endif; ?>
      <?php endif; ?>

      <?php if(auth()->guard()->guest()): ?>
        <button class="btn btn-outline-primary float-bottom" type="submit">Añadir al carrito</button>  
      <?php endif; ?>
    </div>
</form><?php /**PATH C:\laragon\www\Proyecto\resources\views/partials/contenedorProducto.blade.php ENDPATH**/ ?>