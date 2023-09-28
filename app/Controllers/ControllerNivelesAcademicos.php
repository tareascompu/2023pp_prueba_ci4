<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NivelesAcademicos;
class ControllerNivelesAcademicos extends Controller{
    public function cargarNiveles(){
        //crear un objeto NivelesAcademicos
        $nivAcad = new NivelesAcademicos();
        //buscar y cargar el resultado en un objeto de php (coleccion)
        $resultado['resutado'] = $nivAcad->findAll();//select * from nivelesacademicos;
        return view('vista_niveles_academicos',$resultado);
    }
    public function guardarNivelAcademico(){
        //recibir datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $descripcion = $this->request->getVar('txt_descripcion');
        /*
        echo "Datos del nivel academico";
        echo "<br>Cod: ". $codigo;
        echo "<br>Nombre: ". $nombre;
        echo "<br>Descripción: ". $descripcion;
        */

        //para almacenar los datos en la tabla de la bd
        //es necesario instanciar la clase del Modelo
        $nivelAcad = new NivelesAcademicos();
        $datos=['cod_nivel_acad'=>$codigo,
                'nombre'=>$nombre,
                'descripcion'=>$descripcion
        ];
        //metodo para insertar datos
        $nivelAcad->insert($datos);
        //mensaje para indicar si se pudo almacenar o existe algun inconveniente

        return $this->cargarNiveles();

        
       
    }
    public function eliminarNivelAcad($codigo=null){
        //echo "se eliminará el registro con código: ".$codigo;
        //instanciar la clase del modelo 
        $nivAcademico = new NivelesAcademicos();
        $nivAcademico->delete($codigo);
        //cargar nuevamente el formulario
        return $this->cargarNiveles();

    }
    public function localizarNivelAcad($codigo=null){
        //echo "Codigo a buscar para cargar datos en formulario: ". $codigo;
        //instanciar la clase del modelo 
        $nivAcademico = new NivelesAcademicos();
        $datosNivel['datosNivel']=$nivAcademico->where('cod_nivel_acad',$codigo)->first();
        return view('frm_actualizar_nivel',$datosNivel);
    }

    public function modificarNivel(){
        //recibir datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        $nombre = $this->request->getVar('txt_nombre');
        $descripcion = $this->request->getVar('txt_descripcion');
        //instanciar el modelo
        $nivelAcad = new NivelesAcademicos();
        $datos=['nombre'=>$nombre,
                'descripcion'=>$descripcion
        ];

        $nivelAcad->update($codigo,$datos);
        return $this->cargarNiveles();
    }
}