<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Produto;

class EstoqueController extends Controller
{
    public function index()
    {
        $estoques = Estoque::with('produto')->get();
        return view('estoques.index', compact('estoques'));
    }

    public function create()
    {
        $produtos = Produto::all();
        return view('estoques.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
        ]);

        Estoque::create($request->all());
        return redirect()->route('estoques.index')->with('success', 'Estoque adicionado com sucesso.');
    }

    public function show($id)
    {
        $estoque = Estoque::with('produto')->find($id);
        return view('estoques.show', compact('estoque'));
    }

    public function edit($id)
    {
        $estoque = Estoque::find($id);
        $produtos = Produto::all();
        return view('estoques.edit', compact('estoque', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
        ]);

        $estoque = Estoque::find($id);
        $estoque->update($request->all());
        return redirect()->route('estoques.index')->with('success', 'Estoque atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $estoque = Estoque::find($id);
        $estoque->delete();
        return redirect()->route('estoques.index')->with('success', 'Estoque removido com sucesso.');
    }
}
