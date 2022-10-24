<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disponibilidades;

class Producto extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = 'producto';

    public function Categoria() {
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public function Pedido() {
        return $this->hasMany(Historialpedidos::class,'id');
    }

    public function Disponibilidades() {
        return $this->belongsTo(Disponibilidades::class,'Disponibilidad');
    }
}
