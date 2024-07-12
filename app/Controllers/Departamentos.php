<?php

namespace App\Controllers;

use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {
        $depto = new DepartamentosModel();
        $datos['datos']=($depto->findAll()); 

        return view('departamentos', $datos); // Pass data to the view
    }
}
