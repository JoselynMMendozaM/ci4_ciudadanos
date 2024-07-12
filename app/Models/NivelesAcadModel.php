<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class NivelesAcadModel extends Model
    {
        protected $table         = 'nivelesAcademicos';
        protected $allowedFields = [
            'cod_nivel_acad', 'nombre', 'descripcion'];

        
    }