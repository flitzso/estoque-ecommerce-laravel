@extends('layouts.app')

@section('content')
<h1>Editar Estoque</h1>
<form action="{{ route('estoques.update', $estoque->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id">
            @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}" {{ $estoque->produto_id == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $estoque->quantidade }}">
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection