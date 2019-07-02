<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
        if(Auth::check()&&Auth::user()->role_id==2){
            // Nếu đã chứng thực và level ==1 (là admin)
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}
