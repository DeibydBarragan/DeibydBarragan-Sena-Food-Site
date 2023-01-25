<div class="row col-12 justify-content-center">
    <div class="row col-12 col-sm-11">
      <div class="col col-sm-12 col-lg-9 col-xl-10">
        <div class="row col-12 col-md-10 col-lg-9 col-xl-7">
          <div class="col col-6 col-sm-auto">
            <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
              <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                  <li><a class="dropdown-item" href="<?php echo e(route('menu.categoria',$categoria->id)); ?>"><?php echo e($categoria->Categoria); ?></a></li>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          
          <div class="col col-6 col-sm-auto">
            <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Precios
            </button>
              <ul class="dropdown-menu dropdown-menu-dark shadow-lg">

                  <li><a class="dropdown-item" href="<?php echo e(route('menu.categoria',"menorprecio")); ?>">Menor precio</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(route('menu.categoria',"mayorprecio")); ?>">Mayor precio</a></li>
                
              </ul>
          </div>

          <?php if(auth()->guard()->check()): ?>
              
            <?php if((Auth::user()->id_tipousuario == 1) or (Auth::user()->id_tipousuario == 2)): ?>
              
              <div class="col col-8 col-sm-auto mt-3 mt-sm-0">
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#crearProducto">Añadir producto</button>
                <?php echo $__env->make('vendedor.partials.ModalCrearProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            <?php endif; ?>
            
          <?php endif; ?>
          
          
        </div> 
      </div>
    </div>
</div><?php /**PATH C:\laragon\www\Proyecto\resources\views/partials/filtrar.blade.php ENDPATH**/ ?>