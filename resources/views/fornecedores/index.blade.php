@extends('layouts.app')

@section('content')
<h1>Fornecedores</h1>
<a href="{{ route('fornecedores.create') }}">Adicionar Fornecedor</a>
<ul>
    @foreach ($fornecedores as $fornecedor)
    <li>
        {{ $fornecedor->nome }} - {{ $fornecedor->contato }}
        <a href="{{ route('fornecedores.show', $fornecedor->id) }}">Ver</a>
        <a href="{{ route('fornecedores.edit', $fornecedor->id) }}">Editar</a>
        <form action="{{ route('fornecedores.destroy', $fornecedor->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection