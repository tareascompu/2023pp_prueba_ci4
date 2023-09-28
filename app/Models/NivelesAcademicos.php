<?php 
namespace App\Models;

use CodeIgniter\Model;

class NivelesAcademicos extends Model{
    protected $table      = 'nivelesacademicos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_nivel_acad';
    protected $allowedFields=['cod_nivel_acad','nombre','descripcion'];
}