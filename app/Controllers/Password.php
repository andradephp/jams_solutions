<?php

namespace App\Controllers;

class Password extends BaseController
{
    public function index(): string
    {
        return view("Views/password/recuperarContrasena");
    }
}

