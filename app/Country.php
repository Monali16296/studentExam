<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function posts() {
        return $this->hasManyThrough('App\Post', 'App\UserNew', 'country_id', 'users-new_id');
    }
}
