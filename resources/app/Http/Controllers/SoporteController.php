<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Estadosoporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SoporteController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::orderBy('fechaHora','DESC')->paginate(15);
        $estados_soporte = Estadosoporte::all();

    return view('admin.gestionarSoporte', ['comentarios' => $comentarios], ['estados_soporte' => $estados_soporte]);
    }

    public function estado($id_estado){
        $comentarios = Comentario::where('id_estado',$id_estado)->orderBy('fechaHora','DESC')->paginate(15);
        $estados_soporte = Estadosoporte::all();

    return view('admin.gestionarSoporte', ['comentarios' => $comentarios], ['estados_soporte' => $estados_soporte]);
    }

    //BUSCAR UN COMENTARIO
    public function search(Request $request){

        $nombre = trim($request->get('buscarComentario'));
        $comentarios = Comentario::orderBy('fechaHora','DESC')
                                ->where('Tipo','like','%'.$nombre.'%')
                                ->orWhere('id', $nombre)
                                ->paginate(15);
        $estados_soporte = Estadosoporte::all();

        return view('admin.gestionarSoporte', ['comentarios' => $comentarios], ['estados_soporte' => $estados_soporte]);
    }

    //CREAR UN COMENTARIO
    public function create(Request $request){

        $request->validate([
            'tipo' => 'required|min:3|max:15',
            'comentario' => 'required|min:20|max:200',
        ]);

        $comentario = new Comentario;
        $comentario->Tipo = $request->input('tipo');
        $comentario->Comentario = $request->input('comentario');
        $comentario->id_usuario = Auth::user()->id;

        if ($request->hasFile('imagen')) {

            $request->validate([
                'imagen' => 'image|max:1024'
            ]);

            $comentario->Imagen = $request->file('imagen')->store('public/comentarios');
        }

        $comentario->save();

        session()->flash('comentarioCreado', 'Tú comentario ha sido enviado con éxito');

        return redirect()->back();
    }

    //ELIMINAR UN COMENTARIO
    public function destroy($id){

        $comentario = Comentario::find($id);
        if ($comentario->Imagen != null) {
            Storage::delete($comentario->Imagen);
        }
        $comentario->delete();

        session()->flash('comentarioEliminado', 'El comentario ha sido eliminado');

        return redirect()->back();
    }   

    //MODIFICAR ESTADO DE UN COMENTARIO
    public function update(Request $request, $id){

        $comentario = Comentario::findOrFail($id);
        $comentario->id_estado = $request->input('estado');
        $comentario->save();

        session()->flash('comentarioEditado', 'Comentario modificado satisfactoriamente');

        return redirect()->back();

    }
}
