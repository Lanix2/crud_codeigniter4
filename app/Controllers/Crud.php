<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();

        $data = [
                    "datos" => $datos
        ];

        return view('listado', $data);
    }

    public function crear()
    {
        var_dump($_POST);
    }

    public function actualizar(){
        print_r("ttuki");
    }

    public function obtener_nombre($idNombre){
        
    }

    public function eliminar($idNombre){

    }
}
