@extends('layouts.app')

@section('content')
    <h1>Editar Sessão</h1>
    <form action="{{ route('sessoes.update', $sessao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Filme:</label>
        <select name="filme_id" required>
            @foreach($filmes as $filme)
                <option value="{{ $filme->id }}" {{ $sessao->filme_id == $filme->id ? 'selected' : '' }}>
                    {{ $filme->titulo }}</option>
            @endforeach
        </select>
        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora" 
        value="{{ $sessao->data_hora ? $sessao->data_hora->format('Y-m-d\TH:i') : '' }}">
        <label>Sala:</label>
        <input type="text" name="sala" value="{{ $sessao->sala }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
