<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{

    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }


    public function index(): string
    {
        return view("Views/login/loginView");
    }


    public function registrar(): string
    {
        return view("Views/registro/registrar");
    }

    public function guardar()
    {
        $data = $this->request->getPost();
        $data['id_rol'] = 2;
        $this->usuarioModel->guardar($data);

        session()->set('usuario', $data['nombre_usuario']);
        session()->set('rol', $data['id_rol']);

        //cambiar esta ruta
        return redirect()->to('/login');
    }

    public function verificar()
    {
        $usuario = $this->request->getPost('usuario');
        $psw = $this->request->getPost('psw');

        $verificar = $this->usuarioModel->validar($usuario,$psw);

        if ($verificar) {
            session()->set('usuario', $verificar['nombre_usuario']);
            session()->set('perfil', $verificar['id_rol']);

            switch ($verificar['id_rol']) {
                case 1:
                    return redirect()->to('/Administrador');
                case 2:
                    return  redirect()->to('/pruebaUsuario');
                default:
                    return redirect()->to('/login');
            }
        } else {
            return redirect()->back()->with('mensaje', 'Credenciales incorrectas');
        }
    }


    public function salir()
    {
        session()->destroy();
        return  redirect()->to('/login');
    }


    public function pruebaUsuario()
    {
        return view('pruebaUsuario');
    }
    public function pruebaAdmin()
    {
        return view('/Administrador/index');
    }
}
