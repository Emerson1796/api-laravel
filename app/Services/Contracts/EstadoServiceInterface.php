<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;
use App\Models\Estado;

interface EstadoServiceInterface
{
    public function findAll();
    public function find(int $id): ?Estado;
    public function create(array $data): Estado;
    public function update(int $id, array $data): Estado;
    public function delete(int $id): void;
}
