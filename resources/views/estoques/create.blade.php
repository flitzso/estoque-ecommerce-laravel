@extends('layouts.app')

@section('content')
<h1>Adicionar Estoque</h1>
<form action="{{ route('estoques.store') }}" method="POST">
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
    <button type="submit">Adicionar</button>
</form>
@endsection