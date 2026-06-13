<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'cliente_id',
        'produto_id',
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
