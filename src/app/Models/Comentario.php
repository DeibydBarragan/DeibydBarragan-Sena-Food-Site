<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    protected $table = 'comentario';

    public function Estado() {
        return $this->belongsTo(Estadosoporte::class,'id_estado');
    }

}
