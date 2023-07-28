<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Http\Resources\PessoaResource;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pessoas = Pessoa::all();

        $resource_pessoas = PessoaResource::collection($pessoas)->resolve();
        return view('home', ['pessoas' => (object)$resource_pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pessoa $pessoa)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:pessoas,email',
            'cpf' => 'required|unique:pessoas,cpf',
        ]);

        $pessoa -> create($data);

        return redirect()->route('home')->with('msg', 'Pessoa criada com sucesso');
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
    public function edit(Pessoa $pessoa)
    {
        return view('edit', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {

        $pessoa -> update($request->all());

        return redirect()->route('home')->with('msg', 'Pessoa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa -> delete();

        return redirect() -> route('home') -> with('msg', 'Pessoa deletada com sucesso!');
    }
}
