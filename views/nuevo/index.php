<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/main.css">

    <title>Registro</title>
</head>
<body>
<div>
<li class="active"><a href="<?php echo constant('URL');?>main">Inicio</a></li>
</div>

    <div class="contenedor">
        <h1 class="center"><?php echo $datos==NULL?'¡Regístrate!':'¡Actualízate!'?></h1>
        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>nuevo/registrar" method="POST">

           
            <div>
                <div>
                <label for="Cedula">Cédula</label><br>
                <input type="text" name="Cedula" placeholder="1234567890"size=50 value="<?php echo $datos===null?'':$datos['cedula']?>" required>
                </div>
                <div>
                <label for="ROL_idROL">Rol:</label><br>
                <input type="text" name="ROL_idROL" placeholder="ingresa '2' para cliente ó '3' para empleado" size=50 required>
                </div>
                <div>
                <label for="Nombre">Nombres:</label><br>
                <input type="text" name="Nombre" placeholder="Zully Yineth" size=50 required>
                </div>
            
                <div>
                <label for="Apellidos">Apellidos:</label><br>
                <input type="text" name="Apellidos" placeholder="Tamayo Martinez" size=50 required>
                </div>

                <div>
                <label for="Celular">Celular:</label><br>
                <input type="text" name="Celular" placeholder="300000000"size=50 required>
                </div>
                <div>
                <label for="Direccion">Direccion:</label><br>
                <input type="text" name="Direccion" placeholder="cr 10 # 10 -10"size=50 required>
                </div>

                <h5>(Ten en cuenta los siguientes datos para inicio de sesion)</h5>
                <div>
                <label for="Correo">Correo:</label><br>
                <input type="email" name="Correo" placeholder="ejemplo@gmail.com"size=50 required>
                </div>
                <div>
                <label for="Contrasena">Contraseña:</label><br>
                <input type="password" name="Contrasena" placeholder="123456"size=50 required>
                </div>
            <p>
            <input type="submit" value="<?php echo $datos===null?'Ingresar registro':'Actualizar registro'?>">
            </p>
            </div>

        </form>
    </div>

</body>
</html>