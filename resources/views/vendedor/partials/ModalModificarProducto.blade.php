<div class="modal fade" id="modificarProducto{{$producto->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" method="POST">
        <div class="modal-header">
          <h3 class="modal-title">Modificar</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('menu.update',$producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 d-flex gap-3 align-items-center">
              <div>
                <h5>Nombre</h5>
                <input type="text" class="form-control" name="nombre" value="{{$producto->Nombre}}" minlength="3" maxlength="30" required>
              </div>
              <div>
                <h5>Disponibilidad</h5>
                <select class="form-select" aria-label="Default select example" name="disponibilidad" required>
                  <option value="{{ $producto->Disponibilidades->id }}" hidden selected>{{ $producto->Disponibilidades->Disponibilidad}}</option>
                  <option value="1">Disponible</option>
                  <option value="2">No disponible</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <h5>Descripcion</h5>
              <textarea class="form-control" name="descripcion" maxlength="200" minlength="20" required>{{$producto->Descripcion}}</textarea>
            </div>
            <div class="mb-3">
              <h5>Categoría</h5>
              <select class="form-select" aria-label="Default select example" name="categoria" required>
                <option value="{{$producto->id_categoria}}" hidden selected>{{$producto->Categoria->Categoria}}</option>
                @foreach($categorias as $categoria)
                 <option value="{{ $categoria->id }}">{{ $categoria->Categoria }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <h5>Precio</h5>
              <input type="number" class="form-control" name="precio" value="{{$producto->Precio}}" min="50" max="15000" required>
            </div>
            
            <div class="mb-3">
              <h5>Foto del producto</h5>
              <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-outline-secondary" >Guardar cambios</button>
          
        </form>
        @if (Auth::user()->id_tipousuario == 1)
          <form action="{{ route('menu.destroy', $producto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Eliminar producto</button>
            <div class="dropdown-menu p-4 shadow-lg">
              <p>¿Desea eliminar el producto?</p>
              
              <button type="submit" class="btn btn-outline-danger">Continuar</button>
            </div>
          </form>
        @endif
        
        </div>
      </div>
      
    </div>
  </div>

  