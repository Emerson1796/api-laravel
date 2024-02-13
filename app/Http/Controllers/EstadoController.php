<?php

namespace App\Http\Controllers;

use App\Services\Contracts\EstadoServiceInterface;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    private $estadoService;

    public function __construct(EstadoServiceInterface $estadoService)
    {
        $this->estadoService = $estadoService;
    }

    public function index()
    {
        $estados = $this->estadoService->findAll();
        return response()->json($estados);
    }

    public function show($id)
    {
        $estado = $this->estadoService->find($id);
        return response()->json($estado);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sigla' => 'required|string|max:2|unique:estados'
        ]);

        $estado = $this->estadoService->create($validatedData);
        return response()->json($estado, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sigla' => 'required|string|max:2|unique:estados,sigla,' . $id
        ]);

        $estado = $this->estadoService->update($id, $validatedData);
        return response()->json($estado);
    }

    public function destroy($id)
    {
        $this->estadoService->delete($id);
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

