<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
    }
}
