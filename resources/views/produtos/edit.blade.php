@extends('layouts.app')

@section('content')
<h1>Editar Produto</h1>
<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $produto->descricao }}</textarea>
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}">
    </div>
    <div>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="{{ $produto->preco }}">
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection