<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'compras_realizadas'
    ];

    public function vendas() {
        return $this->hasMany(Venda::class);  //lembra que é a tabela Vendas viuuu
    }
}
