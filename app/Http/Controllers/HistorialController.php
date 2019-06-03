<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;
use App\Http\Requests\HistorialRequest;

class HistorialController extends Controller
{
    public function index()
    {
        $historial = Historial::all();
        return response()->json($historial);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $historial = new Historial();
        $historial->actividad = $request->input('actividad');
        $historial->descripcion = $request->input('descripcion');
        $historial->fecha_actividad = $request->input('fecha_actividad');
        $historial->id_usuario = $request->input('id_usuario');


        $historial->save();
        return response()->json($historial);

    }

    public function show($id)
    {
        $historial = Historial::find($id);
        return response()->json($historial);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $historial = Historial::find($id);
        $historial->actividad = $request->input('actividad');
        $historial->descripcion = $request->input('descripcion');
        $historial->fecha_actividad = $request->input('fecha_actividad');
        $historial->id_usuario = $request->input('id_usuario');


        $historial->save();
        return response()->json($historial);

    }

    public function destroy($id)
    {
        $historial = Historial::find($id);
        $historial->delete();
        return "Eliminado";

    }
}
