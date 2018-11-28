@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-start">
    <h1 class="title">Seu pet</h1>

        <div class="col-md-6 offset-md-3">
            <form action="{{$destino}}" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" placeholder="Digite o nome" type="text" name="nome" value="{{$nome}}" required>
                </div>

                <div class="form-group">
                    <label for="idade">Idade</label>
                    <input class="form-control" placeholder="Digite a idade" type="integer" name="idade" value="{{$idade}}" required>
                </div>

                <div class="form-group">
                    <label for="especie">Espécie</label>
                    <input class="form-control" placeholder="Digite a espécie" type="text" name="especie" value="{{$especie}}" required>
                </div>

                <div class="form-group">
                    <label for="raca">Raça</label>
                    <input class="form-control" placeholder="Digite a raça" type="text" name="raca" value="{{$raca}}" required>
                </div>

                <div class="form-group">
                    <label for="tamanho">Tamanho</label>
                    <input class="form-control" placeholder="Digite o tamanho" type="text" name="tamanho" value="{{$tamanho}}" required>
                </div>

                <div class="row justify-content-center">
                    <input class="btn btn-pet" type="submit" value="Gravar">
                    {{csrf_field()}}
                </div>

                <p>
                    
                </p>
            </form>
        </div>

    </div>
</div

@endsection
