@extends('layouts.app')

@section('content')
<h1>Detalhes do Estoque</h1>
<p>Produto: {{ $estoque->produto->nome }}</p>
<p>Quantidade: {{ $estoque->quantidade }}</p>
<a href="{{ route('estoques.index') }}">Voltar</a>
@endsection