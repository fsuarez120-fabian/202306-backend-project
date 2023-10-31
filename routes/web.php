<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos', [ProductController::class, 'listProducts']);
Route::get('productos/create', [ProductController::class, 'create']);
Route::get('detalle', [ProductController::class, 'detail']);
Route::post('productos/store', [ProductController::class, 'store'])->name('product.store');

/* Route::get('productos/create', function () {
    return "AQUI VA A ESTAR EL FORMULARIO DE LA CREACION DE PRODUCTOS";
});

Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "el nombre del producto es $id con la categoria $categoria";
});
 */
