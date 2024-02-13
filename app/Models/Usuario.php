<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'email'
    ];

    /**
     * Relação Muitos para Muitos com Endereço.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function enderecos()
    {
        return $this->belongsToMany(Endereco::class, 'endereco_usuario', 'usuario_id', 'endereco_id')
            ->withTimestamps();
    }
}
