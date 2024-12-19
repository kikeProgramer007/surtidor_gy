<?php

namespace App\Http\Controllers;

use App\Models\Dispensador;
use App\Models\Almacen;
use App\Models\Combustible;
use Illuminate\Http\Request;

class DispensadorController extends Controller
{
    public function index()
    {
        $dispensadores = Dispensador::with(['almacen', 'combustible'])->get();
        return view('dispensadores.index', compact('dispensadores'));
    }

    public function create()
    {
        $almacenes = Almacen::all();
        $combustibles = Combustible::all();
        return view('dispensadores.create', compact('almacenes', 'combustibles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_dispensador' => 'required|numeric|min:1',
            'id_almacen' => 'required|exists:almacenes,id',
            'id_combustible' => 'required|exists:combustibles,id',
        ]);

        Dispensador::create($request->all());

        return redirect()->route('dispensador.index');
    }

    public function edit(Dispensador $dispensador)
    {
        $almacenes = Almacen::all();
        $combustibles = Combustible::all();
        return view('dispensadores.edit', compact('dispensador', 'almacenes', 'combustibles'));
    }

    public function update(Request $request, Dispensador $dispensador)
    {
        $request->validate([
            'numero_dispensador' => 'required|numeric|min:1',
            'id_almacen' => 'required|exists:almacenes,id',
            'id_combustible' => 'required|exists:combustibles,id',
        ]);

        $dispensador->update($request->all());

        return redirect()->route('dispensador.index');
    }

    public function destroy(Dispensador $dispensador)
    {
        $dispensador->delete();
        return back();
    }
}
