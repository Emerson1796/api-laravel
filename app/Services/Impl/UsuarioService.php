<?php

namespace App\Services\Impl;

use App\Models\Usuario;
use App\Services\Contracts\UsuarioServiceInterface;

class UsuarioService implements UsuarioServiceInterface
{
    public function findAll()
    {
        return Usuario::all();
    }

    public function find(int $id): ?Usuario
    {
        return Usuario::findOrFail($id);
    }

    public function create(array $data, array $enderecoIds): Usuario
    {
        $usuario = new Usuario($data);
        $usuario->save();
        $usuario->enderecos()->sync($enderecoIds);
        return $usuario;
    }

    public function update(int $id, array $data, array $enderecoIds): Usuario
    {
        $usuario = $this->find($id);
        $usuario->update($data);
        $usuario->enderecos()->sync($enderecoIds);
        return $usuario;
    }

    public function delete(int $id): void
    {
        $usuario = $this->find($id);
        $usuario->enderecos()->detach();
        $usuario->delete();
    }
}
