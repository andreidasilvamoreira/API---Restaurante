<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'endereco'
    ];

    public $timestamps = false;

    public function inventario()
    {
        return $this->hasMany(Inventario::class,'fornecedor_id');
    }
}
