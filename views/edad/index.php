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
<h1>Calcular Edad<h1>
<form method="post" action="edad">
            <label>Dia nacimiento</label>
            <input type ="text" size="5" name="dia" required>
            <br><br>
            <label>Mes Nacimiento</label>
            <input type="text" size="5" name="mes" required>
            <br><br>
            <label>Año Nacimiento</label>
            <input type ="text" size="5" name="año" required>
            <input type="submit" name="calcular" value="Calcular">
            <?php 
                if(isset($parametros) && isset($parametros['resultado_edad'])){
                    echo $parametros['resultado_edad'];
                }
                ?>
        </form>  
       
</div>
    
</body>
</html>