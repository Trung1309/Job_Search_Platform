<?php

namespace App\Http\Middleware;

use App\Models\Bussiness;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
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
        if (Auth::check() && Auth::user()->id_quyen === 1) {
            return response()->view('errors.404', [], 404);
        } elseif(!Auth::check()){
            return redirect()->route('indexLogin');
        }
        return $next($request);
    }
}
