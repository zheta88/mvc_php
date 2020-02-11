<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/numeros.css">
    <title>calculadora</title>
</head>
<body>

<?php require 'views/header.php'?> 

<div class="contenedor">
    <h1>Suma de dos números<h1>
    <form method="post" action="calculadora">
                <label>N&uacute;mero 1</label>
                <input type ="text" size="5" name="num1" required>
                <br><br>
                <label>N&uacute;mero 2</label>
                <input type="text" size="5" name="num2" required>
                <br><br>
                <input type="submit" name="calcular" value="Calcular">
                <?php 
                if(isset($parametros) && isset($parametros['resultado_suma'])){
                    echo $parametros['resultado_suma'];
                }
                ?>
    </form>  
</div>
</body>
</html> 
