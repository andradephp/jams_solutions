<?php
namespace App\Models;
use CodeIgniter\Model;

class SuscripcionModel extends Model
{
    protected $table='suscripcion';
    protected $primaryKey='id_suscripcion';
    protected $allowedFields=['id_suscripcion', 'descripcion','precio','fecha_modificacion'];
    protected $timestamps=false;

    public function mostrarSuscripciones(){
        return $this -> findAll();
    }

    public function editar($id){
        return $this -> find($id);
    }
    public function eliminar($id){
        return $this -> delete($id);
    }
    public function actualizar($id,$data){
        return $this -> update($id,$data);
    }


}
?>