<?php 
namespace App\Models;

use CodeIgniter\Model;

class Departamento extends Model{
    protected $table      = 'departamentos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_depto';
    protected $allowedFields = ['cod_depto','nombre_depto','cod_region'];

}