<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PrimeiroAcesso
{
    public function handle($request, Closure $next)
    {
		if (env('PRIMEIRO_ACESSO') == 0)
            return $next($request);
        else
            return redirect('/configuracaoInicial');
    }
}
