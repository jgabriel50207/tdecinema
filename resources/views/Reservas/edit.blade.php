@extends('layouts.app')

@section('content')
    <h1>Editar Reserva</h1>
    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Cliente:</label>
        <input type="text" name="nome_cliente" value="{{ $reserva->nome_cliente }}" required>
        <label>Sessão:</label>
        <select name="sessao_id" required>
            @foreach($sessoes as $sessao)
                <option value="{{ $sessao->id }}" {{ $reserva->sessao_id == $sessao->id ? 'selected' : '' }}>{{ $sessao->filme->titulo }} - {{ $sessao->data_hora }}</option>
            @endforeach
        </select>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" value="{{ $reserva->quantidade }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
