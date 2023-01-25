<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
  
    public function show() {
        return view('login');
    }

  /*
    protected function validateLogin(Request $request) {
     $request->validate([
         'correo' => 'required|exists:usuario,Correo',
         'contrasena' => 'required|exists:usuario,Contrasena',
      ]);
      $correo = $request->input('correo');
      $contrasena = $request->input('contrasena');
      
      $usuario = Usuario::where('Correo',$correo)->first();
      if( $contrasena == $usuario->Contrasena) {
        return redirect('/');
      }
      else {
        session()->flash('usuarioEditado', 'Usuario modificado satisfactoriamente');

        return to_route('login');

      }
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only('Correo', 'Contrasena'));

    }
*/
    public function logout(Request $request,Redirector $redirect) {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return to_route('menu.index');

    }
  

  public function validateLogin(Request $request) {

    
    $usuario = User::where('Correo', $request->input('Correo'))->first();

    Session::flash('usuarioIncorrecto', 'Contraseña o correo incorrecto');

    if($usuario == null) {
      return to_route('login');
    }

    elseif($usuario->Contrasena === md5($request->input('Contrasena')) ) {

      Auth::login($usuario);

      $request->session()->regenerate();

      return to_route('menu.index');
    }

    Session::flash('usuarioIncorrecto', 'Contraseña o correo incorrecto');

    return to_route('login');
    
    /*
    $credentials = request()->only('Correo', 'Contrasena');

    if (Auth::attempt($credentials)) {

      request()->session()->regenerate();

      return to_route('menu.index');
    }
    
    return to_route('login');
    */
  }
  
}
