<div class="card col-5 col-lg-4 col-xl-3 border border-2 rounded-3">
    <a href="<?php echo e(route('productos.show', $producto->id_producto)); ?>">
      <img src="<?php echo e(Storage::url($producto->Productos->Foto)); ?>" class="img-thumbnail border-0 rounded-4" alt="Hamburguesa">
    </a>
    <div class="card-body">
      <a href="<?php echo e(route('productos.show', $producto->id_producto)); ?>" style="text-decoration: none; color:rgb(32, 32, 32)">
        <h5 class="card-title text-dark" ><?php echo e($producto->Cantidad); ?> <?php echo e($producto->Productos->Nombre); ?>(s)</h5>
      </a>
      <p class="card-text">Subtotal: $<?php echo e($producto->Subtotal); ?></p>
      <button class="btn btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Cantidad  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
      </svg></button>

      <form class="dropdown-menu p-4 bg-dark shadow-lg" action="<?php echo e(route('cart.update', $producto->id_producto)); ?>">
        <div class="mb-3">

          <input type="number" style="box-shadow: none !important;" class="form-control" value="<?php echo e($producto->Cantidad); ?>" name="cantidadProducto" max="10">
        </div>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
      
      <a href=" <?php echo e(route('cart.destroy', $producto->id_producto )); ?> " class="btn btn-outline-dark mt-2">Eliminar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></a>


    </div>

</div><?php /**PATH C:\laragon\www\Proyecto\resources\views/consumidor/partials/contenedorCarrito.blade.php ENDPATH**/ ?>