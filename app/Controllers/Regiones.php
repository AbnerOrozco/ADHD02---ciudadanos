<?php


namespace App\Controllers;
use App\Models\RegionesModel;
class Regiones extends BaseController
{
    public function Regiones(): string
    {
        //creado un objeto de tipo RegionesModel
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();

        $datos['datos']=($region->findAll());
        //findAll()= selec * from regiones;/ esto haria

        return view ('regiones',$datos);
    }
}