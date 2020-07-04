<?php

namespace App\Http\Middleware;

use Closure;

class IsHead
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
        if(Auth::check() && auth()->user()->isHead()){
        return $next($request);
    }
        }
    return redirect('/');
}
