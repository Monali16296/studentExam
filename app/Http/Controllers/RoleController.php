<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    //
    public function getRoles() {
        $role = Role::find('2');
        
        return view('forms.roles', compact('role'));
    }
}
