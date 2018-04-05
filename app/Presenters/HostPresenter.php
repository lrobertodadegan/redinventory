<?php

namespace App\Presenters;

use App\Transformers\HostTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class HostPresenter.
 *
 * @package namespace App\Presenters;
 */
class HostPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new HostTransformer();
    }
}
