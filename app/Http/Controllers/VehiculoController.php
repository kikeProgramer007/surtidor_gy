<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\TipoVehiculo;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{

    public function index()
    {
        $vehiculos = DB::table('vehiculos')
            ->join('clientes', 'vehiculos.id_cliente', '=', 'clientes.id')
            ->join('tipo_vehiculos', 'vehiculos.id_tipo_vehiculo', '=', 'tipo_vehiculos.id')
            ->where('vehiculos.estado',1)
            ->select('vehiculos.*', 'clientes.nombre','clientes.apellidos', 'tipo_vehiculos.descripcion')
            ->get();

        return view('vehiculos.index',compact('vehiculos'));
    }

    public function create()
    {
        $tipo_vehiculos = TipoVehiculo::all()->where('estado',1);
        $clientes = Cliente::all()->where('estado',1);
        return view('vehiculos.create',compact('tipo_vehiculos','clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:200',
            'marca' => 'required|string|max:400',
            'modelo' => 'required|string|max:200',
            'color' => 'required|string|max:100',
            'id_tipo_vehiculo' => 'required|numeric',
            'id_cliente' => 'required|string|max:500',
        ]);
  
        $vehiculo = new Vehiculo();
        $vehiculo->placa = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->id_tipo_vehiculo = $request->id_tipo_vehiculo;
        $vehiculo->id_cliente = $request->id_cliente;

        $vehiculo->save();
       
        return redirect()->route('vehiculo.index');//IR A ESA RUTA
    }

    public function edit(Vehiculo $vehiculo)
    {
        $tipo_vehiculos = TipoVehiculo::all()->where('estado',1);
        $clientes = Cliente::all()->where('estado',1);
        return view('vehiculos.edit',compact('vehiculo','tipo_vehiculos','clientes'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'placa' => 'required|string|max:200',
            'marca' => 'required|string|max:400',
            'modelo' => 'required|string|max:200',
            'color' => 'required|string|max:100',
            'id_tipo_vehiculo' => 'required|numeric',
            'id_cliente' => 'required|numeric',
        ]);
        
        $vehiculo->placa = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->id_tipo_vehiculo = $request->id_tipo_vehiculo;
        $vehiculo->id_cliente = $request->id_cliente;

        $vehiculo->update();

        return redirect()->route('vehiculo.index');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->estado = 0;
        $vehiculo->update();
        return back();
    }
}
