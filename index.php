<?php

$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$resultado = $valor1 + $valor2
echo $resultado;



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form>
     Valor 1<input type="text" name="valor1" value="valor1">
     Valor 2<input type="text" name="valor2" value="valor2">   
     <input type="submit" name="enviar" value="enviar">
    </form>
    </body>
</html>