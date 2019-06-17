@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left" style="margin-top: 20px;margin-bottom: 15px" >Produtos</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('produtos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 15px" href="{!! route('produtos.create') !!}">Cadastar Produto</a>
        </h1>
    </div>
@endsection

