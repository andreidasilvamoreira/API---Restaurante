<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abre_fecha extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_pedido',
        'hora_abertura',
        'hora_fechamento',
        'mesa_id',
        'pedido_id'
    ];

    public $timestamps = false;

    public function mesa()
    {
        return $this->belongsTo(Mesa::class,'mesa_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
}
