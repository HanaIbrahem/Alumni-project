<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
   
     public function handle(Request $request, Closure $next)
     {
         if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->role == 'superadmin') {
            return $next($request);

         }
         return redirect('/')->with('error', 'You are not authorized to access this page.');

     }

}

