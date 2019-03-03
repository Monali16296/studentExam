<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function getUsers() {
        $user = User::find('1');
        
        /*
         * inserting a record in the intermediate table
         */
        //$user->role()->attach(3);
        
        /*
         * deleting record from intermediate table having role id 1
         */
        //$user->role()->detach(1);        
        
        /*
         * sync means inserting and id doesn't exist in array it will be removed
         */
        //$user->role()->sync([1, 3]);
        
        /*
         * syncWithoutDetaching means inserting without deleting records.
         */
        //$user->role()->syncWithoutDetaching([1, 2, 3]);
        
        /*
         * toggling attach and detach. If id is attached already then it will be detached and if id is
         * detached then it will be attached.
         */
        //$user->role()->toggle(3);
        
        /*
         * if need to update existing row in pivot table
         */
        //$user->role()->updateExistingPivot(3, ['id' => 13]);
        return view('forms.users', compact('user'));
    }
}
