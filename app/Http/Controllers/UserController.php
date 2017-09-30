<?php

namespace App\Http\Controllers;

use App\User;
use App\ApiToken;
use Illuminate\Http\Request;
use App\Http\Controller\Controllers;
use Illuminate\Support\Facades\Auth;

use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{

    use AuthenticatesUsers;

    public function register(Request $request) {
        $this->validate($request, [
            'username' => 'required|string|unique: user, username',
            'email' => 'required|email|unique: user, email',
            'password' => 'required|string|min: 6|max: 32',
            'gender' => 'required|boolean',
            'realname' => 'required|string|unique: user, realname|max: 100',
        ]);
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->realname = $request->realname;
        $user->gender = $request->gender;
        $user->nickname = $request->nickname ? $request->nickname : null;
        $user->admin = false;
        $user->save();
        return $user;
    }
    public function login(Request $request) {
        if(Auth::attempt([
            'username' => $request->username,
            //'password' => bcrypt($request->password),
            'password' => $request->password,
        ])) {
            $user = Auth::user();
            if(! $user) abert(401);
            $apiToken = new ApiToken;
            $apiToken->token = Uuid::uuid4()->toString();
            $apiToken->ip = $request->server('REMOTE_ADDR', null);
            $apiToken->expired_at = $request->remember_me ? null : Carbon::now()->addMinutes(30);
            $user->apiTokens()->save($apiToken);
            return response([
                'status' => Auth::check(),
                'apiToken' => $apiToken->token,
                'username' => $user->username,
            ]);
        }
        else abert(401);
    }
    public function show(Request $request, $user_id) {
        $user = User::find($user_id);
        return view('mydetail', compact('user'));
    }
    /*
    public function addAdmin(Request $request) {

    }
    */
}
