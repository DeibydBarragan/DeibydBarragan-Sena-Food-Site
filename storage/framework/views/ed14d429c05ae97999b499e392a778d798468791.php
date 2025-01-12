<div class="modal fade" id="metodoPago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form class="modal-content" method="POST" action="<?php echo e(route('cart.pay', $pedido->id)); ?>">
      <?php echo csrf_field(); ?>
        <div class="modal-header">
          <h3 class="modal-title" id="pago">Seleccionar método de pago</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
          <div class="container-fluid">
              <div class="row justify-content-center gap-5 m-3">
                  <?php $__currentLoopData = $metodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                          <div class="card col-10 col-sm-5 col-lg-3">
                              <img src="<?php echo e(asset('imgProducts/'.$metodo->Foto)); ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                  
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="metodosPago" id="metodosPago" value="<?php echo e($metodo->id); ?>">
                                      <label class="form-check-label" for="metodosPago">
                                        <h4><?php echo e($metodo->Metodo); ?></h4>
                                      </label>
                                  </div>
                              </div>
                          </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"">Realizar pago</a>
      </div>
    </form>
  </div>
</div>
<?php /**PATH C:\laragon\www\Proyecto\resources\views/consumidor/partials/contenedorMetodos.blade.php ENDPATH**/ ?>