<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        return view("Views/login/loginView");
    }
}

