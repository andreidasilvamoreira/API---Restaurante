<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade',
        'preco_unitario',
        'observacoes',
        'pedido_id',
        'item_menu_id',
        'inventario_id'
    ];

    public $timestamps = false;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class,'pedido_id');
    }

    public function item_menu()
    {
        return $this->belongsTo(Item_menu::class,'item_menu_id');
    }

    public function inventario()
    {
        return $this->belongsTo(Inventario::class,'inventario_id');
    }
}
