<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;
use App\Models\proveedor;

class ProductoController extends Controller
{
    public function index(){
        $productos = producto::with(['categoria, proveedor'])->get();
        return view('producto.index', compact('productos'));
    }

    public function create(){

        $categorias = categoria::all();
        $proveedores = proveedor::all();

        return view('producto.create', compact('categorias', 'proveedores'));
    }
    


    public function store(Request $request){
        $validated = $request->validate()([
        'nombre' => 'required|string|max:30|unique:productos',
        'precio' => 'nullable|string|min:0',
        'stock' => 'nullable|integer|min:0',
        'id_categoria' => 'required|exist:categorias,id',
        'id_proveedor' => 'required|exist:proveedores,id',
        ]);

    try{
        producto::create($validated);
        return redirect()->route('producto.index')->with('success', 'Producto creado exitosamente');
    }catch(\Exception $e){
        return redirect()->route('producto.index')->with('error', 'Hubo un error al crear el producto');
    }
    }

    public function edit(producto $producto){
        $categorias = categoria::all();
        $proveedores = proveedor::all();
        return view('producto.edit', compact('producto', 'categorias', 'proveedores'));
    }
    
    
    public function update(Request $request, producto $producto){
        $validated = $request->validate()([
        'nombre' => ['required','string','max:30', 'unique:productos,nombre,'.$producto->id],
        'precio' => 'nullable|string|min:0',
        'stock' => 'nullable|integer|min:0',
        'id_categoria' => 'required|exist:categorias,id',
        'id_proveedor' => 'required|exist:proveedores,id',
        ]);

        $producto->update($validated);
        return redirect()->route('producto.index')->with('success', 'Producto actualizado exitosamente');

    }
    public function destroy(producto $producto){
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado exitosamente');
    }

}