<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\ApiToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::where('username', '=', $request->username)->first();
        if($user->admin !== 1) abort(403);
        return $next($request);
    }
}
