<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->middleware(['role:super-admin|admin']))
        {
            return $next($request);
        }
        else
        {
            return redirect('/dashboard')->with('status','You do not have permission to access this information.');
        }
    }
}
