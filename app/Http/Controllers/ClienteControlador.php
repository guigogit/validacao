<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras =[
            'nome'=> 'required|min:3|max:20|unique:clientes|unique:clientes', // no minimo 3 caracteres e no máximo 20 caracteres. O unique é usado para que não se psosa repetir a informação, unique:nome_tabela
            'idade'=>'required',
            'endereco'=>'required|min:5',
            'email'=>'required|email',

        ];
        $mensagens =[
            'required' =>'O atributo :attribute não pode ser vazio', // Mensagem genérica
            'nome.required' =>'O campo Nome está vazio, favor preencher!',
            'nome.min' =>'É necessário no mínimo 3 caracteres no campo nome.',
            'email.required'=>'Digite um endereço de e-mail',
            'email.email'=>'Digite um endereço de e-mail válido',
        ];
        $request ->validate($regras,$mensagens);





        /*
        // Função usada para validar se o campo está preenchido, caso o campo está fazio o código para de ser executado, assim não
        // é exibido mensagem de erro para o usuário.
        $request ->validate([
            'nome'=> 'required|min:3|max:20|unique:clientes|unique:clientes', // no minimo 3 caracteres e no máximo 20 caracteres. O unique é usado para que não se psosa repetir a informação, unique:nome_tabela
            'idade'=>'required',
            'endereco'=>'required|min:5',
            'email'=>'required|email',
        ]);
        */


        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
