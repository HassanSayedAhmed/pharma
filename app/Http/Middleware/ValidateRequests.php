<?php

namespace App\Http\Middleware;

use Closure;

class ValidateRequests
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
        if($request->token)
            return $next($request);
        
        return response()->json(['state' => 'error','msg' => "Access Denied!"], 200);
    }
}
