<div class="modal fade" id="detalleSoporte{{ $comentario->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Error #{{ $comentario->id }}</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('soporteAdmin.update', $comentario->id)}}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="col-form-label"><h5>Id usuario</h5></label>
              <p>{{ $comentario->id_usuario }}</p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Tipo de error</h5></label>
                <p>{{ $comentario->Tipo }}</p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Fecha</h5></label>
                <p>{{ $comentario->fechaHora }}</p>
            </div>
            
            <div class="mb-3">
                <label class="col-form-label"><h5>Descripción</h5></label>
                <p>{{ $comentario->Comentario }}</p>
            </div>

            <div class="mb-3">
                <label class="col-form-label"><h5>Estado</h5></label><br>
                <select class="form-control" name="estado">
                  <option value="{{ $comentario->Estado->id }}" hidden selected>{{ $comentario->Estado->Estado }}</option>
                  @foreach ($estados_soporte as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->Estado }}</option>
                  @endforeach
                </select>
            </div>

            @if ($comentario->Imagen != null)
              <div class="mb-3">
                <label class="col-form-label"><h5>Imagen</h5></label><br>
                <a href="{{ Storage::url($comentario->Imagen) }}" download ="error{{ $comentario->id }}" class="btn btn-outline-secondary">Descargar imagen</a>
              </div>
            @endif
            
          </div>
        <div class="modal-footer">
          <button class="btn btn-outline-dark" >Guardar cambios</button>
        </form>
        <form action="{{ route('soporteAdmin.destroy', $comentario->id) }}" method="POST">
          @csrf
          @method('DELETE')
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
