<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    protected $table = 'combustibles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'tipo_combustible',
        'precio'
    ];
    public $timestamps = true;

    // Relaciones
    public function detalleCombustibles()
    {
        return $this->hasMany(DetalleCombustible::class, 'id_combustible', 'id_combustible');
    }

    public function dispensadores()
    {
        return $this->hasMany(Dispensador::class, 'id_combustible', 'id_combustible');
    }
}
