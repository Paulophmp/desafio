@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Produto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                <div class="form-group">
                    {!! Form::open(['route' => 'produtos.store']) !!}


                    <div class="form-group col-sm-12">
                        {!! Form::label('namea', 'Nome:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-5">
                        {!! Form::label('valor', 'Valor:') !!}
                        {!! Form::text('valor', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-5 ">
                        {!! Form::label('qtd_estoque', 'Quantidade Estoque:') !!}
                        {!! Form::text('qtd_estoque', null, ['class'=>'form-control']) !!}
                    </div>


                    @include('produtos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
