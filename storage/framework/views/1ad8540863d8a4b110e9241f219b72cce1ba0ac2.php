<div class="modal fade" id="modificarProducto<?php echo e($producto->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" method="POST">
        <div class="modal-header">
          <h3 class="modal-title">Modificar</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('menu.update',$producto->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <h5>Nombre</h5>
                <input type="text" class="form-control" name="nombre" value="<?php echo e($producto->Nombre); ?>" minlength="3" maxlength="30" required>
              </div>
              <div>
                <h5>Disponibilidad</h5>
                <select class="form-select" aria-label="Default select example" name="disponibilidad" required>
                  <option value="<?php echo e($producto->Disponibilidades->id); ?>" hidden selected><?php echo e($producto->Disponibilidades->Disponibilidad); ?></option>
                  <option value="1">Disponible</option>
                  <option value="2">No disponible</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <h5>Descripcion</h5>
              <textarea class="form-control" name="descripcion" maxlength="200" minlength="20" required><?php echo e($producto->Descripcion); ?></textarea>
            </div>
            <div class="mb-3">
              <h5>Categoría</h5>
              <select class="form-select" aria-label="Default select example" name="categoria" required>
                <option value="<?php echo e($producto->id_categoria); ?>" hidden selected><?php echo e($producto->Categoria->Categoria); ?></option>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->Categoria); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="mb-3">
              <h5>Precio</h5>
              <input type="number" class="form-control" name="precio" value="<?php echo e($producto->Precio); ?>" min="50" max="15000" required>
            </div>
            
            <div class="mb-3">
              <h5>Foto del producto</h5>
              <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-outline-secondary" >Guardar cambios</button>
          
        </form>
        <?php if(Auth::user()->id_tipousuario == 1): ?>
          <form action="<?php echo e(route('menu.destroy', $producto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar producto</button>
            <div class="dropdown-menu p-4 shadow-lg">
              <p>¿Desea eliminar el producto?</p>
              
              <button type="submit" class="btn btn-outline-danger">Continuar</button>
            </div>
          </form>
        <?php endif; ?>
        
        </div>
      </div>
      
    </div>
  </div>

  <?php /**PATH C:\laragon\www\Proyecto\resources\views/vendedor/partials/ModalModificarProducto.blade.php ENDPATH**/ ?>