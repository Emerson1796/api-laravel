<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UsuarioServiceInterface;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarioService;

    public function __construct(UsuarioServiceInterface $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function index()
    {
        $usuarios = $this->usuarioService->findAll();
        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = $this->usuarioService->find($id);

        $enderecosArray = array();

        if (isset($usuario->email)) {
            foreach ($usuario->enderecos as $endereco) {
                $enderecosArray[] = "{$endereco->logradouro}, {$endereco->numero}, {$endereco->complemento} - {$endereco->cep} - {$endereco->cidade->nome} - {$endereco->cidade->estado->sigla}";
            }
        }

        return response()->json(["user" => $usuario, "addresses" => $enderecosArray]);
    }

    public function store(Request $request)
    {
        $usuario = $this->usuarioService->create($request->all(), $request->enderecoIds ?? []);
        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id)
    {
        $usuario = $this->usuarioService->update($id, $request->all(), $request->enderecoIds ?? []);
        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $this->usuarioService->delete($id);
        return response()->json(null, 204);
    }

    public function edit(string $id)
    {
        //
    }

    public function create()
    {
        //
    }
}
