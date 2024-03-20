<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //GET
    {
        $rol = Rol::all();
        return response()->json([
            'data' => $rol
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST
    {
        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
    
        $rol = Rol::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);
    
        return response()->json([
            'rol' => $rol
        ], 201);
    }

   
    public function show($id) 
    {
        $rol = rol::find($id);

        if (!$rol) {
        return response()->json(['error' => 'rol no encontrado'], 404);
        }

        return response()->json(['rol' => $rol], 200);
    }

    
    public function update(Request $request, $id) //PUT
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['error' => 'rol no encontrado'], 404);
        }
    
        $request->validate([
            'nombre' => ['string'],
            'descripcion' => ['string'],         
        ]);
        $rol->nombre = $request->nombre ?? $rol->nombre;
        $rol->descripcion = $request->descripcion ?? $rol->descripcion;
        $rol->save();
    
        return response()->json(['rol' => $rol], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) //DELETE
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['error' => 'rol no encontrado'], 404);
        }

        $rol->delete();

        return response()->json(['message' => 'rol eliminado correctamente'], 200);
    }
}
