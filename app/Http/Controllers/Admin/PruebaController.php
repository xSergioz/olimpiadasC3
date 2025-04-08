<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pruebas = Prueba::all();
        return view('admin.pruebas.index', compact('pruebas'));
    }

    public function create()
    {
        return view('admin.pruebas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:100',
            'grado_id' => 'required|exists:grados,id',
        ]);

        Prueba::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'grado_id' => $request->grado_id,
        ]);

        return redirect()->route('pruebas.index')->with('success', 'Prueba creado correctamente.');
    }

    public function edit(Prueba $prueba)
    {
        return view('admin.pruebas.edit', compact('prueba'));
    }

    public function update(Request $request, Prueba $prueba)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:100',
            'grado_id' => 'required|exists:grados,id',
        ]);

        $prueba->codigo = $request->codigo;
        $prueba->nombre = $request->nombre;
        $prueba->grado_id = $request->grado_id;
        $prueba->save();

        return redirect()->route('pruebas.index')->with('success', 'Prueba actualizado correctamente.');
    }

    public function destroy(Prueba $prueba)
    {
        $prueba->delete();

        return redirect()->route('pruebas.index')->with('success', 'Prueba eliminado correctamente.');
    }
}
