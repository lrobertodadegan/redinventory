<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PrimeiroAcesso
{
    public function handle($request, Closure $next)
    {
        $config = \App\Http\Controllers\ConfigsController::listar();
        
        if(empty($config))
            return redirect('/');
        else
            return $next($request);
    }
}
