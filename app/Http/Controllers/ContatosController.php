<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $pessoa = Pessoa::find($id);
        $contatos = Contato::where('id_pessoa', $id)->get();
        return view('ContatosView.homeContato', compact('contatos', 'pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $pessoa = Pessoa::find($id);
        return view('ContatosView.cadastrarContato', compact('pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pessoaID = $request->id_pessoa;

        $regras = [
            'descricao' => 'required'
        ];

        $msgPersonalizada = [
            'required' => 'O campo deve ser preenchido.',
        ];

        $request->validate($regras, $msgPersonalizada);

        Contato::create($request->all());

        return redirect('contatos/' . $pessoaID);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id_contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_contato)
    {
        $contato = Contato::find($id_contato);
        $id_pessoa = Contato::find('id_pessoa');
        
        return view('editContato');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pessoa = Pessoa::find($request->id);
        $contato = Contato::find($request->id_contato);
        $contato->tipo = $request->tipo;
        $contato->descricao = $request->descricao;

        $contato->update();

        return redirect(url('contatos/' . $pessoa['id']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_contato)
    {
        Contato::where('id_contato', $id_contato)->delete();
        return redirect('/pessoas');
    }

    public function destroy(string $id)
    {
    }
}
