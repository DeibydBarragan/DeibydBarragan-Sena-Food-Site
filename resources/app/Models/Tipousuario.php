<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tipousuario';

    public function Usuarios() {
        return $this->hasMany(User::class, 'id');
    }

}
