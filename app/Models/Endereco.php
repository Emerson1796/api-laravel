<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'id_cidade'
    ];

    /**
     * Relação Muitos para Muitos com Usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'endereco_usuario', 'endereco_id', 'usuario_id')
            ->withTimestamps();
    }
}
