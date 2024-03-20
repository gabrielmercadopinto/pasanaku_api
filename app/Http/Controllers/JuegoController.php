<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {//GET
        //
        return Juego::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {//POST
        //
        //dd($request->all());

        $request->validate([
            'nombre' => 'required',
            'monto_base' => 'required',
            'cantidad_jugador' => 'required',
            'periodo' => 'required',
            'fecha_inicio' => 'required',
        ]);

        $juego = new Juego;
        $juego->nombre = $request->input('nombre');
        $juego->monto_base = $request->input('monto_base');
        $juego->cantidad_jugador = $request->input('cantidad_jugador');
        $juego->periodo = $request->input('periodo');
        $juego->fecha_inicio = $request->input('fecha_inicio');
        $juego->save();

        return $juego;
    }

    /**
     * Display the specified resource.
     */
    public function show(Juego $juego)
    {//GET/HEAD
        //$juego = Juego::find($id);
        return $juego;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juego $juego)
    {//PUT|PATCH
        $request->validate([
            'nombre' => 'required',
            'monto_base' => 'required',
            'cantidad_jugador' => 'required',
            'periodo' => 'required',
            'fecha_inicio' => 'required',
        ]);
        $juego->nombre = $request->nombre;
        $juego->monto_base = $request->monto_base;
        $juego->cantidad_jugador = $request->cantidad_jugador;
        $juego->periodo = $request->periodo;
        $juego->fecha_inicio = $request->fecha_inicio;
        $juego->update();

        return $juego;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {//DELETE
        //
        $juego = Juego::find($id);
        if(is_null($juego)){
            return response()->json('no se pudo realizar correctamente la operacion', 404);
        }
        $juego->delete();
        //return [];
        return response()->noContent();
    }
}
