<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;
use App\Models\Endereco;

interface EnderecoServiceInterface
{
    public function findAll(): Collection;
    public function find(int $id): ?Endereco;
    public function create(array $data): Endereco;
    public function update(int $id, array $data): Endereco;
    public function delete(int $id): void;
}
