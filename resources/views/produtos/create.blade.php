@extends('layouts.app')

@section('content')
<h1>Adicionar Produto</h1>
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade">
    </div>
    <div>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco">
    </div>
    <button type="submit">Adicionar</button>
</form>
@endsection