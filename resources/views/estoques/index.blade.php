@extends('layouts.app')

@section('content')
<h1>Estoques</h1>
<a href="{{ route('estoques.create') }}">Adicionar Estoque</a>
<ul>
    @foreach ($estoques as $estoque)
    <li>
        {{ $estoque->produto->nome }} - {{ $estoque->quantidade }}
        <a href="{{ route('estoques.show', $estoque->id) }}">Ver</a>
        <a href="{{ route('estoques.edit', $estoque->id) }}">Editar</a>
        <form action="{{ route('estoques.destroy', $estoque->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection