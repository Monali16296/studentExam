<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller {

    //
    public function getHomeList() {
        $a = Home::find(1)->Windows;

        return view('forms.home', compact('a'));
    }

}
