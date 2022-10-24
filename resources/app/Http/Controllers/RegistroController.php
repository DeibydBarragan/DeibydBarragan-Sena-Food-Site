<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registrorequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegistroController extends Controller
{
    public function show() {
        return view('registro');
    }



    public function registro(Request $request){
        
        $request->validate([
            'Correo' => 'max:40|unique:usuario,Correo',
            'Contrasena' => 'required|min:7|max:15',
            'Contrasenac' => 'required|min:7|max:15',
            'Nombre' => 'required|max:30',
            'Apellidos' => 'required|min:3|max:30',
        ]);

        $usuario = new User;
        $usuario->Nombre = $request->input('Nombre');
        $usuario->Apellidos = $request->input('Apellidos');
        $usuario->Correo = $request->input('Correo');
        $contrasena1 = $usuario->Contrasena = md5($request->input('Contrasena'));
        $contrasena2 = $usuario->Contrasena = md5($request->input('Contrasenac'));
        $usuario->id_centro = $request->input('id_centro');
        $usuario->id_tipousuario = 3;
        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'image|max:1024'
            ]);

            $usuario->Foto = $request->file('foto')->store('public/usuarios');
        }

        if($contrasena1 != $contrasena2) {
            Session::flash('Contrasena', 'La contraseña no coincide');

            return to_route('registro.index');
        }
        

        $usuario->save();

        return redirect('login');
    }
}
