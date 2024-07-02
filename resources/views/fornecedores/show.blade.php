@extends('layouts.app')

@section('content')
<h1>Detalhes do Fornecedor</h1>
<p>Nome: {{ $fornecedor->nome }}</p>
<p>Contato: {{ $fornecedor->contato }}</p>
<a href="{{ route('fornecedores.index') }}">Voltar</a>
@endsection