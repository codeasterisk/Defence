<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Videos
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
            if (auth()->user()->can('control videos'))
            {
                return $next($request);
            }
            else
            {
                return redirect('editors');
            }
        }
        else
        {
            return redirect('/editors');
        }
    }
}
