<div class="modal fade" id="modificarUsuario<?php echo e($usuario->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Modificar Perfil</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('gestionarUsuarios.update', $usuario->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <label class="col-form-label"><h5>Nombre</h5></label>
                <input type="text" class="form-control" name="nombre" value="<?php echo e($usuario->Nombre); ?>" required maxlength="30">
              </div>
              <div>
                <label class="col-form-label"><h5>Apellido</h5></label>
                <input type="text" class="form-control" name="apellido" value="<?php echo e($usuario->Apellidos); ?>" required minlength="3" maxlength="30">
              </div>
            </div>

            <div class="mb-3">
              <div>
                  <label class="col-form-label" required><h5>Correo</h5></label>
                  <input type="email" class="form-control" name="correo" value="<?php echo e($usuario->Correo); ?>" maxlength="40" required>
              </div>
            </div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Rol</h5></label>
                    <select class="form-select" name="tipousuario" required>
                      <option value="<?php echo e($usuario->id_tipousuario); ?>" hidden selected><?php echo e($usuario->Tipousuarios->Rol); ?></option>
                      <?php $__currentLoopData = $tipousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipousuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($tipousuario->id); ?>"><?php echo e($tipousuario->Rol); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Contraseña</h5></label>
                    <input type="password" class="form-control" name="contrasena" maxlength="15">
                </div>
            </div>
            
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>ID</h5></label>
                    <input type="text" class="form-control" placeholder="<?php echo e($usuario->id); ?>" disabled>
                </div>
            </div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Centro de enseñanza</h5></label>
                    <select class="form-control" name="centro" required>
                      <option value="<?php echo e($usuario->id_centro); ?>" hidden selected><?php echo e($usuario->Centros->Centro); ?></option>
                      <?php $__currentLoopData = $centros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($centro->id); ?>"><?php echo e($centro->Centro); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
              <label for="formFile" class="form-label"><h5>Cambiar foto de perfil</h5></label>
              <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
            </div>
            
            <?php if($usuario->Foto != null): ?>
              <div class="mb-3">
                <a href="<?php echo e(route('eliminarFoto', $usuario->id)); ?>" class="btn btn-outline-dark">Borrar foto</a>
              </div>
            <?php endif; ?>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
        </form>

        <form action="<?php echo e(route('gestionarUsuarios.destroy', $usuario->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar usuario</button>
          <div class="dropdown-menu p-4 shadow-lg">
            <p>¿Desea eliminar el usuario?</p>
            
            <button type="submit" class="btn btn-outline-danger">Continuar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
</div><?php /**PATH C:\laragon\www\Proyecto\resources\views/admin/partials/modalModificarUsuario.blade.php ENDPATH**/ ?>