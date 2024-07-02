@extends('layouts.app')

@section('content')
<h1>Adicionar Venda</h1>
<form action="{{ route('vendas.store') }}" method="POST">
    @csrf
    <div>
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id">
            @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade">
    </div>
    <div>
        <label for="preco_total">Preço Total:</label>
        <input type="number" step="0.01" name="preco_total" id="preco_total">
    </div>
    <button type="submit">Adicionar</button>
</form>
@endsection