<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {//GET
        //
        return Moneda::all();
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
            'codigo' => 'required',
            'simbolo' => 'required',
        ]);

        $moneda = new Moneda;
        $moneda->nombre = $request->input('nombre');
        $moneda->codigo = $request->input('codigo');
        $moneda->simbolo = $request->input('simbolo');
        $moneda->save();

        return $moneda;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {//GET/HEAD
        $moneda = Moneda::find($id);
        if(!$moneda){
            return response()->json(['error' => 'moneda no encontrado'], 404);
        }
        return response()->json(['moneda' => $moneda], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moneda $moneda)
    {//PUT|PATCH
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'simbolo' => 'required',    
        ]);
        $moneda->nombre = $request->nombre;
        $moneda->codigo = $request->codigo;
        $moneda->simbolo = $request->simbolo;
        $moneda->update();

        return $moneda;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {//DELETE
        //
        $moneda = Moneda::find($id);
        if(is_null($moneda)){
            return response()->json('no se pudo realizar correctamente la operacion', 404);
        }
        $moneda->delete();
        //return [];
        return response()->noContent();
    }
}
