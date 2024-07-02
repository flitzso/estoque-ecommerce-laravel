@extends('layouts.app')

@section('content')
<h1>Vendas</h1>
<a href="{{ route('vendas.create') }}">Adicionar Venda</a>
<ul>
    @foreach ($vendas as $venda)
    <li>
        {{ $venda->produto->nome }} - {{ $venda->quantidade }} - R$ {{ $venda->preco_total }}
        <a href="{{ route('vendas.show', $venda->id) }}">Ver</a>
        <a href="{{ route('vendas.edit', $venda->id) }}">Editar</a>
        <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection