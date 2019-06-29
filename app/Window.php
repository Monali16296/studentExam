<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Window extends Model {

    //
    public function home() {
        return $this->belongsTo('App\Home', 'home_id', 'id');
    }

}
