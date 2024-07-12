<?php

namespace App\Controllers;

use App\Models\NivelesAcadModel;

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {
        $nivelacad = new NivelesAcadModel();
        $datos['datos']=($nivelacad->findAll()); 

        return view('nivelesAcademicos', $datos); // Pass data to the view
    }
}
