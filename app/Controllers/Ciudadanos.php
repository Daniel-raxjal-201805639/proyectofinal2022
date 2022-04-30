<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadano;
class Ciudadanos extends Controller{
    public function cargarCiudadanos(){
        $ciudadanos = new Ciudadano();
        
        $datos['ciudadano'] = $ciudadanos-> orderBy('dpi' , 'ASC')->findAll();
            return view('ciudadanos/ciudadano', $datos);        
    }
}