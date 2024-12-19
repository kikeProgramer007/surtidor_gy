<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispensador extends Model
{
    protected $table = 'dispensadores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numero_dispensador',
        'id_almacen',
        'id_combustible'
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
