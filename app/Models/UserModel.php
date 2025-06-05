<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table='usuarios';
    protected $primarykey='id_usuario';
    protected $allowedFields=['id_usuarios', 'nombre_usuario','apellido_usuario','telefono_usuario','email_usuario'];
    protected $timestamps=false;
}
?>