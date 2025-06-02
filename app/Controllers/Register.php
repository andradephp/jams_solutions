<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function show(): string
    {
        return view("Views/registro/registrar");
    }
}

