<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister()
    {

    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin()
    {

    }

    public function getLogout()
    {

    }
}
