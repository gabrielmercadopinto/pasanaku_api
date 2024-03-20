<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estado = Estado::all();
        return response()->json([
            'data' => $estado
        ], 200);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string'],
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
    
        $estado = estado::create([
            'nombre' => $request->nombre,
        ]);
    
        return response()->json([
            'estado' => $estado
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
        return response()->json(['error' => 'estado no encontrado'], 404);
        }

        return response()->json(['estado' => $estado], 200);
    }

    
    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['error' => 'estado no encontrado'], 404);
        }
    
        $request->validate([
            'nombre' => ['string'],       
        ]);
        $estado->nombre = $request->nombre ?? $estado->nombre;
        $estado->save();
    
        return response()->json(['estado' => $estado], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['error' => 'estado no encontrado'], 404);
        }

        $estado->delete();

        return response()->json(['message' => 'estado eliminado correctamente'], 200);
    }
}
