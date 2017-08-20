<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $table = 'apiToken';

    public function user() {
        return $this.belongsTo('App\User', 'user_id', 'id');
    }
}
