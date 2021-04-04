<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
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
        if (Auth::check()&&Auth::user()->role=='user') {
            return $next($request);
        } else {
            if (Auth::check()&&Auth::user()->role=='admin') {
                return redirect()->route('home');
            }
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
