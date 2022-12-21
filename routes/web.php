<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Controllers\ConocidoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\CarroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EntradaController::class, 'login' ] )->name('entrada');
Route::post('validar', [EntradaController::class, 'validar' ])->name('validar');
Route::get('salir', [EntradaController::class, 'salir' ])->name('salir');
Route::get('inicio',function (){
    return view('bienvenida');
})->name('HOME');
;

//listado de conocidos
//listado-de-conocodos

/*
Route::get('listado-de-conocidos',[ConocidoController::class , 'index'])->name('conocidos.index');
Route::get('nuevo',[ConocidoController::class , 'create'])->name('conocidos.create');
Route::post('guardar',[ConocidoController::class , 'store'])->name('conocidos.store');
Route::get('mostrar/{cual}',[ConocidoController::class , 'show'])->name('conocidos.show');
Route::get('editar/{conocido}',[ConocidoController::class , 'edit'])->name('conocidos.edit');
Route::put('actualizar/{conocido}',[ConocidoController::class , 'update'])->name('conocidos.update');
Route::delete('eliminar/{conocido}',[ConocidoController::class , 'destroy'])->name('conocidos.destroy');
*/
Route::resource('conocidos', ConocidoController::class);
Route::resource('conocidos.carros', CarroController::class);

//actualizar sera put


