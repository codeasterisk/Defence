<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        if(Auth::check())
        {
            if ($request->user()->role == '1' && $request->user()->status == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('login');
            }
        }
        else
        {
            return redirect('login');
        }
    }
}
