<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
               return redirect('/home')->with('message', 'access denied') ;
             }
             else{
                return redirect('.login')->with('message', Please Log In first);
             }
        }
        
    }
}
