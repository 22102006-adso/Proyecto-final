<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'contacto', 'descripion'];

    public function productos(){
        return $this->hasMany(producto::class);
    }

}
