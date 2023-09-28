<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwDepartamentos extends Model{
    protected $table      = 'vw_deptos_regiones';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $allowedFields=['cod_depto','nombre_depto','cod_region','nombre_region'];
}