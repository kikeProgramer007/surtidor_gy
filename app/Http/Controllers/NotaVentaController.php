<?php

namespace App\Http\Controllers;

use App\Models\NotaVenta;
use App\Models\Vehiculo;
use App\Models\Cliente;
use App\Models\Dispensador;
use App\Models\TipoPago;
use Illuminate\Http\Request;

class NotaVentaController extends Controller
{
public function index()
    {
        $notas = NotaVenta::with(['vehiculo.cliente', 'tipo_pago', 'dispensador'])->get();
        return view('notas.index', compact('notas'));
    }
    public function create()
    {
        $vehiculos = Vehiculo::all(); // Asegúrate de tener un modelo Vehiculo
        $tipos_pago = TipoPago::all();
        $dispensadores = Dispensador::all(); // Asegúrate de tener un modelo Dispensador
        return view('notas.create', compact('vehiculos', 'tipos_pago', 'dispensadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_vehiculo' => 'required|exists:vehiculos,id',
            'fecha' => 'required|date',
            'monto_pago' => 'required|numeric',
            'id_tipo_pago' => 'required|exists:tipo_pagos,id',
            'id_dispensador' => 'required|exists:dispensadores,id',
        ]);

        NotaVenta::create($request->all());
        return redirect()->route('nota.index');
    }

    public function edit(NotaVenta $nota)
    {
        $vehiculos = Vehiculo::all(); // Obtener todos los vehículos
        $tipos_pago = TipoPago::all(); // Obtener todos los tipos de pago
        $dispensadores = Dispensador::all(); // Obtener todos los dispensadores
    
        return view('notas.edit', compact('nota', 'vehiculos', 'tipos_pago', 'dispensadores'));
    }

    public function update(Request $request, NotaVenta $nota)
    {
        $request->validate([
            'id_vehiculo' => 'required|exists:vehiculos,id',
            'fecha' => 'required|date',
            'monto_pago' => 'required|numeric',
            'id_tipo_pago' => 'required|exists:tipo_pagos,id',
            'id_dispensador' => 'required|exists:dispensadores,id',
        ]);

        $nota->update($request->all());
        return redirect()->route('nota.index');
    }

    public function destroy(NotaVenta $nota)
    {
        $nota->delete();
        return back();
    }
}
