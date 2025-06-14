<?php

namespace App\Controllers;

use App\Models\SuscripcionModel;


class Suscripciones extends BaseController
{

    protected $suscripcionesModel;

    public function __construct()
    {
        $this->suscripcionesModel = new SuscripcionModel();
    }

    public function index()
    {
        $data['suscripciones'] = $this->suscripcionesModel->mostrarSuscripciones();
        return view('suscripciones/index', $data);
    }


    public function editar($id)
    {
        $data['suscripcion'] = $this->suscripcionesModel->editar($id);
        return view('/suscripciones/editar', $data);
    }

    public function eliminar($id)
    {
        $this->suscripcionesModel->eliminar($id);
        return redirect()->to('/suscripciones');
    }

    public function actualizar($id)
    {
        $data = $this->request->getPost();
        $this->suscripcionesModel->actualizar($id, $data);
        return redirect()->to('/suscripciones');
    }
}
