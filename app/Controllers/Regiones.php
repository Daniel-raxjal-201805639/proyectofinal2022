<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Region;
class Regiones extends Controller{
    public function cargarRegiones(){
        $region = new Region();
        
        $datos['region'] = $region-> orderBy('cod_region' , 'ASC')->findAll();
            return view('encargados/region', $datos);
    }
}