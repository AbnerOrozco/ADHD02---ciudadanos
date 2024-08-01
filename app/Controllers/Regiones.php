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

    public function nuevoRegion()
    {
        return view('Regiones_nuevos');
        
    }

    public function agregarRegion()
    {
        $datos = [
            'cod_region' => $this->request->getVar(''),
            'nombre' => $this->request->getVar(''),
            'descripcion' => $this->request->getVar('')
        ];
        $region = new RegionesModel();
        $region->insert($datos);
        return redirect()->route('regiones');
    }


    public function editarRegion($id): string
    {
        $region = new RegionesModel();
        $datos['region']= $region->find($id);
        return view('regiones_editar');
    }

    public function actualizarRgion()
    {
        $datos =[
            'nombre' => $this->request->getVar(''),
            'descripcion' => $this->request->getVar('')
        ];
        $region = new RegionesModel();
        $region->update($this->request->getVar(''), $datos);
        return redirect()->route('regiones')

    }


}


// 'cod_region', 'nombre', 'descripcion',