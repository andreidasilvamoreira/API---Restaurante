<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_hora',
        'status',
        'cliente_id',
        'mesa_id',
        'funcionario_id'
    ];

    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'cliente_id');
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class,'mesa_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class,'funcionario_id');
    }
}
