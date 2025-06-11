<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table='usuario';
    protected $primarykey='id_usuario';
    protected $allowedFields=['id_usuario', 'nombre_usuario','psw_usuario','correo_usuario','telefono_usuario','restaurante','id_rol'];
    protected $timestamps=false;
}
?>