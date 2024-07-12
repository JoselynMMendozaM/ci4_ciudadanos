<?php

namespace App\Controllers;

use App\Models\MunicipiosModel;

class Municipios extends BaseController
{
    public function index(): string
    {
        $muni = new MunicipiosModel();
        $datos['datos']=($muni->findAll()); 

        return view('municipios', $datos); // Pass data to the view
    }
}
