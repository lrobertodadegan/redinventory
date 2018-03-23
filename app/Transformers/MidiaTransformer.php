<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Midia;

/**
 * Class MidiaTransformer.
 *
 * @package namespace App\Transformers;
 */
class MidiaTransformer extends TransformerAbstract
{
    /**
     * Transform the Midia entity.
     *
     * @param \App\Entities\Midia $model
     *
     * @return array
     */
    public function transform(Midia $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
