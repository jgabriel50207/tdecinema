<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['sessao_id', 'nome_cliente', 'quantidade'];

    public function sessao()
    {
        return $this->belongsTo(Sessao::class);
    }
}
