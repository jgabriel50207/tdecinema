@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Reserva</h1>
    <form action="{{ route('sessoes.store') }}" method="POST">
    @csrf
    <select name="filme_id">
        @foreach($filmes as $filme)
            <option value="{{ $filme->id }}">{{ $filme->titulo }}</option>
        @endforeach
    </select>

    <input type="date" name="data" required>
    <input type="time" name="horario" required>
    <input type="text" name="sala" required>

    <button type="submit">Salvar</button>
</form>

@endsection
