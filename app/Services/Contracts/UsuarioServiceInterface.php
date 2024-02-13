<?php

namespace App\Services\Contracts;

use App\Models\Usuario;

interface UsuarioServiceInterface
{
    public function findAll();
    public function find(int $id): ?Usuario;
    public function create(array $data, array $enderecoIds): Usuario;
    public function update(int $id, array $data, array $enderecoIds): Usuario;
    public function delete(int $id): void;
}
