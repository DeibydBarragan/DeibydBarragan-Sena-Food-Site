<div class="modal fade" id="modificarUsuario{{ $usuario->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Modificar Perfil</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('gestionarUsuarios.update', $usuario->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <label class="col-form-label"><h5>Nombre</h5></label>
                <input type="text" class="form-control" name="nombre" value="{{ $usuario->Nombre }}" required maxlength="30">
              </div>
              <div>
                <label class="col-form-label"><h5>Apellido</h5></label>
                <input type="text" class="form-control" name="apellido" value="{{ $usuario->Apellidos }}" required minlength="3" maxlength="30">
              </div>
            </div>

            <div class="mb-3">
              <div>
                  <label class="col-form-label" required><h5>Correo</h5></label>
                  <input type="email" class="form-control" name="correo" value="{{ $usuario->Correo }}" maxlength="40" required>
              </div>
            </div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Rol</h5></label>
                    <select class="form-select" name="tipousuario" required>
                      <option value="{{ $usuario->id_tipousuario }}" hidden selected>{{ $usuario->Tipousuarios->Rol }}</option>
                      @foreach ($tipousuarios as $tipousuario)
                          <option value="{{$tipousuario->id}}">{{$tipousuario->Rol}}</option>
                      @endforeach
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
                    <input type="text" class="form-control" placeholder="{{ $usuario->id }}" disabled>
                </div>
            </div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Centro de enseñanza</h5></label>
                    <select class="form-control" name="centro" required>
                      <option value="{{ $usuario->id_centro }}" hidden selected>{{ $usuario->Centros->Centro }}</option>
                      @foreach ($centros as $centro)
                          <option value="{{$centro->id}}">{{$centro->Centro}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
              <label for="formFile" class="form-label"><h5>Cambiar foto de perfil</h5></label>
              <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
            </div>
            
            @if ($usuario->Foto != null)
              <div class="mb-3">
                <a href="{{ route('eliminarFoto', $usuario->id) }}" class="btn btn-outline-dark">Borrar foto</a>
              </div>
            @endif
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
        </form>

        <form action="{{ route('gestionarUsuarios.destroy', $usuario->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar usuario</button>
          <div class="dropdown-menu p-4 shadow-lg">
            <p>¿Desea eliminar el usuario?</p>
            
            <button type="submit" class="btn btn-outline-danger">Continuar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
</div>