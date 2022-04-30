<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document Title</title>
</head>
<body>

<div class="container">
    <h1 class="text-center">Municipios</h1>
    <a href="">
        <span class="material-icons">person_add</span>
    </a>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>DPI</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Tipo_Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php

        foreach ($usuario as $datos):

        ?>
            <tr>
                <td><?= $datos['dpi']; ?></td>
                <td><?= $datos['usuario']; ?></td>
                <td><?= $datos['contra']; ?></td>
                <td><?= $datos['tipousuario_id']; ?></td>
                <td>
                <a href="">
                        <span class="material-icons"> edit</span>Acualizar
                    </a>
            
                    <a href="">
                    <span class="material-icons">delete</span>Eliminar
                    </a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
        <tfoot>
        <tr>
                <th>Código_Región</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
        </table>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>