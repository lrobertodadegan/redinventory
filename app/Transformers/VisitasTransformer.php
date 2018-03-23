<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Visitas;

/**
 * Class VisitasTransformer.
 *
 * @package namespace App\Transformers;
 */
class VisitasTransformer extends TransformerAbstract
{
    /**
     * Transform the Visitas entity.
     *
     * @param \App\Entities\Visitas $model
     *
     * @return array
     */
    public function transform(Visitas $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
