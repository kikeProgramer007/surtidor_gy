<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all()->where('estado',1);
        return view('clientes.index',compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellidos' => 'required|string|max:400',
            'ci' => 'required|numeric|max_digits:10',
            'telefono' => 'required|numeric|max_digits:10', // ajusta los dígitos según tus necesidades
            'direccion' => 'required|string|max:255',
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->ci = $request->ci;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;

        $cliente->save();
       
        return redirect()->route('cliente.index');//IR A ESA RUTA
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellidos' => 'required|string|max:400',
            'ci' => 'required|numeric|max_digits:10',
            'telefono' => 'required|numeric|max_digits:10', // ajusta los dígitos según tus necesidades
            'direccion' => 'required|string|max:255',
        ]);
        
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->ci = $request->ci;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;

        $cliente->update();

        return redirect()->route('cliente.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->estado = 0;
        $cliente->update();
        return back();
    }
}
