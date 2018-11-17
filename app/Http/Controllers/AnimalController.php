<?php

namespace App\Http\Controllers;

use App\Animal;
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
        $animal = Animal::all();
        return view ('animal.index', compact(['animal']));
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
        return view('animal.editar', compact(['destino','nome','idade','especie','raca','tamanho']));
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
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        $nome = $animal->nome;
        $idade = $animal->idade;
        $especie = $animal->especie;
        $raca = $animal->raca;
        $tamanho = $animal->tamanho;
        $destino = '/animal/update/' . $animal->id;
        return view('animal.editar', compact(['nome','idade','especie','raca','tamanho','destino']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
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
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return redirect('/animal');
    }
}