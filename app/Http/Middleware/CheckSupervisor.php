<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSupervisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
        public function handle(Request $request, Closure $next, ...$guards)
        {
            // $guards = empty($guards) ? [null] : $guards;
            // foreach ($guards as $guard) {
                if (!Auth::guard('supervisor')->check()) {
                    return view('page404',['message'=>'This page access only Supervisor']);
                }
            // }
            // $cart=auth()->user()->cart;
            return $next($request);
        }

    }
