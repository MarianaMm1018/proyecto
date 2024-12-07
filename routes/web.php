<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductoController::class, 'index'])->name('home');
Route::post('/home/add', [ProductoController::class, 'createProducto'])->name('add_producto');
Route::get('/home/edit/{id}', [ProductoController::class, 'editProductoView'])->name('editProducto.view');
Route::post('/home/edit/{id}', [ProductoController::class, 'editProducto'])->name('editProducto');
Route::get('/home/delete/{id}', [ProductoController::class, 'deleteProducto'])->name('deleteProducto');

Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::post('/proveedor/add', [ProveedorController::class, 'createProveedor'])->name('add_proveedor');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedorView'])->name('editProveedor.view');
Route::post('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedor'])->name('editProveedor');
Route::get('/proveedor/delete/{id}', [ProveedorController::class, 'deleteProveedor'])->name('deleteProveedor');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::post('/categoria/add', [CategoriaController::class, 'createCategorias'])->name('add_categoria');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'editCategoriasView'])->name('editCategoria.view');
Route::post('/categoria/edit/{id}', [CategoriaController::class, 'editCategorias'])->name('editCategoria');
Route::get('/categoria/delete/{id}', [CategoriaController::class, 'deleteCategorias'])->name('deleteCategoria');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('home', [HomeController::class, 'home']) -> name('home');
// });

require __DIR__.'/auth.php';
