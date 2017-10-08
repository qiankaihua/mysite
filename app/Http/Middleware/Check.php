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
        if(!$apiToken || !$user) return view('login'); //abort(401);
        if($user->id === $apiToken->user_id && $apiToken->expired_at >= Carbon::now() && $apiToken->ip === $request->server('HTTP_X_FORWARDED_FOR', $request->server('REMOTE_ADDR', null))) {
            $apiToken->expired_at = Carbon::now()->addMinutes(30);
            $apiToken->save();
            return $next($request);
        }
        else return view('login'); //abort(401);
    }
}
