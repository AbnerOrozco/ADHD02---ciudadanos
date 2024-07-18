<?php


namespace App\Controllers;
use App\Models\MunicipiosModel;
class Municipios extends BaseController
{
    public function Municipios(): string
    {
        //creado un objeto de tipo RegionesModel
        $Depto = new MunicipiosModel();
        $Datos['datos']=$Depto->findAll();

        $Datos['datos']=($Depto->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('municipios',$Datos);
    }
}