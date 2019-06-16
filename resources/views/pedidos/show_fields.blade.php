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
    <p>{!! $pedido->data_pedido !!}</p>
</div>

