<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'estado_id'
    ];

    /**
     * Relação N:1 com Estado.
     */
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    /**
     * Relação 1:N com Endereço.
     */
    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}
