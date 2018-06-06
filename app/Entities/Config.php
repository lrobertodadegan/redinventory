<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Config.
 *
 * @package namespace App\Entities;
 */
class Config extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'rede',
        'range',
        'ignore',
        'win_user',
        'win_pass',
        'lin_user',
        'lin_pass',
    ];
    protected $table = 'configs';

}
