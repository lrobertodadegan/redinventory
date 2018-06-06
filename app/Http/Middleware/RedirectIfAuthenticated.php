<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {
		if (session()->has('usuario')){
            $continue = $next($request);
        }else{
            if(!isset($mensagem))
                $continue = redirect('/')->with('mensagem','Não conseguimos identificar você. Realize o login para continuar.');
        }

        return $continue;
    }
}
