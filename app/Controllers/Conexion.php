<?php
namespace App\Controllers;

class Conexion extends BaseController{
    public function show(){
        $bd = \Config\Database::connect();
        $query = $bd -> query("SELECT id_usuario, nombre_usuario, apellido_usuario, telefono_usuario, email_usuario FROM usuarios");
        $resultado = $query ->getResult();
        $data = ["conexion" => $resultado];
        return view("login/loginConex", $data);
    }
}