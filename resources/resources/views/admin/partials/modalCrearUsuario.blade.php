<div class="modal fade" id="crearUsuario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Crear usuario</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action=" {{ route('gestionarUsuarios.create') }} " enctype="multipart/form-data">
            @csrf
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <label class="col-form-label"><h5>Nombre</h5></label>
                <input type="text" class="form-control" name="nombre" maxlength="30" required >
              </div>
              <div>
                <label class="col-form-label"><h5>Apellidos</h5></label>
                <input type="text" class="form-control" name="apellido" required minlength="3" maxlength="30">
              </div>
            </div>
            <div>

            <div class="mb-3">
                <div>
                    <label class="col-form-label" required><h5>Correo</h5></label>
                    <input type="email" class="form-control" name="correo" required maxlength="40">
                </div>
            </div>

            </div>
            <div class="mb-3">
                    <label class="col-form-label"><h5>Rol</h5></label>
                    <select class="form-select" name="tipousuario" required>
                      @foreach ($tipousuarios as $tipousuario)
                          <option value="{{$tipousuario->id}}">{{$tipousuario->Rol}}</option>
                      @endforeach
                    </select>
            </div>
            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Contraseña</h5></label>
                    <input type="password" class="form-control" name="contrasena" required minlength="7" maxlength="15">
                </div>
            </div>
            
            {{--<div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Confirmar contraseña</h5></label>
                    <input type="password" class="form-control" name="clave2" required>
                </div>
            </div>--}}

            <div class="mb-3">
                <div>
                    <label class="col-form-label"><h5>Centro de enseñanza</h5></label>
                    <select class="form-select" name="centro" required>
                      @foreach ($centros as $centro)
                          <option value="{{$centro->id}}">{{$centro->Centro}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
              <label for="formFile" class="form-label"><h5>Foto de perfil</h5></label>
              <input class="form-control" type="file" name="foto" accept="image/*">
            </div>
            
          
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-outline-danger" value="Crear usuario">
          </form>
        </div>
      </div>
    </div>
  </div>