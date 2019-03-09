<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /*
     * if primary key is other than int type then specify
     */
    //protected $keyType = 'string';
    
    /*
     * if want to manage timestamps manually then use
     */
    //protected $timestamps = false;
    
    /*
     * if want to customize names of created_at and updated_at columns of timestamps
     */
//    const CREATED_AT = 'creation';
//    const UPDATED_AT = 'updation';

    public function manager() {
        return $this->hasOne('App\Manager');        
    }
}
