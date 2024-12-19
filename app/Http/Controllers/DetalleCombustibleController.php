<?php

namespace App\Http\Controllers;

use App\Models\DetalleCombustible;
use App\Models\Almacen;
use App\Models\Combustible;
use Illuminate\Http\Request;

class DetalleCombustibleController extends Controller
{
    public function index()
    {
        $detalle_combustibles = DetalleCombustible::with(['almacen', 'combustible'])->get();
        return view('detalle_combustibles.index', compact('detalle_combustibles'));
    }

    public function create()
    {
        $almacenes = Almacen::all();
        $combustibles = Combustible::all();
        return view('detalle_combustibles.create', compact('almacenes', 'combustibles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_almacen' => 'required|exists:almacenes,id',
            'id_combustible' => 'required|exists:combustibles,id',
            'cantidad' => 'required|numeric|min:0',
        ]);

        DetalleCombustible::create($request->all());

        return redirect()->route('detalle_combustible.index');
    }

    public function edit(DetalleCombustible $detalle_combustible)
    {
        $almacenes = Almacen::all();
        $combustibles = Combustible::all();
        return view('detalle_combustibles.edit', compact('detalle_combustible', 'almacenes', 'combustibles'));
    }

    public function update(Request $request, DetalleCombustible $detalle_combustible)
    {
        $request->validate([
            'id_almacen' => 'required|exists:almacenes,id',
            'id_combustible' => 'required|exists:combustibles,id',
            'cantidad' => 'required|numeric|min:0',
        ]);

        $detalle_combustible->update($request->all());

        return redirect()->route('detalle_combustible.index');
    }

    public function destroy(DetalleCombustible $detalle_combustible)
    {
        $detalle_combustible->delete();
        return back();
    }
}
