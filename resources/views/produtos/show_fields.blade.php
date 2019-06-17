<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $produto->id !!}</p>
</div>

<div class="form-group">
    {!! Form::label('Produto', 'Produto:') !!}
    <p>{!! $produto->name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{!! $produto->valor !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Quantidade em estoque') !!}
    <p>{!! $produto->qtd_estoque !!}</p>
</div>

