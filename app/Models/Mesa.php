<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'capacidade',
        'status'
    ];

    public $timestamps = false;

    public function reserva()
    {
        return $this->hasMany(Reserva::class, 'mesa_id');
    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class,'mesa_id');
    }

    public function abre_fecha()
    {
        return $this->hasMany(Abre_fecha::class, 'mesa_id');
    }
}
