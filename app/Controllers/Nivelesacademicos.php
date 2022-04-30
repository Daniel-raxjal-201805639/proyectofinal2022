<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nivelesacademico;
class Nivelesacademicos extends Controller{
    public function cargarNiveles(){
        $niveles = new Nivelesacademico();
        
        $datos['nivel'] = $niveles-> orderBy('cod_nivel_acad' , 'ASC')->findAll();
            return view('encargados/nivelacad', $datos);
    }
}