<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Usuarios extends Controller{
    
    public function iniciarSesion(){
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');

        $resultado ="select * from usuarios where usuario='". $usuario . "' and contra ='". $contra ."'";
            $conexion =db_connect();

            $ejecutar = $conexion->query($resultado);

            $cantidad = $ejecutar->getNumRows();

                if ($cantidad > 0){
                    $usuario = $ejecutar->getRow(0);

                    if ($usuario->tipousuario_id == 1){
                        return view('menu/menu_admi');
                        //echo "ir al menu de administrador";

                    }elseif ($usuario->tipousuario_id == 2){
                        return view('menu/menu_encargado');
                        //echo "ir al menu bibliotecario";

                    }elseif ($usuario->tipousuario_id == 3){
                        return view('menu/menu_operador');
                        //echo "ir al menu de operador";

                    }else {
                        return view('usuarios/usuario');
                        //echo "regresar al inicio de sesión";

                    }
                }else{
                    echo "Datos incorrectos";
                    return view('usuarios/usuario');

                }
        /*$resultados ="select * from ciudadanos where dpi='". $usuario . "' and contra ='". $contra ."'";
            $conexion =db_connect();
            $cargar = $conexion->query($resultados);
            $datos = $cargar->getNumRows();
            if ($datos > 0) {
                $usuario = $cargar->getRow(0);

                if ($usuario == 'dpi'){
                    return view('menu/menu_ciudadano');
                }else {
                    return view('usuarios/usuario');
                    //echo "regresar al inicio de sesión";

                }
            }else{
                echo "Datos incorrectos";
                return view('usuarios/usuario');

            
            }*/
    }

}