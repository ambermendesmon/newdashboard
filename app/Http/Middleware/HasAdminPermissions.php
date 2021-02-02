<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HasAdminPermissions
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
        //if (Auth::user()->permission == 'admin') {
        if (Auth::user()->name == 'Brox') {

            return $next($request);
        }

        abort(403, 'Unauthorized action.');
        //return redirect()->route('dashboard'); // If user is not an admin.
    }
}
