@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-start">
        <h1 class="title">Bem-vindo, agora você pode usar nosso website</h1>
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="mobile-img">
                    <img src="{{ asset('celular-idot.png') }}" alt="Foto do Aplicativo">
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row justify-content-center">
            <div class="mt-5">
                    <a class="btn btn-pet" href="{{ url('/animal') }}">Veja os pets ja cadastrados <i class="far fa-eye"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

