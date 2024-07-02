@extends('layouts.app')

@section('content')
<h1>Editar Fornecedor</h1>
<form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $fornecedor->nome }}">
    </div>
    <div>
        <label for="contato">Contato:</label>
        <input type="text" name="contato" id="contato" value="{{ $fornecedor->contato }}">
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection