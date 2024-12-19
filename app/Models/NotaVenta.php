<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    protected $table = 'nota_ventas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_vehiculo',
        'fecha',
        'monto_pago',
        'id_tipo_pago',
        'id_dispensador',
    ];
    public $timestamps = true;

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'id_vehiculo', 'id');
    }

    public function tipo_pago()
    {
        return $this->belongsTo(TipoPago::class, 'id_tipo_pago', 'id');
    }

    public function dispensador()
    {
        return $this->belongsTo(Dispensador::class, 'id_dispensador', 'id');
    }
}
