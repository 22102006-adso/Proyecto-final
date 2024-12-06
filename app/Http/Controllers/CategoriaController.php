<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = categoria::all();

    return view('categorias.index', compact('categorias'));
    }
    public function create(){
        return view('categoria.create');
      
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);

        categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('categoria.index')->with('success', 'categoria creada');

    }

    public function edit(categoria $categoria){
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, categoria $categoria){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);
        $categoria->update($request->only(['nombre, descripcion']));
        return redirect()->route('categoria.index')->with('success', 'Categoría actualizada');
        }

        public function destroy(Categoria $categoria){
            $categoria->delete();
            return redirect()->route('categoria.index')->with('success', 'Categoría eliminada');
        }
}