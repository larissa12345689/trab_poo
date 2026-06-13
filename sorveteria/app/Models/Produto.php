<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    protected $fillable = [
        'nome',
        'sabor',
        'preco',
    ];

    public function vendas(){
        return $this->hasMany(Venda::class);
    } 
           
}
