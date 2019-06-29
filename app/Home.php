<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model {

    //
    public function windows() {
        return $this->hasMany('App\Window', 'home_id', 'id');
    }

}
