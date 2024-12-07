<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProductoController::class, 'index'])->name('productos.index');


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categoria/{categoria}/edit',[CategoriaController::class, 'edit'])->name('categorias.edit');
Route::get('/categoria/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.delete');

Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedor/create', [ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedor', [ProveedorController::class, 'store'])->name('proveedores.store');
Route::get('/proveedor/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
Route::get('/proveedor/{proveedor}', [ProveedorController::class, 'update'])->name('proveedores.update');
Route::delete('/proveedor/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.delete');

Route::get('/producto', [ProductoController::class, 'index' ])->name('productos.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/producto/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::get('/producto/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/producto/{producto}', [ProductoController::class, 'destroy'])->name('productos.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
