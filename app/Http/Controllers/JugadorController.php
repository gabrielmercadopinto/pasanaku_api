<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Finder;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return response()->json([
            'data' => $jugadores
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string'],
            'correo' => ['required', 'email', 'unique:jugadores'],
            'direccion' => ['required', 'string'],
            'telefono' => ['required', 'string'],
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
    
        $jugador = Jugador::create([
            'nombre'    => $request->nombre,
            'correo'    => $request->correo,
            'direccion' => $request->direccion,
            'telefono'  => $request->telefono,
        ]);
    
        return response()->json([
            'jugador' => $jugador
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jugador = Jugador::find($id);

        if (!$jugador) {
        return response()->json(['error' => 'Jugador no encontrado'], 404);
        }

        return response()->json(['jugador' => $jugador], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jugador = Jugador::find($id);

        if (!$jugador) {
            return response()->json(['error' => 'Jugador no encontrado'], 404);
        }
    
        $request->validate([
            'nombre' => ['string'],
            'correo' => ['email', 'unique:jugadores,correo,'.$id],
            'direccion' => ['string'],
            'telefono' => ['string']
        ]);
    
        $jugador->nombre = $request->nombre ?? $jugador->nombre;
        $jugador->correo = $request->correo ?? $jugador->correo;
        $jugador->direccion = $request->direccion ?? $jugador->direccion;
        $jugador->telefono = $request->telefono ?? $jugador->telefono;
    
        $jugador->save();
    
        return response()->json(['jugador' => $jugador], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id);

        if (!$jugador) {
            return response()->json(['error' => 'Jugador no encontrado'], 404);
        }

        $jugador->delete();

        return response()->json(['message' => 'Jugador eliminado correctamente'], 200);
    }
}
