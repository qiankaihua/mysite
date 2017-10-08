<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\ApiToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddTime
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
        if(isset($request->username) && isset($request->apiToken)) {
            if($user->id === $apiToken->user_id && $apiToken->expired_at >= Carbon::now() && $apiToken->ip === $request->server('HTTP_X_FORWARDED_FOR', $request->server('REMOTE_ADDR', null))) {
                $apiToken->expired_at = Carbon::now()->addMinutes(30);
                $apiToken->save();
                return $next($request);
            }
        }
        return $next($request);
    }
}
