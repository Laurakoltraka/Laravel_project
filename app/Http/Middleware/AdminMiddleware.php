<?php

namespace App\Http\Middleware;

// use App\Http\Controllers\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role_as =='1')// 1=Admin

            {
                 return $next($request);
            }
            else
             {
               return redirect('/home')->with('status', 'access denied') ;
             }
            
             
                return redirect('.login')->with('status', 'Please Log In first'); ;
             
            
        }
        
    }
}
