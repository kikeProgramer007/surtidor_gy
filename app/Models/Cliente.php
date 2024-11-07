<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey ='id';
    protected $fillable = [
        'nombre',
        'apellidos',
        'ci',
        'telefono',
        'direccion',
        'estado',
    ];
    public $timestamps=true;
}
