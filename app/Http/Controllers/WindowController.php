<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Window;

class WindowController extends Controller {

    //
    public function getWindowList() {
        $a = Window::find(1);

        return view('forms.window', compact('a'));
    }

    /*
     * inspect route
     */
    public function getWindowList2(Request $request) {
        if ($request->route()->named('abc')) {
            echo 'inspecting route';            
        }
    }

}
