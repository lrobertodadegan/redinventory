<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Usuario.
 *
 * @package namespace App\Entities;
 */
class Usuario extends Model implements Transformable
{
    use TransformableTrait;
    use \Timestamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','login','email','senha'];
    public $table ="usuarios";
}
