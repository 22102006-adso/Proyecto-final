<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['nombre', 'precio', 'stock', 'id_categoria', 'id_proveedor'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}

