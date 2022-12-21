<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Conocido;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //mostrar todos los registros
        //$conocidos = Conocido::all();
        $encontrado = Auth::user();
        $conocidos = Conocido::where('usuario_id', $encontrado->id)->get();
        return view('conocido.listar',compact('conocidos'));
//        return view('conocido.listar',['conocidos' => $conocidos]);
//        return view('conocido.listar')->with('conocidos',$conocidos); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conocido.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConocidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encontrado = Auth::user();

        $nuevo = new Conocido();
        $nuevo->usuario_id = $encontrado->id;
        $nuevo->nombre = $request->input('nombre');
        $nuevo->save();
        return redirect(route('conocidos.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //        var_dump($conocido);
        $conocido = Conocido::find($id);
        $this->authorize('view',$conocido);
        echo $conocido->nombre;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function edit(Conocido $conocido)
    {
        $this->authorize('update',$conocido);
        return view('conocido.editar', compact('conocido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConocidoRequest  $request
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conocido $conocido)
    {
        $this->authorize('update',$conocido);
        $conocido->nombre = $request->input('nombre');
        $conocido->save();
        return redirect(route('conocidos.index'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conocido $conocido)
    {
        $this->authorize('delete',$conocido);
        $conocido->delete();
        return redirect(route('conocidos.index'));
    }
}
