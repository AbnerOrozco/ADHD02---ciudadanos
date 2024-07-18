<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipiosModel extends Model
{
    protected $table         = 'municipios';
    protected $allowedFields = [
        'cod_muni', 'nombre_municipio', 'Cod_depto',
    ];
   
}