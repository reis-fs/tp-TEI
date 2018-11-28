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
    </div>
</div>
@endsection

<!-- 

<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

-->
