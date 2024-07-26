<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LogoutController extends Controller
{
    protected function logoutUser()
    {
        Auth::logout();

        return redirect('/');
    }
}
