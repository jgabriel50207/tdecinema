@extends('layouts.app')

@section('content')
    <h1>Lista de Filmes</h1>
    <a href="{{ route('filmes.create') }}">Adicionar Novo Filme</a>
    <ul>
        @foreach($filmes as $filme)
            <li>
                {{ $filme->titulo }} - {{ $filme->genero }} - {{ $filme->duracao }} minutos
                <a href="{{ route('filmes.edit', $filme->id) }}">Editar</a>
                <form action="{{ route('filmes.destroy', $filme->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
