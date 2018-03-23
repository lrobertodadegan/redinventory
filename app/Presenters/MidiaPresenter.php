<?php

namespace App\Presenters;

use App\Transformers\MidiaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MidiaPresenter.
 *
 * @package namespace App\Presenters;
 */
class MidiaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MidiaTransformer();
    }
}
