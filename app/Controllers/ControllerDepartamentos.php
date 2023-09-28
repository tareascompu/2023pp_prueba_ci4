<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VwDepartamentos;
use App\Models\Region;
use App\Models\Departamento;

class ControllerDepartamentos extends Controller
{
    public function cargarDepartamentos()
    {
        //crear un objeto de tipo VwDepartamentos
        $deptos = new VwDepartamentos();
        //realizar busqueda 
        $resultadoDepto = $deptos->orderBy('cod_depto')->findAll();

        $region = new Region();
        $resultadoRegion = $region->orderBy('cod_region')->findAll();

        $resultado = array(
            'resultadoDepto' => $resultadoDepto,
            'resultadoRegion' => $resultadoRegion
        );

        //cargar la vista y enviarle el resultado de la busqueda
        return view('vista_departamentos', $resultado);
    }
    public function guardarDepto()
    {

        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $region = $this->request->getVar('lst_region');
        /*
        echo "Datos del nivel academico";
        echo "<br>Cod: ". $codigo;
        echo "<br>Nombre: ". $nombre;
        echo "<br>Descripción: ". $region;
        */
        $depto = new Departamento();
        $datos = [
            'cod_depto' => $codigo,
            'nombre_depto' => $nombre,
            'cod_region' => $region
        ];
        $depto->insert($datos);

        return $this->cargarDepartamentos();
    }
}
