<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Pedido
 * @package App\Models
 * @version June 16, 2019, 5:25 am UTC
 *
 * @property string produto
 * @property string valor
 * @property string data pedido
 */
class Pedido extends Model
{

    public $table = 'pedidos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'produto_name',
        'name',
        'valor',
        'data_pedido',
        'cep',
        'logradouro',
        'bairro',
        'uf',
        'cidade',
        'qtd_estoque',
        'despachante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'produto' => 'string',
        'valor' => 'string',
        'data pedido' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    
}
