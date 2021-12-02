<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
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
        if( Auth::check() )
        {
            // if user is not admin take him to his dashboard
            if ( Auth::user()->user_type ==1) {
                return $next($request);
            }

            // allow admin to proceed with request
            else  {
                return redirect()->route('admin.dashboard.index')->with('status','Access Denied! as you are not as admin');

            }
        }
    }
}
