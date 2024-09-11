<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        return view('login');
    }

    public function forgot(): string
    {
        return view('forgot');
    }

    public function register(): string
    {
        return view('register');
    }
}
