<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Host;

/**
 * Class HostTransformer.
 *
 * @package namespace App\Transformers;
 */
class HostTransformer extends TransformerAbstract
{
    /**
     * Transform the Host entity.
     *
     * @param \App\Entities\Host $model
     *
     * @return array
     */
    public function transform(Host $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
