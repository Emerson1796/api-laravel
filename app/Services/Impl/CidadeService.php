<?php

namespace App\Services\Impl;

use Illuminate\Support\Collection;
use App\Services\Contracts\CidadeServiceInterface;
use App\Models\Cidade;

class CidadeService implements CidadeServiceInterface
{
    public function findAll(): Collection
    {
        return Cidade::all();
    }

    public function find(int $id): ?Cidade
    {
        return Cidade::findOrFail($id);
    }

    public function create(array $data): Cidade
    {
        $cidade = new Cidade($data);
        $cidade->save();
        return $cidade;
    }

    public function update(int $id, array $data): Cidade
    {
        $cidade = $this->find($id);
        $cidade->update($data);
        return $cidade;
    }

    public function delete(int $id): void
    {
        $cidade = $this->find($id);
        $cidade->delete();
    }
}
