<?php

namespace App\Presenters;

use App\Transformers\VisitasTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class VisitasPresenter.
 *
 * @package namespace App\Presenters;
 */
class VisitasPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new VisitasTransformer();
    }
}
