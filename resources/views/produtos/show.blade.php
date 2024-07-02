@extends('layouts.app')

@section('content')
<h1>Detalhes do Produto</h1>
<p>Nome: {{ $produto->nome }}</p>
<p>Descrição: {{ $produto->descricao }}</p>
<p>Quantidade: {{ $produto->quantidade }}</p>
<p>Preço: R$ {{ $produto->preco }}</p>
<a href="{{ route('produtos.index') }}">Voltar</a>
@endsection