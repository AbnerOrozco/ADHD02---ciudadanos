<?php

namespace App\Models;

use CodeIgniter\Model;

class NivelesAcademicosModel extends Model
{
    protected $table         = 'nivelesacademicos';
    protected $allowedFields = [
        'cod_nivel_acad', 'nombre', 'descripcion',
    ];
   
}


//NivelesAcademicosModel