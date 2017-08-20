<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $hidden = [
        'password', 'admin',
    ];

    public function apiTokens() {
        return $this.hasMany('App\ApiToken', 'user_id', 'id');
    }
    /*
    public function comment() {
        return $this.hasMany('App\comment', 'user_id', 'id');
    }
    */

    //blog, img
}
