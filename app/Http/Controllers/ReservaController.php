<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Filme;
use App\Models\Sessao;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('sessao')->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
{
    $filmes = Filme::all();     // Busca todos os filmes
    $sessoes = Sessao::all();   // (Opcional) Se você precisar também de sessões

    return view('Reservas.create', compact('filmes', 'sessoes'));
}

    public function store(Request $request)
    {
        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }

    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva)
    {
        $sessoes = Sessao::all();
        return view('reservas.edit', compact('reserva', 'sessoes'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        $reserva->update($request->all());
        return redirect()->route('reservas.index');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return redirect()->route('reservas.index');
    }
}
