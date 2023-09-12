<?php

namespace App\Http\Middleware;

use Closure;

class RequestRedirect
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
        // if (env('APP_ENV') == 'prod' && !str_contains($request->url(), env('REQUEST_URL'))) {
            return redirect(env('REQUEST_URL', '') . $request->path());
        // }
        
        return $next($request);
    }
}
