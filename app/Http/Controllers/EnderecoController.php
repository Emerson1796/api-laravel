<?php

namespace App\Http\Controllers;

use App\Services\Contracts\EnderecoServiceInterface;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    private $enderecoService;

    public function __construct(EnderecoServiceInterface $enderecoService)
    {
        $this->enderecoService = $enderecoService;
    }

    public function index()
    {
        $enderecos = $this->enderecoService->findAll();
        return response()->json($enderecos);
    }

    public function show($id)
    {
        $endereco = $this->enderecoService->find($id);
        return response()->json($endereco);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logradouro' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'complemento' => 'nullable|string|max:255',
            'cep' => 'required|string|max:9',
            'cidade_id' => 'required|integer|exists:cidades,id'
        ]);

        $endereco = $this->enderecoService->create($validatedData);
        return response()->json($endereco, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'logradouro' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'complemento' => 'nullable|string|max:255',
            'cep' => 'required|string|max:9',
            'cidade_id' => 'required|integer|exists:cidades,id'
        ]);

        $endereco = $this->enderecoService->update($id, $validatedData);
        return response()->json($endereco);
    }

    public function destroy($id)
    {
        $this->enderecoService->delete($id);
        return response()->json(null, 204);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
}
