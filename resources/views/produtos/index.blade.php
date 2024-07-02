@extends('layouts.app')

@section('content')
<h1>Produtos</h1>
<a href="{{ route('produtos.create') }}">Adicionar Produto</a>
<ul>
    @foreach ($produtos as $produto)
    <li>
        {{ $produto->nome }} - {{ $produto->descricao }} - {{ $produto->quantidade }} - R$ {{ $produto->preco }}
        <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection