<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pedido->id !!}</p>
</div>

<!-- Produto Field -->
<div class="form-group">
    {!! Form::label('produto', 'Produto:') !!}
    <p>{!! $pedido->produto !!}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{!! $pedido->valor !!}</p>
</div>

<!-- Data Pedido Field -->
<div class="form-group">
    {!! Form::label('data pedido', 'Data Pedido:') !!}
    <p>{!! $pedido->data pedido !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pedido->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pedido->updated_at !!}</p>
</div>

