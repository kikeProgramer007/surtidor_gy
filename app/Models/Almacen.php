<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'almacenes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'capacidad_total',
        'capacidad_actual'
    ];
    public $timestamps = true;

    // Relaciones
    public function detalleCombustibles()
    {
        return $this->hasMany(DetalleCombustible::class, 'id_almacen', 'id_almacen');
    }

    public function dispensadores()
    {
        return $this->hasMany(Dispensador::class, 'id_almacen', 'id_almacen');
    }
}
