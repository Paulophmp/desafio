@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-4">Ola, Seja Bem vindo!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="produtos/create" role="button">Cadastrar Produto</a>
            </p>
        </div>

    </div>
</div>
@endsection
