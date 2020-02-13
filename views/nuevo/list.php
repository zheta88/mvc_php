<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h2>Lista de base datos</h2>
<table class="table table-warning">
    <tr>
        <td>cedula</td>
        <td>ROL_idROL</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Celular</td>
        <td>Direccion</td>
        <td>Correo</td>
        <td>Contrasena</td>
        <div class="boton_nuevo">
        <input type="button" class="btn btn-success" onclick="window.location='<?=constant('URL') . 'nuevo'?>'" value="Nuevo Registro"/>
        </div>
    </tr>
    <?php foreach($datos as $pos => $datosFilaArr):?>
    <tr>
        <td><?=$datosFilaArr['cedula']?></td>
        <td><?=$datosFilaArr['ROL_idROL']?></td>
        <td><?=$datosFilaArr['Nombre']?></td>
        <td><?=$datosFilaArr['Apellidos']?></td>
        <td><?=$datosFilaArr['Celular']?></td>
        <td><?=$datosFilaArr['Direccion']?></td>
        <td><?=$datosFilaArr['Correo']?></td>
        <td><?=$datosFilaArr['Contrasena']?></td>
        <td><a href="<?=constant('URL') . 'nuevo/actualizar/' . $datosFilaArr['cedula']?>">Actualizar</a></td>
        <td><a href="<?=constant('URL') . 'nuevo/eliminar/' . $datosFilaArr['cedula']?>">Eliminar</a></td>
    </tr>
    <?php endforeach;?>
</table>
    
</body>
</html>

