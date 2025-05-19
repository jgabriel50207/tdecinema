@extends('layouts.app')

@section('content')
    <h1>Lista de Reservas</h1>
    <a href="{{ route('reservas.create') }}">Adicionar Nova Reserva</a>
    <ul>
        @foreach($reservas as $reserva)
            <li>
                Cliente: {{ $reserva->nome_cliente }} - Sessão: {{ $reserva->sessao->filme->titulo }} em {{ $reserva->sessao->data_hora }} - Quantidade: {{ $reserva->quantidade }}
                <a href="{{ route('reservas.edit', $reserva->id) }}">Editar</a>
                <form action="{{ route('sessoes.destroy', $sessao->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>

            </li>
        @endforeach
    </ul>
@endsection
