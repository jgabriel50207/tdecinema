@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Filme</h1>
    <form action="{{ route('filmes.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="titulo" required>
        <label>Gênero:</label>
        <input type="text" name="genero" required>
        <label>Duração (minutos):</label>
        <input type="number" name="duracao" required>
        <button type="submit">Salvar</button>
    </form>
@endsection
