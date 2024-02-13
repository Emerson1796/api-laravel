<?php

namespace App\Services\Impl;

use App\Services\Contracts\EnderecoServiceInterface;
use Illuminate\Support\Collection;
use App\Models\Endereco;

class EnderecoService implements EnderecoServiceInterface
{
    public function findAll(): Collection
    {
        return Endereco::all();
    }

    public function find(int $id): ?Endereco
    {
        return Endereco::findOrFail($id);
    }

    public function create(array $data): Endereco
    {
        $endereco = new Endereco($data);
        $endereco->save();
        return $endereco;
    }

    public function update(int $id, array $data): Endereco
    {
        $endereco = $this->find($id);
        $endereco->update($data);
        return $endereco;
    }

    public function delete(int $id): void
    {
        $endereco = $this->find($id);
        $endereco->delete();
    }
}
