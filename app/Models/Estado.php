<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Cidade;

class Estado extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome',
        'sigla'
    ];

    /**
     * Relação 1:N com Cidade.
     */
    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
}
