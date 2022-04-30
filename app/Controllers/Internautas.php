<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Internauta;
class Internautas extends Controller{
    public function cargarInternautas(){
        $usuario = new Internauta();
        
        $datos['usuario'] = $usuario-> orderBy('dpi' , 'ASC')->findAll();
            return view('administradores/administrador', $datos);
    }
}