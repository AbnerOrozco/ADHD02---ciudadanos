<?php


namespace App\Controllers;
use App\Models\CiudadanosModel;
class Ciudadanos extends BaseController
{
    public function Ciudadanos(): string
    {
        //creado un objeto de tipo RegionesModel
        $Depto = new CiudadanosModel();
        $Datos['datos']=$Depto->findAll();

        $Datos['datos']=($Depto->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('ciudadanos',$Datos);
    }
}