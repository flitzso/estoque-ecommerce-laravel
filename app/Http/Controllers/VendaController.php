<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Produto;


class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('produto')->get();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $produtos = Produto::all();
        return view('vendas.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
            'preco_total' => 'required|numeric',
        ]);

        Venda::create($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso.');
    }

    public function show($id)
    {
        $venda = Venda::with('produto')->find($id);
        return view('vendas.show', compact('venda'));
    }

    public function edit($id)
    {
        $venda = Venda::find($id);
        $produtos = Produto::all();
        return view('vendas.edit', compact('venda', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
            'preco_total' => 'required|numeric',
        ]);

        $venda = Venda::find($id);
        $venda->update($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $venda = Venda::find($id);
        $venda->delete();
        return redirect()->route('vendas.index')->with('success', 'Venda removida com sucesso.');
    }
}
