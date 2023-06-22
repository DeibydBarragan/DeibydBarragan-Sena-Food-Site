


<?php $__env->startSection('title','Gestionar usuarios'); ?>


<?php $__env->startSection('content'); ?>

<?php if( session('usuarioCreado') ): ?>
  <?php $__env->startSection('mensaje',session('usuarioCreado')); ?>
  <?php $__env->startSection('color','danger'); ?>
<?php endif; ?>

<?php if( session('usuarioEliminado') ): ?>
  <?php $__env->startSection('mensaje',session('usuarioEliminado') ); ?>
  <?php $__env->startSection('color','dark'); ?>
<?php endif; ?>

<?php if( session('usuarioEditado') ): ?>
  <?php $__env->startSection('mensaje',session('usuarioEditado') ); ?>
  <?php $__env->startSection('color','success'); ?>
<?php endif; ?>

<!--Tablas de usuarios-->
      
<div class="container  mt-3">
  <h1>Gestionar usuarios</h1>
    <div class="container-fluid mt-3 mt-sm-2 border border-1 rounded" name="catalogo">
            <div class="row mt-3">
              <div class="col col-auto">
                <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Roles
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                  <?php $__currentLoopData = $tipousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipousuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                      <li><a class="dropdown-item" href="<?php echo e(route('gestionarUsuarios.rol',$tipousuario->id)); ?>"><?php echo e($tipousuario->Rol); ?></a></li>
                    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </div>

              <div class="col col-auto ">
                <button class="btn btn-outline-secondary dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Centros
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
                  <?php $__currentLoopData = $centros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                      <li><a class="dropdown-item" href="<?php echo e(route('gestionarUsuarios.centro',$centro->id)); ?>"><?php echo e($centro->Centro); ?></a></li>
                    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </div>
              
              <div class="col col-auto mt-3 mt-sm-0">
                <button class="btn btn-outline-danger dropdown-toggle col-12" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ordenar por
                </button>
                  <ul class="dropdown-menu dropdown-menu-dark shadow-lg">
    
                      <li><a class="dropdown-item" href="<?php echo e(route('gestionarUsuarios.rol',"id")); ?>">Id</a></li>
                      <li><a class="dropdown-item" href="<?php echo e(route('gestionarUsuarios.rol',"nombre")); ?>">Nombre</a></li>
                    
                  </ul>
              </div>

              <div class="col col-auto mt-3 mt-md-0">
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#crearUsuario">Crear usuario</button>
                <?php echo $__env->make('admin.partials.modalCrearUsuario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>

              <div class="col col-auto mt-3 mt-lg-0">
                <form method="GET" action="<?php echo e(route('gestionarUsuarios.search')); ?>">
                  <input type="search" name="buscarUsuario" placeholder="Buscar" class="form-control">
                </form>
              </div>
            </div> 

        


    <table class="table table-bordered mt-3">
        <thead> 
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Rol</th>
            <th scope="col">Correo</th>
            <th scope="col">Centro</th>
            <th scope="col">Foto</th>
            <th scope="col">Modificar</th>

          </tr>
        </thead>
        <tbody>
          
          <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-<?php echo e($usuario->Tipousuarios->Color); ?>">
              <th scope="row"><?php echo e($usuario->id); ?></th>
              <td><?php echo e($usuario->Nombre); ?></td>
              <td><?php echo e($usuario->Apellidos); ?></td>
              <td><?php echo e($usuario->Tipousuarios->Rol); ?></td>
              <td><?php echo e($usuario->Correo); ?></td>
              <td><?php echo e($usuario->Centros->Centro); ?></td>
              <td><img src="
                <?php if($usuario->Foto == null): ?>
                <?php echo e(Storage::url('public/usuarios/default.svg')); ?>

                <?php else: ?>
                <?php echo e(Storage::url($usuario->Foto)); ?>

                <?php endif; ?>
                " width="32" height="32" class="rounded-circle"></td>
              <td>
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modificarUsuario<?php echo e($usuario->id); ?>">Modificar Usuario</button>
                <?php echo $__env->make('admin.partials.modalModificarUsuario', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <div>
        <?php echo $usuarios->links(); ?>

      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillaPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/admin/gestionarUsuarios.blade.php ENDPATH**/ ?>