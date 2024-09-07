<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'unidade',
        'preco_custo',
        'fornecedor_id'
    ];

    public $timestamps = false;

    public function item_Pedido()
    {
        return $this->belongsTo(Item_pedido::class, 'item_pedido_id');
    }

    public function fornecedor()
    {
        return $this->hasMany(Fornecedor::class, 'inventario_id');
    }
}
