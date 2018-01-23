<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class EntryMiddleware
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
            if ($request->user()->role == '2' && $request->user()->status == '1')
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
