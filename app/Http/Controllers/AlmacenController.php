<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();
        return view('almacenes.index', compact('almacenes'));
    }

    public function create()
    {
        return view('almacenes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'capacidad_total' => 'required|numeric|min:0',
            'capacidad_actual' => 'required|numeric|min:0|max:' . $request->capacidad_total,
        ]);

        $almacen = new Almacen();
        $almacen->nombre = $request->nombre;
        $almacen->capacidad_total = $request->capacidad_total;
        $almacen->capacidad_actual = $request->capacidad_actual;

        $almacen->save();

        return redirect()->route('almacen.index');
    }

    public function edit(Almacen $almacen)
    {
        return view('almacenes.edit', compact('almacen'));
    }

    public function update(Request $request, Almacen $almacen)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'capacidad_total' => 'required|numeric|min:0',
            'capacidad_actual' => 'required|numeric|min:0|max:' . $request->capacidad_total,
        ]);

        $almacen->nombre = $request->nombre;
        $almacen->capacidad_total = $request->capacidad_total;
        $almacen->capacidad_actual = $request->capacidad_actual;

        $almacen->update();

        return redirect()->route('almacen.index');
    }

    public function destroy(Almacen $almacen)
    {
        $almacen->delete();
        return back();
    }
}
