<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'stock', 'id_categoria', 'id_proveedor'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function proveedor(){
        return $this->belongsTo(proveedor::class, 'id_proveedor');
    }
}
