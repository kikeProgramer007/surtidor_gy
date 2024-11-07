<?php

namespace App\Http\Controllers;

use App\Models\TipoVehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    public function index()
    {
        $tipovehiculos = TipoVehiculo::all()->where('estado',1);
        return view('tipovehiculos.index',compact('tipovehiculos'));
    }

    public function create()
    {
        return view('tipovehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:300',
        ]);

        $tipovehiculo = new TipoVehiculo();
        $tipovehiculo->descripcion = $request->descripcion;

        $tipovehiculo->save();
       
        return redirect()->route('tipo.vehiculo.index');//IR A ESA RUTA
    }

    public function edit(TipoVehiculo $tipovehiculo)
    {
        return view('tipovehiculos.edit',compact('tipovehiculo'));
    }

    public function update(Request $request, TipoVehiculo $tipovehiculo)
    {
        $request->validate([
            'descripcion' => 'required|string|max:200',
        ]);
        
        $tipovehiculo->descripcion = $request->descripcion;

        $tipovehiculo->update();

        return redirect()->route('tipo.vehiculo.index');
    }

    public function destroy(TipoVehiculo $tipovehiculo)
    {
        $tipovehiculo->estado = 0;
        $tipovehiculo->update();
        return back();
    }

}
