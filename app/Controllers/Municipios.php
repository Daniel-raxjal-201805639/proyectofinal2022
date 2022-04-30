<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipio;
class Municipios extends Controller{
    public function cargarMunicipios(){
        $munis = new Municipio();
        
        $datos['muni'] = $munis-> orderBy('cod_muni' , 'ASC')->findAll();
            return view('encargados/municipios', $datos);
    }
}