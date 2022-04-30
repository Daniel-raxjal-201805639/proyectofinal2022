<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tipo;
class Tipos extends Controller{
    public function cargarTipos(){
        $tipos = new Tipo();
        
        $datos['tipo'] = $tipos-> orderBy('tipousuario_id' , 'ASC')->findAll();
            return view('administradores/tiposusuarios', $datos);
    }
}