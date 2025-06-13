<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['id_usuario', 'nombre_usuario', 'psw_usuario', 'correo_usuario', 'telefono_usuario', 'restaurante', 'id_rol'];
    protected $timestamps = false;

    public function mostrarUsuarios()
    {
        return $this->findAll();
    }

    public function guardar($datos)
    {
        return $this->insert($datos);
    }

    public function editar($id)
    {
        return $this->find($id);
    }

    public function actualizar($id, $datos)
    {
        return $this->update($id, $datos);
    }

    public function eliminar($id)
    {
        return $this->delete($id);
    }

    public function validar($usuario, $psw)
    {
        return $this->where('nombre_usuario', $usuario)->where('psw_usuario', $psw)->first();
    }
}
