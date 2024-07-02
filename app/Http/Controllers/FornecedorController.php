<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;


class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'contato' => 'required',
        ]);

        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor registrado com sucesso.');
    }

    public function show($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.show', compact('fornecedor'));
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'contato' => 'required',
        ]);

        $fornecedor = Fornecedor::find($id);
        $fornecedor->update($request->all());
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);
        $fornecedor->delete();
        return redirect()->route('fornecedores.index')->with('success', 'Fornecedor removido com sucesso.');
    }
}
