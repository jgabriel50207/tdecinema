@extends('layouts.app')

@section('content')
    <h1>Editar Filme</h1>
    <form action="{{ route('filmes.update', $filme->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:</label>
        <input type="text" name="titulo" value="{{ $filme->titulo }}" required>
        <label>Gênero:</label>
        <input type="text" name="genero" value="{{ $filme->genero }}" required>
        <label>Duração (minutos):</label>
        <input type="number" name="duracao" value="{{ $filme->duracao }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
