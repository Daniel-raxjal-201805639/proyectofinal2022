<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Departamento;
class Departamentos extends Controller{
    public function cargarDepartamento(){
        $depa = new Departamento();
        
        $datos['depas'] = $depa-> orderBy('cod_depto' , 'ASC')->findAll();
            return view('encargados/departamento', $datos);
    }
}