<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\ApiToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Check
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
        $apiToken = ApiToken::where('token', '=', $request->apiToken)->first();
        $user = User::where('username', '=', $request->username)->first();
        if(!$apiToken || !$user) abort(401);
        if($user->id === $apiToken->user_id && $apiToken->expired_at >= Carbon::now() && $apiToken->ip === $request->server('REMOTE_ADDR', null)) {
            $apiToken->expired_at = Carbon::now()->addMinutes(30);
            $apiToken->save();
            return $next($request);
        }
        else abort(401);
    }
}
