<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cargo',
        'telefone',
        'email',
        'data_contratacao',
        'salario'
    ];

    public $timestamps = false;

    public function pedido()
    {
        return $this->hasMany(Pedido::class, 'funcionario_id');
    }
}
