@extends('layouts.app')

@section('content')
    <h1>Lista de Sessões</h1>
    <a href="{{ route('sessoes.create') }}">Adicionar Nova Sessão</a>
    <ul>
        @foreach($sessoes as $sessao)
            <li>
                Filme: {{ $sessao->filme->titulo }} - Data e Hora: {{ \Carbon\Carbon::parse($sessao->horario)->format('d/m/Y H:i') }}
                <a href="{{ route('sessoes.edit', $sessao->id) }}">Editar</a>
                <form action="{{ route('sessoes.destroy', $sessao->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>


            </li>
        @endforeach
    </ul>
@endsection
