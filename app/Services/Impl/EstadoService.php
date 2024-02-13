<?php

namespace App\Services\Impl;

use App\Services\Contracts\EstadoServiceInterface;
use App\Models\Estado;

class EstadoService implements EstadoServiceInterface
{
    public function findAll()
    {
        return Estado::all();
    }

    public function find(int $id): ?Estado
    {
        return Estado::findOrFail($id);
    }

    public function create(array $data): Estado
    {
        $estado = new Estado($data);
        $estado->save();
        return $estado;
    }

    public function update(int $id, array $data): Estado
    {
        $estado = $this->find($id);
        $estado->update($data);
        return $estado;
    }

    public function delete(int $id): void
    {
        $estado = $this->find($id);
        $estado->delete();
    }
}
