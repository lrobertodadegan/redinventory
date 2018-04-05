<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Configuracao.
 *
 * @package namespace App\Entities;
 */
class Configuracao extends Model implements Transformable
{
    use TransformableTrait;
    use \Timestamps;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_windows','senha_windows','usuario_linux','senha_linux'];
    public $table ="configuracao";

}
