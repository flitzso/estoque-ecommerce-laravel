@extends('layouts.app')

@section('content')
<h1>Adicionar Fornecedor</h1>
<form action="{{ route('fornecedores.store') }}" method="POST">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="contato">Contato:</label>
        <input type="text" name="contato" id="contato">
    </div>
    <button type="submit">Adicionar</button>
</form>
@endsection