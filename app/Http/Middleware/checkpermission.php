<?php

namespace App\Http\Middleware;

use Closure;

class checkpermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role->rolename == 'superadmin') {
            return $next($request);

        } else {
            session()->flash('status', 'You are not a Super Admin');
            return redirect()->back();
        }

    }
}
