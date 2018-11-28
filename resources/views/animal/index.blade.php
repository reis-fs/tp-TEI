@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-start">
    <h1 class="title">Seus pets cadastrados</h1>

        <div class="row justify-content-center">
            <a class="btn btn-pet" href="/animal/create">Cadastre seu pet agora</a>
        </div>

        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Espécie</th>
                        <th>Raça</th>
                        <th>Tamanho</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animals as $animal)
                    <tr>
                        <td>{{$animal->nome}}</td>
                        <td>{{$animal->idade}}</td>
                        <td>{{$animal->especie}}</td>
                        <td>{{$animal->raca}}</td>
                        <td>{{$animal->tamanho}}</td>
                        <td><a title="editar pet" href="/animal/edit/{{$animal->id}}"><i class="fas fa-pen"></i></a>
                        <a title="excluir pet" href="/animal/excluir/{{$animal->id}}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection