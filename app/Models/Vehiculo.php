<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey ='id';
    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'color',
        'estado',
        'id_tipo_vehiculo',
        'id_cliente',
    ];
    public $timestamps=false;
}
