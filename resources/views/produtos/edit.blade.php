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
               <div class="row">
                   {!! Form::model($produto, ['route' => ['produtos.update', $produto->id], 'method' => 'patch']) !!}


                   <div class="form-group col-sm-6">
                       {!! Form::label('nome', 'Nome:') !!}
                       {!! Form::text('nome', $produto->name, ['class'=>'form-control']) !!}
                   </div>

                        @include('produtos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
