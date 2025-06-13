<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\RolModel;
use App\Models\SuscripcionModel;
use App\Models\SuscripcionUsuarioModel;

class Administrador extends BaseController
{

    protected $usuariosModel;
    protected $rolModel;
    protected $suscripcionModel;
    protected $suscripcionUsuarioModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuarioModel();
        $this->rolModel = new RolModel();
        $this->suscripcionModel = new SuscripcionModel();
        $this->suscripcionUsuarioModel = new SuscripcionUsuarioModel();
    }
    public function index() 
    {
        return view('Administrador/index');
    }

}
