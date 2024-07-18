<?php


namespace App\Controllers;
use App\Models\DepartamentosModel;
class departamentos extends BaseController
{
    public function departamentos(): string
    {
        //creado un objeto de tipo RegionesModel
        $Depto = new DepartamentosModel();
        $Datos['datos']=$Depto->findAll();

        $Datos['datos']=($Depto->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('departamentos',$Datos);
    }
}