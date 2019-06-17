<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

/**
 * Class PedidoRepository
 * @package App\Repositories
 * @version June 16, 2019, 5:25 am UTC
*/

class PedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'produto',
        'valor',
        'data pedido'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pedido::class;
    }
}
