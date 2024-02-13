<?php

namespace App\Http\Controllers;

use App\Services\Contracts\CidadeServiceInterface;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    private $cidadeService;

    public function __construct(CidadeServiceInterface $cidadeService)
    {
        $this->cidadeService = $cidadeService;
    }

    public function index()
    {
        $cidades = $this->cidadeService->findAll();
        return response()->json($cidades);
    }

    public function show($id)
    {
        $cidade = $this->cidadeService->find($id);
        return response()->json($cidade);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'estado_id' => 'required|integer|exists:estados,id'
        ]);

        $cidade = $this->cidadeService->create($validatedData);
        return response()->json($cidade, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'estado_id' => 'required|integer|exists:estados,id'
        ]);

        $cidade = $this->cidadeService->update($id, $validatedData);
        return response()->json($cidade);
    }

    public function destroy($id)
    {
        $this->cidadeService->delete($id);
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
