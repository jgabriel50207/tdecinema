<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $table = 'sessoes'; // caso a tabela seja "sessoes"
    protected $fillable = ['filme_id', 'sala', 'horario'];
    
    public function filme()
    {
        return $this->belongsTo(Filme::class);
    }
}
