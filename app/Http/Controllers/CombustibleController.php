<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\Request;

class CombustibleController extends Controller
{
    public function index()
    {
        $combustibles = Combustible::all();
        return view('combustibles.index', compact('combustibles'));
    }

    public function create()
    {
        return view('combustibles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_combustible' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        Combustible::create([
            'nombre' => $request->nombre,
            'tipo_combustible' => $request->tipo_combustible,
            'precio' => $request->precio,
        ]);

        return redirect()->route('combustible.index');
    }

    public function edit(Combustible $combustible)
    {
        return view('combustibles.edit', compact('combustible'));
    }

    public function update(Request $request, Combustible $combustible)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_combustible' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $combustible->update([
            'nombre' => $request->nombre,
            'tipo_combustible' => $request->tipo_combustible,
            'precio' => $request->precio,
        ]);

        return redirect()->route('combustible.index');
    }

    public function destroy(Combustible $combustible)
    {
        $combustible->delete();
        return back();
    }
}
