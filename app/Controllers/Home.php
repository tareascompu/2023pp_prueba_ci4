<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //Crear un modelo (clase) archivo php, nombre de tabla, Crear un Controlador
        return view('vista_menu');
    }
}
