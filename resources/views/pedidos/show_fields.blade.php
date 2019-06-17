<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pedido->id !!}</p>
</div>

<!-- Produto Field -->
<div class="form-group">
    {!! Form::label('produto', 'Produto:') !!}
    <p>{!! $pedido->produto_name !!}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{!! $pedido->valor !!}</p>
</div>

<div class="form-group">
    {!! Form::label('cep', 'cep:') !!}
    <p>{!! $pedido->cep !!}</p>
</div>

<div class="form-group">
    {!! Form::label('logradouro', 'logradouro:') !!}
    <p>{!! $pedido->logradouro !!}</p>
</div>

<div class="form-group">
    {!! Form::label('uf', 'uf:') !!}
    <p>{!! $pedido->uf !!}</p>
</div>

<div class="form-group">
    {!! Form::label('cidade', 'cidade:') !!}
    <p>{!! $pedido->cidade !!}</p>
</div>

<div class="form-group">
    {!! Form::label('despachante', 'despachante:') !!}
    <p>{!! $pedido->despachante !!}</p>
</div>
<!-- Data Pedido Field -->
<div class="form-group">
    {!! Form::label('data pedido', 'Data Pedido:') !!}
    <p>{!!  date('d-m-Y', strtotime($pedido->data_pedido)); !!}</p>
</div>

