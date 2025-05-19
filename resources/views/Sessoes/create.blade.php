@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Sessão</h1>
    <form action="{{ route('sessoes.store') }}" method="POST">
        @csrf
        <label>Filme:</label>
        <select name="filme_id" required>
            @foreach($filmes as $filme)
                <option value="{{ $filme->id }}">{{ $filme->titulo }}</option>
            @endforeach
        </select>
        <label>Sala:</label>
        <input type="text" name="sala" required>
        <label for="horario">Horário</label>
        <input type="datetime-local" name="horario" id="horario" class="form-control" required>   
        <button type="submit">Salvar</button>
    </form>
@endsection
