<?php

if (isset($_POST['enviar'])) {
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$resultado = $valor1 + $valor2;
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    
    <form method="post" action="">
     Valor 1<input type="text" name="valor1" value="">
     Valor 2<input type="text" name="valor2" value="">   
      <a href="" class="btn btn-enviar">Enviar</a>
    <br/>
     
     <?php
     if (isset($resultado)) {
     echo "A soma é: $resultado";
     } ?>
    

    </form>

    </body>

</html>