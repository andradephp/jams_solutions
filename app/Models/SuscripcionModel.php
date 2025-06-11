<?php
namespace App\Models;
use CodeIgniter\Model;

class SuscripcionModel extends Model
{
    protected $table='suscripcion';
    protected $primarykey='id_suscripcion';
    protected $allowedFields=['id_suscripcion', 'descripcion','precio','fecha_modificacion'];
    protected $timestamps=false;
}
?>