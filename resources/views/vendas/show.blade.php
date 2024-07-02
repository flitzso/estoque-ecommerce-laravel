@extends('layouts.app')

@section('content')
<h1>Detalhes da Venda</h1>
<p>Produto: {{ $venda->produto->nome }}</p>
<p>Quantidade: {{ $venda->quantidade }}</p>
<p>Preço Total: R$ {{ $venda->preco_total }}</p>
<a href="{{ route('vendas.index') }}">Voltar</a>
@endsection