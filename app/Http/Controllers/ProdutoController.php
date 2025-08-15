<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController
{
    // Listar todos os produtos
    public function index()
    {
        return Produto::all();
    }

    // Criar um novo produto
    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto = Produto::create($validated);

        return response()->json($produto, 201);
    }

    // Mostrar um produto específico
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return response()->json($produto);
    }

    // Atualizar um produto existente
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        // Validação
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto->update($validated);

        return response()->json($produto);
    }

    // Excluir um produto
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json(null, 204);
    }
}
