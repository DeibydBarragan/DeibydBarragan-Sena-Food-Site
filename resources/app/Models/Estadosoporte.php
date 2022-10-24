<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadosoporte extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'estadosoporte';

    public function Comentario() {
        return $this->hasMany(Comentario::class, 'id');
    }
}
