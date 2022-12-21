<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EntradaController extends Controller
{
    public function salir(){
        Auth::forgetUser();
        return redirect(route('entrada'));

    }
    public function login(){
        return view('login');
    }
    public function validar(Request $request){
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
                return redirect(route('HOME'));
            }else{
                //return "LA CLAVE ESTA MAL";
                return redirect()->back();
            }
        }
    }
}
