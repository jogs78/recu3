<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Conocido;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function index(Conocido $conocido)
    {
        return view('carro.listar',compact('conocido'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function create(Conocido $conocido)
    {
       return view('carro.crear',compact('conocido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conocido  $conocido
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Conocido $conocido)
    {
        $nuevo = new Carro();
        $nuevo->conocido_id = $conocido->id;
        $nuevo->marca = $request->marca; //$request->input('marca')
        $nuevo->save();
        return redirect(route('conocidos.carros.index',$conocido->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show(Conocido $conocido, Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conocido  $conocido
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Conocido $conocido, Carro $carro)
    {
        return view('carro.editar',compact('conocido','carro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conocido  $conocido
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conocido $conocido, Carro $carro)
    {
        $carro->marca = $request->marca;
        $carro->save();
        return redirect(route('conocidos.carros.index',$conocido->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conocido  $conocido
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conocido $conocido, Carro $carro)
    {
        $carro->delete();
        return redirect(route('conocidos.carros.index',$conocido->id));

    }
}
