<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartamentosModel extends Model
{
    protected $table         = 'departamentos';
    protected $allowedFields = [
        'cod_depto', 'nombre_depto', 'Cod_region',
    ];
   
}