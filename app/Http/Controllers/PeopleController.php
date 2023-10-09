<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
$people
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Pessoa::all();
        return view('home', compact('pessoas'));
    }
     /*update
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PessoaView.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'cpf' => 'required|unique:people|digits:11',
            'nome' => 'required|min:3|max:50|regex:/^[a-zA-Z ]+$/'
        ];

        $msgPersonalizada = [
            'cpf.required' => 'O campo CPF deve ser preenchido.',
            'nome.required' => 'O campo nome deve ser preenchido.',Controll
            'nome.min' => 'O campo nome precisa ter no mínimo :min caracteres.',
            'nome.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'nome.regex' => 'O campo nome deve conter apenas letras.',
            'cpf.digits' => 'O campo CPF precisa ter :digits caracteres.',
        ];

        $request->validate($regras, $msgPersonalizada);

        Pessoa::create($request->all());

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    public function search(){

        $search_text = $_GET['search'];

        $people = Pessoa::where('nome','LIKE','%' .$search_text.'%')->get();

        return view('home', compact('people'));
    }

    /**
     * Show the form for updateing the specified resource.
     */
    public function update( $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoaupper= strtoupper($pessoa->nome);
        return view('PessoaView.update', compact('pessoa', 'pessoaupper'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pessoa = Pessoa::find($request->id);
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;

        $pessoa->update();

        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        Pessoa::where('id', $id)->delete();
       return redirect('/people');
    }

    public function destroy(string $id)
    {

    }
}
