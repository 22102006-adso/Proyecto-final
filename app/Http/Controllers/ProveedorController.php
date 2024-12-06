<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedor;

class ProveedorController extends Controller
{
    public function index(){
        $proveedores = proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre' =>'required|string|max:255',
            'direccion' =>'required|string|max:255',
            'telefono' =>'required|numeric|max:20',
            'email' =>'required|email|unique:proveedores,email',
            'contacto' =>'required|string|max:255',
            'descripcion' =>'required|string|max:255'
        ]);
        proveedor::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado correctamente');
    }

    public function edit(proveedor $proveedor){
        return view('proveedor.edit', compact('proveedor'));
    }

   
    public function update(Request $request, proveedor $proveedor){
        $request->validate([
            'nombre' =>'required|string|max:255',
            'direccion' =>'required|string|max:255',
            'telefono' =>'required|numeric|max:20',
            'email' =>'required|email|unique:proveedores,email',
            'contacto' =>'required|string|max:255',
            'descripcion' =>'required|string|max:255'
        ]);
        $proveedor::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente');
    }
    

    public function destroy(proveedor $proveedor){
        $proveedor->delete();
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente');
    }

    

}