<?php
namespace App\Models;
use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table='rol';
    protected $primaryKey='id_rol';
    protected $allowedFields=['id_rol', 'descipcion'];
    protected $timestamps=false;
}
?>