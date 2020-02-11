<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/numeros.css">
     
    <title>Document</title>
</head>
<body>
<?php require 'views/header.php'?> 
<div class="contenedor">
<h1>Edad pensión</h1>
<h1>Ingrese Fecha de nacimiento :</h1>

<form method="post" action="edad_pension">
            <label>dia:</label>
            <input type ="text" size="5" name="dia" required>
            <br><br>
            <label>mes:</label>
            <input type ="text" size="5" name="mes" required>
            <br><br>
            <label>año:</label>
            <input type ="text" size="5" name="año" required>
            <br><br>
            <label>Genero:</label>
            <input type ="text" size="5" name="Genero" required>
            <br><br>
            <br><br>
            <h1>fecha laboral:<h1>
            <label>fecha inicio</label>
            <input type ="text" size="12" name="fecha_inicio" placeholder="AAAA-MM-DD" required>
            <br><br>
            <label>fecha final</label>
            <input type ="text" size="12" name="fecha_final" placeholder="AAAA-MM-DD" required>
            <br><br>
            <input type="submit" name="calcular" value="Calcular">
            <?php 
                if(isset($parametros) && isset($parametros['edad_pension'])){
                    echo $parametros['edad_pension'];
                }
                ?>
        </form>  
       
</div>
    
</body>
</html>