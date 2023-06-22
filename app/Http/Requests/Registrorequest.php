<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registrorequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /*'Nombre' => 'required',
            'Apellidos' => 'required',
            'Correo' => 'required',
            'Contrasena' => 'required',
            'Contrasenc' => 'required|same:Contrasena',
            'id_tipousuario' => 'required',
            'id_centro' => 'required',
            'Foto' => 'required',*/
        ];
    }
}

