<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Disponibilidades extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'disponibilidad';

    public function Productos() {
        return $this->hasMany(Producto::class, 'id');
    }
}
