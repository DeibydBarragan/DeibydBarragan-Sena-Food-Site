<div class="modal fade" id="modificarProducto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" action="{{ route('modificarse',$usuario->id ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h3 class="modal-title">Modificar Perfil</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <label class="col-form-label"><h5>Nombre</h5></label>
                <input name="nombre" type="text" class="form-control" maxlength="30" value={{ $usuario->Nombre }} required>
              </div>
              <div>
                <label class="col-form-label"><h5>Apellido</h5></label>
                <input name="apellido" type="text" class="form-control" maxlength="30" value="{{ $usuario->Apellidos }}" required>
              </div>
            </div>
            <div>

            </div>
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Rol</h5></label>
                    <input type="text" class="form-control" placeholder="{{ $usuario->Tipousuarios->Rol }}" disabled>
                </div>
            </div>
            <div class="mb-3">
              <div>
                  <label class="col-form-label"><h5>Correo electrónico</h5></label>
                  <input type="text" class="form-control" placeholder="{{ $usuario->Correo }}" disabled>
              </div>
            </div>
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Contraseña</h5></label>
                    <input name="contrasena" type="password" class="form-control" maxlength="15">
                </div>
            </div>
            
            {{--<div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Confirmar contraseña</h5></label>
                    <input type="password" class="form-control">
                </div>
            </div>--}}
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>ID</h5></label>
                    <input type="text" class="form-control" placeholder="{{ $usuario->id }}" disabled>
                </div>
            </div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Centro de enseñanza</h5></label>
                    <input type="text" class="form-control" placeholder="{{ $usuario->Centros->Centro }}" disabled>
                </div>
            </div>
            
            <div class="mb-3">
              <label for="formFile" class="form-label"><h5>Cambiar foto de perfil</h5></label>
              <input name="foto" class="form-control" type="file" accept="image/*">
            </div>
            @if ($usuario->Foto != null)
              <div class="mb-3">
                <a href="{{ route('eliminarFoto', $usuario->id) }}" class="btn btn-outline-dark">Borrar foto</a>
              </div>
            @endif
            
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-outline-success" value="Guardar cambios">
      </form>

      <form action="{{ route('eliminarse', $usuario->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar usuario</button>
        <div class="dropdown-menu p-4 shadow-lg">
          <p>¿Desea eliminar su usuario?</p>
          
          <button type="submit" class="btn btn-outline-danger">Continuar</button>
        </div>
      </form>

    </div>
      
    </div>
  </div>