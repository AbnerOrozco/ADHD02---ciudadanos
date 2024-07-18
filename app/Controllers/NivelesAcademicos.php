<?php


namespace App\Controllers;
use App\Models\NivelesAcademicosModel;
class NivelesAcademicos extends BaseController
{
    public function NivelesAcademicos(): string
    {
        //creado un objeto de tipo RegionesModel
        $Depto = new NivelesAcademicosModel();
        $Datos['datos']=$Depto->findAll();

        $Datos['datos']=($Depto->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('nivelesAcademicos',$Datos);
    }
}