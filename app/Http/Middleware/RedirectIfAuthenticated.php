<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {
		if (session()->has('admin'))
            return $next($request);
        else
            return redirect('adm');
    }
}
