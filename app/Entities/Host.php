<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Host.
 *
 * @package namespace App\Entities;
 */
class Host extends Model implements Transformable
{
    use TransformableTrait;
    use \Timestamps;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hostname','ip','mac','so','setor','usuario','tipo','estado','hd','ram','placa_mae','modelo','marca'];
    public $table ="hosts";

}
