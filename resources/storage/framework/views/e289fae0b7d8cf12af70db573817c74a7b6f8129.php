<div class="modal fade" id="crearProducto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" method="POST" action="<?php echo e(route('menu.create')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="modal-header">
          <h3 class="modal-title">Agregar producto</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <h5>Nombre</h5>
                <input type="text" class="form-control" name="nombre" minlength="3" maxlength="30" required>
              </div>
              <div>
                <h5>Disponibilidad</h5>
                <select class="form-select" aria-label="Default select example" name="disponibilidad" required>
                  <option value="1" selected>Disponible</option>
                  <option value="2">No disponible</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <h5>Descripcion</h5>
              <textarea class="form-control" name="descripcion" maxlength="200" minlength="20" required></textarea>
            </div>
            <div class="mb-3">
              <h5>Categoría</h5>
              <select class="form-select" aria-label="Default select example" name="categoria" required>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->Categoria); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="mb-3">
              <h5>Precio</h5>
              <input type="number" class="form-control" name="precio" min="50" max="15000" required>
            </div>
            
            <div class="mb-3">
              <h5>Foto del producto</h5>
              <input class="form-control" type="file" id="formFile" name="foto" accept="image/*" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-secondary">Añadir producto</button>
        </div>
      </form>
    </div>
  </div><?php /**PATH C:\laragon\www\Proyecto\resources\views/vendedor/partials/ModalCrearProducto.blade.php ENDPATH**/ ?>