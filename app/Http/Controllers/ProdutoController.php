<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // app/Http/Controllers/ProdutoController.php
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
        ]);

        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso.');
    }
}
