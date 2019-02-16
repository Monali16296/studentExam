<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function getUsers() {
        $user = User::find('1');
       
        return view('forms.users', compact('user'));
    }
}
