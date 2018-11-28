<?php

namespace App\Http\Controllers;

use App\Animal;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        $users_id = Auth::user()->id;
        $users = User::all();
        return view ('animal.index', compact(['animals','users_id','users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destino = '/animal/store';
        $nome = null;
        $idade = null;
        $especie = null;
        $raca = null;
        $tamanho = null;
        $users_id = Auth::user()->id;
        echo("<script>console.log('PHP: ".$users_id."');</script>");
        return view('animal.editar', compact(['destino','nome','idade','especie','raca','tamanho', 'users_id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect('/animal');
        //var_dump($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals = Animal::find($id);
        $nome = $animals->nome;
        $idade = $animals->idade;
        $especie = $animals->especie;
        $raca = $animals->raca;
        $tamanho = $animals->tamanho;
        $users_id = $animals->users_id;
        $destino = '/animal/update/' . $animals->id;
        return view('animal.editar', compact(['nome','idade','especie','raca','tamanho','destino', 'users_id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Animal::find($id)->update($request->all());
        return redirect('/animal');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return redirect('/animal');
    }
}