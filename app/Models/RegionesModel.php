<?php

namespace App\Models;

use CodeIgniter\Model;

class RegionesModel extends Model
{
    protected $table         = 'regiones';
    protected $allowedFields = [
        'cod_region', 'nombre', 'descripcion',
    ];
   
}