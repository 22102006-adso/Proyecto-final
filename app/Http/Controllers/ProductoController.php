<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::with(['categoria', 'proveedor'])->get(); 
        return view('productos.index', compact('productos'));
    }

    public function create(){
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();

        return view('productos.create', compact('categorias', 'proveedores'));
    }

    public function store(Request $request){
        $validated = $request->validate([  
            'nombre' => 'required|string|max:30|unique:productos',
            'precio' => 'nullable|numeric|min:0',  
            'stock' => 'nullable|integer|min:0',
            'id_categoria' => 'required|exists:categorias,id',  
            'id_proveedor' => 'required|exists:proveedores,id',  
        ]);

        try {
            Producto::create($validated);
            return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
        } catch (\Exception $e) {
            return redirect()->route('productos.index')->with('error', 'Hubo un error al crear el producto');
        }
    }

    public function edit(Producto $producto){
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('productos.edit', compact('producto', 'categorias', 'proveedores'));
    }

    public function update(Request $request, Producto $producto){
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:30', 'unique:productos,nombre,' . $producto->id],
            'precio' => 'nullable|numeric|min:0',  
            'stock' => 'nullable|integer|min:0',
            'id_categoria' => 'required|exists:categorias,id',  
            'id_proveedor' => 'required|exists:proveedores,id',  
        ]);

        $producto->update($validated);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
    }
}

