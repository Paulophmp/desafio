<!-- Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produto', 'Produto:') !!}
    {!! Form::select('country',['Albania' => 'Albania','Kosovo'=>'Kosovo','Germany'=>'Germany','France'=>'France'],'Kosovo',['class'=>'form-control','placeholder'=>'Select Country']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data pedido', 'Data Pedido:') !!}
    {!! Form::text('data pedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidos.index') !!}" class="btn btn-default">Cancel</a>
</div>
