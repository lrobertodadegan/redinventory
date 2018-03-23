<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Produtos;

/**
 * Class ProdutosTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProdutosTransformer extends TransformerAbstract
{
    /**
     * Transform the Produtos entity.
     *
     * @param \App\Entities\Produtos $model
     *
     * @return array
     */
    public function transform(Produtos $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
