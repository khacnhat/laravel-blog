<?php

namespace App\Http\Middleware;

use Closure;

class BrowserValidation
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
        $userAgent = $request->header("User-Agent");
        if(strpos($userAgent, "Edge")){
            return response()->view("error.browser");
        }
        return $next($request);
    }
}
