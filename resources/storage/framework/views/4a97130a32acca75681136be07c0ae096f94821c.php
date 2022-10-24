<div class="modal fade" id="detalleSoporte<?php echo e($comentario->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Error #<?php echo e($comentario->id); ?></h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo e(route('soporteAdmin.update', $comentario->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
              <label class="col-form-label"><h5>Id usuario</h5></label>
              <p><?php echo e($comentario->id_usuario); ?></p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Tipo de error</h5></label>
                <p><?php echo e($comentario->Tipo); ?></p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Fecha</h5></label>
                <p><?php echo e($comentario->fechaHora); ?></p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Descripción</h5></label>
                <p><?php echo e($comentario->Comentario); ?></p>
            </div>

            <div class="mb-3">
                <label class="col-form-label"><h5>Estado</h5></label><br>
                <select class="form-control" name="estado">
                  <option value="<?php echo e($comentario->Estado->id); ?>" hidden selected><?php echo e($comentario->Estado->Estado); ?></option>
                  <?php $__currentLoopData = $estados_soporte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($estado->id); ?>"><?php echo e($estado->Estado); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <?php if($comentario->Imagen != null): ?>
              <div class="mb-3">
                <label class="col-form-label"><h5>Imagen</h5></label><br>
                <a href="<?php echo e(Storage::url($comentario->Imagen)); ?>" download ="error<?php echo e($comentario->id); ?>" class="btn btn-outline-secondary">Descargar imagen</a>
              </div>
            <?php endif; ?>
            
          </div>
        <div class="modal-footer">
          <button class="btn btn-outline-dark" >Guardar cambios</button>
        </form>
        <form action="<?php echo e(route('soporteAdmin.destroy', $comentario->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar error</button>
          <div class="dropdown-menu p-4 shadow-lg">
            <p>¿Desea eliminar el error?</p>
            
            <button type="submit" class="btn btn-outline-danger">Continuar</button>
          </div>
        </form>
        </div>
      </form>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\Proyecto\resources\views/admin/partials/modalDetalleSoporte.blade.php ENDPATH**/ ?>