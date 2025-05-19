<?php

namespace App\Http\Controllers;

use App\Models\Sessao;
use App\Models\Filme;
use Illuminate\Http\Request;

class SessoesController extends Controller
{
    public function index()
    {
        $sessoes = Sessao::with('filme')->get();
        return view('sessoes.index', compact('sessoes'));
    }

    public function create()
    {
        $filmes = Filme::all();
        return view('sessoes.create', compact('filmes'));
    }

    public function store(Request $request)
{
    Sessao::create($request->all());
    return redirect()->route('sessoes.index');
}

    public function show(Sessao $sessao)
    {
        return view('sessoes.show', compact('sessao'));
    }

   public function edit($id)
{
    $sessao = Sessao::findOrFail($id);

    // Garante que data_hora seja um objeto Carbon
    if ($sessao->data_hora) {
        $sessao->data_hora = \Carbon\Carbon::parse($sessao->data_hora);
    }

    $filmes = Filme::all();

    return view('Sessoes.edit', compact('sessao', 'filmes'));
}



    public function update(Request $request, $id)
{
    $sessao = Sessao::findOrFail($id);

    $sessao->filme_id = $request->input('filme_id');
    $sessao->data_hora = $request->input('data_hora');

    $sessao->save();

    return redirect()->route('sessoes.index')->with('success', 'Sessão atualizada com sucesso!');
}




    public function destroy($id)
{
    $sessao = Sessao::findOrFail($id);
    $sessao->delete();
    return redirect()->route('sessoes.index')->with('success', 'Sessão excluída!');
}

}
