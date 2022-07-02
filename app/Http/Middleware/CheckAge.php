<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request,Closure $next){


            // if (!Auth::guard('supervisor')->check()) {
            //     // return redirect()->route('showLoginForm.supervisor');
            //     return redirect(route('FashonKing'));
            // }
           $age=auth('adminstration')->user()->age;
           $id=auth('adminstration')->user()->id;
           $nationalid=auth('adminstration')->user()->nationalid;

           if ($age===25 and $id===1 and $nationalid===29504092201551) {
                // return redirect()->route('showLoginForm.supervisor');
                return $next($request);
            }

            return redirect(route('accessSupervisor'));

    }
}
