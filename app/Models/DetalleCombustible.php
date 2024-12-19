<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCombustible extends Model
{
    protected $table = 'detalle_combustibles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_almacen',
        'id_combustible',
        'cantidad'
    ];
    public $timestamps = true;

    // Relaciones
    public function almacen()
    {
        return $this->belongsTo(Almacen::class, 'id_almacen', 'id_almacen');
    }

    public function combustible()
    {
        return $this->belongsTo(Combustible::class, 'id_combustible', 'id_combustible');
    }
}
