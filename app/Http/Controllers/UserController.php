<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userDashboard(){
        return view('moduels.user.user_dashboard');
    }
}
