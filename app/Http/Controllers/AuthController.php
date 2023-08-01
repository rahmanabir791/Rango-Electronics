<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login ()
    {
        return view('back.auth.login');
    }

    public function register ()
    {
        return view('back.auth.register');
    }
}
