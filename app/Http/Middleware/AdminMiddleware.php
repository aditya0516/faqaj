<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
    public function transform($isBan)
    {
        if($isBan === '0' )
            return 1;

        if($isBan === '1')
            return 0;

        return $isBan;
    }
}
