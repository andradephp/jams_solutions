<?php

namespace App\Models;

use CodeIgniter\Model;

class SuscripcionUsuarioModel extends Model
{
    protected $table = 'suscripcion_usuario';
    protected $primaryKey = false;
    protected $useAutoIncrement = false;
    protected $allowedFields = ['fk_id_suscripcion', 'fk_id_usuario', 'fecha_compra'];
    protected $timestamps = false;

}
