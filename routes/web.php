<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function (){
    return view('login');
});

Route::post('login',function (Request $request){
   $usuario = $request->input('usuario');
   $encontrado = Usuario::where('seudonimo', $usuario)->first(); 
   if(is_null($encontrado)){
//        return "USUARIO NO EXISTE";
    return redirect()->back();
   }else{
    $clave_dieron = $request->input('clave');
    $clave_guardada = $encontrado->clave;
    if(Hash::check($clave_dieron,$clave_guardada)){
        Auth::login($encontrado);
        //return "INICIO";
        return redirect('inicio');

    }else{
        //return "LA CLAVE ESTA MAL";
        return redirect()->back();
    }
   }
});

Route::get('inicio',function (){
    return view('bienvenida');
})->name('HOME');
;