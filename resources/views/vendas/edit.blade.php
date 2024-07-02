@extends('layouts.app')

@section('content')
<h1>Editar Venda</h1>
<form action="{{ route('vendas.update', $venda->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id">
            @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}" {{ $venda->produto_id == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $venda->quantidade }}">
    </div>
    <div>
        <label for="preco_total">Preço Total:</label>
        <input type="number" step="0.01" name="preco_total" id="preco_total" value="{{ $venda->preco_total }}">
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection