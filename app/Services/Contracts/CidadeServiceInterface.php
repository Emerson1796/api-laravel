<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;
use App\Models\Cidade;

interface CidadeServiceInterface
{
    public function findAll(): Collection;
    public function find(int $id): ?Cidade;
    public function create(array $data): Cidade;
    public function update(int $id, array $data): Cidade;
    public function delete(int $id): void;
}
