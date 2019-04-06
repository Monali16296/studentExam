<?php

namespace App;

/*
 * global scope
 */
//use App\Scopes\AgeScope;

/*
 * anonymous global scope 
 */
//use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;

/*
 * soft del
 */
//use Illuminate\Database\Eloquent\SoftDeletes;

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
    
    /*
     * if don't want to allow certain columns to be mass assignable 
     * here name column would be empty and other column values would be getting inserted
     * used for create method of inserting data
     */    
//    protected $guarded = ['name'];
    
    /*
     * if want to allow all columns mass assignable
     */
//    protected $guarded = [];

    /*
     * deleted_at column will be updated. Record won't be deleted. 
     * soft deleted records are automatically excluded from all queries.
     */
//    use SoftDeletes; 
    
    /*
     * fillable
     * need for saving data using create mass assignment
     * also used for security so that third party user can't change important things to column.
     */  
    
    /*
     * applying global scopes
     */
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new AgeScope);
//    }
    
    /*
     * anonymous global scope
     */
//    protected static function boot() {
//        parent::boot();
//        
//        static::addGlobalScope('age', function(Builder $builder){
//            $builder->where('id', '>', 1);
//        });
//    }
    
    /*
     * defining local scope, prefix should be scope
     */
//    public function scopePopular($query) 
//    {
//        return $query->where('id', 2);
//    }
    
    /*
     * defining dynamic scopes
     */
//    public function scopeOfType($query, $id) 
//    {
//        return $query->where('id', $id);
//    }
    protected $fillable = ['name'];
    public function manager() {
        return $this->hasOne('App\Manager');        
    }
}
