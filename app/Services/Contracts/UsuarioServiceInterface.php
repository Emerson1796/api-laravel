<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;
use App\Models\Usuario;

interface UsuarioServiceInterface
{
    public function findAll(): Collection;
    public function find(int $id): ?Usuario;
    public function create(array $data, array $enderecoIds): Usuario;
    public function update(int $id, array $data, array $enderecoIds): Usuario;
    public function delete(int $id): void;
}
