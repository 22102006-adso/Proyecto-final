<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('productos',function (Blueprint $table){
            $table->id();
            $table->string('nombre', 30)->unique();
            $table->string('Descripcion',30)->nullable();
            $table->string('stock',30)->nullable();
            $table->foreignid('id_categoria')->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignid('id_proveedor')->constrained('proveedores')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

