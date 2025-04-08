<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ciclo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciclos = Ciclo::all();
        return view('admin.ciclos.index', compact('ciclos'));
    }

    public function create()
    {
        return view('admin.ciclos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:100',
            'grado_id' => 'required|exists:grados,id',
        ]);

        Ciclo::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'grado_id' => $request->grado_id,
        ]);

        return redirect()->route('ciclos.index')->with('success', 'Ciclo creado correctamente.');
    }

    public function edit(Ciclo $ciclo)
    {
        return view('admin.ciclos.edit', compact('ciclo'));
    }

    public function update(Request $request, Ciclo $ciclo)
    {
        $request->validate([
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:100',
            'grado_id' => 'required|exists:grados,id',
        ]);

        $ciclo->codigo = $request->codigo;
        $ciclo->nombre = $request->nombre;
        $ciclo->grado_id = $request->grado_id;
        $ciclo->save();

        return redirect()->route('ciclos.index')->with('success', 'Ciclo actualizado correctamente.');
    }

    public function destroy(Ciclo $ciclo)
    {
        $ciclo->delete();

        return redirect()->route('ciclos.index')->with('success', 'Ciclo eliminado correctamente.');
    }
}
