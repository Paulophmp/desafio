<!-- Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produto', 'Produto:') !!}
    {!! Form::select('produto',['Albania' => 'Albania','Kosovo'=>'Kosovo','Germany'=>'Germany','France'=>'France'],'produto',['class'=>'form-control','placeholder'=>'Select Country']) !!}
</div>

<!-- nome Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome Solicitante:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', '', ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_pedido', 'Data Pedido:') !!}
    {!! Form::text('data_pedido', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'UF:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('despachante', 'Despachante:') !!}
    {!! Form::text('despachante', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidos.index') !!}" class="btn btn-default">Cancel</a>
</div>
