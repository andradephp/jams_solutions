<?php

namespace App\Controllers;

use App\Models\UsuarioModel;


class Usuarios extends BaseController
{

    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuarioModel();
    }
    public function index()
    {
        $data['usuarios'] = $this->usuariosModel->mostrarUsuarios();
        return view('usuarios/usuarios', $data);
    }


    public function editar($id) {
        $data['usuario'] = $this -> usuariosModel -> editar($id);
        return view('usuarios/editar',$data);
    }

    public function eliminar($id) {
        $this -> usuariosModel ->eliminar($id);
        return redirect() -> to('/usuarios');
    }

    public function actualizar($id){
        $data = $this -> request -> getPost();
        $this -> usuariosModel -> actualizar($id,$data);
        return redirect() -> to('/usuarios');
    }
}
