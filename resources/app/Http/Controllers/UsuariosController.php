<?php

namespace App\Http\Controllers;

use App\Models\Tipousuario;
use App\Models\Usuario;
use App\Models\Centroaprendizaje;
use App\Models\Comentario;
use App\Models\Historialpedidos;
use App\Models\Pedidos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{

    public function index(){

        //sin paginacion 
        /*
        $usuarios = Usuario::orderBy('id')->get();
        $tipousuarios = Tipousuario::all();
        $centros = Centroaprendizaje::all();
        */
        $usuarios = User::orderBy('id')->paginate(10);
        $tipousuarios = Tipousuario::all();
        $centros = Centroaprendizaje::all();

        return view('admin.gestionarUsuarios', ['usuarios' => $usuarios, 'tipousuarios' => $tipousuarios], ['centros' => $centros]);
    }

    public function show(){

        $usuario = Auth::user();
        if($usuario == null) {
            return to_route('login');
        }
        else {

            return view('perfil', ['usuario' => $usuario]);
            
        }
    }

    public function rol($id_rol){

        $tipousuarios  = Tipousuario::all();
        $centros = Centroaprendizaje::all();

        if($id_rol == "id"){
            $usuarios = User::orderBy('id')->paginate(10);
        }

        elseif($id_rol == "nombre"){
            $usuarios = User::orderBy('Nombre')->paginate(10);
        }

        else{
            $usuarios = User::where('id_tipousuario',$id_rol)->orderBy('id')->paginate(10);
        }
       
        return view('admin.gestionarUsuarios', ['usuarios' => $usuarios, 'tipousuarios' => $tipousuarios], ['centros' => $centros]);
    }

    public function centro($id_centro){

        $usuarios = User::where('id_centro',$id_centro)->orderBy('id')->paginate(10);
        $tipousuarios  = Tipousuario::all();
        $centros = Centroaprendizaje::all();

        return view('admin.gestionarUsuarios', ['usuarios' => $usuarios, 'tipousuarios' => $tipousuarios], ['centros' => $centros]);
    }

    //BUSCAR UN USUARIO
    public function search(Request $request){

        $nombre = trim($request->get('buscarUsuario'));
        $usuarios = User::orderBy('id')
                                ->where('id','like','%'.$nombre.'%')
                                ->orWhere('Nombre','like','%'.$nombre.'%')
                                ->orWhere('Apellidos','like','%'.$nombre.'%')
                                ->orWhere('Correo','like','%'.$nombre.'%')
                                ->paginate(10);
        $tipousuarios  = Tipousuario::all();
        $centros = Centroaprendizaje::all();

        return view('admin.gestionarUsuarios', ['usuarios' => $usuarios, 'tipousuarios' => $tipousuarios], ['centros' => $centros]);
    }

    public function create(Request $request){

        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|min:3|max:30',
            'correo' => 'required|max:40',
            'contrasena' => 'required|min:7|max:32',
        ]);
        $usuario = new User;
        $usuario->Nombre = $request->input('nombre');
        $usuario->Apellidos = $request->input('apellido');
        $usuario->Correo = $request->input('correo');
        $usuario->Contrasena = md5($request->input('contrasena'));
        $usuario->id_centro = $request->input('centro');
        $usuario->id_tipousuario = $request->input('tipousuario');

        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'image'
            ]);

            $usuario->Foto = $request->file('foto')->store('public/usuarios');
        }

        $usuario->save();

        session()->flash('usuarioCreado', 'Usuario creado satisfactoriamente');

        return redirect()->back();;
    }

    //ELIMINAR UN USUARIO
    public function destroy($id){

        $usuario = User::find($id);
        $pedidos = Historialpedidos::where('id_usuario',$id)->get();
        foreach ($pedidos as $pedido ) {
            Pedidos::where('id_pedido', $pedido->id)->delete();
        }
        Historialpedidos::where('id_usuario',$id)->delete();
        Comentario::where('id_usuario',$id)->delete();
        if ($usuario->Foto != null) {
            Storage::delete($usuario->Foto);
        }
        $usuario->delete();

        session()->flash('usuarioEliminado', 'El usuario ha sido eliminado');

        return redirect()->back();;
    } 
    
    //ACTUALIZAR
    public function update(Request $request, $id) {

        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|min:3|max:30',
            'correo' => 'required|max:40',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->Nombre = $request->input('nombre');
        $usuario->Apellidos = $request->input('apellido');
        $usuario->Correo = $request->input('correo');

        if($request->input('contrasena') != null) {
            $request->validate([
                'contrasena' => 'max:15',
            ]);
            $usuario->Contrasena = md5($request->input('contrasena'));
        }

        $usuario->id_centro = $request->input('centro');
        $usuario->id_tipousuario = $request->input('tipousuario');

        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'image|max:1024'
            ]);

            $usuario->Foto = $request->file('foto')->store('public/usuarios');
        }

        $usuario->save();

        session()->flash('usuarioEditado', 'Usuario modificado satisfactoriamente');

        return redirect()->back();
    }

    public function modificarse(Request $request, $id) {

        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|min:3|max:30',
        ]);

        $usuario = User::findOrFail($id);
        $usuario->Nombre = $request->input('nombre');
        $usuario->Apellidos = $request->input('apellido');

        if($request->input('contrasena') != null) {
            $request->validate([
                'contrasena' => 'max:15',
            ]);
            $usuario->Contrasena = md5($request->input('contrasena'));
        }

        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'image'
            ]);

            $usuario->Foto = $request->file('foto')->store('public/usuarios');
        }

        $usuario->save();

        return redirect()->back();
    }

    public function eliminarse(Request $request, $id) {

        $pedidos = Historialpedidos::where('id_usuario',$id)->get();
        foreach ($pedidos as $pedido ) {
            Pedidos::where('id_pedido', $pedido->id)->delete();
        }
        Historialpedidos::where('id_usuario',$id)->delete();
        Comentario::where('id_usuario',$id)->delete();

        if (Auth::user()->Foto != null) {
            Storage::delete(Auth::user()->Foto);
        }

        User::where('id',$id)->delete();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }

    public function eliminarFoto($id) {

        $usuario = User::find($id);
        Storage::delete($usuario->Foto);
        $usuario->Foto = null;
        $usuario->save();

        return redirect()->back();
    }
}
