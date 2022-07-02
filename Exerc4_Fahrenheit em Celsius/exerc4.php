<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-atividadeAprendizagem.css">
</head> 

<body> 
    <h1> Programação web - Exercício 4</h1>
    
    <?php
    $tempF = $_GET ["temp-f"];

    $tempC = ($tempF - 32) * 5/9;

    echo "<p> Temperatura <br><br>
            Grau Fahrenheit = <span> $tempF ºF </span> <br><br>
            Grau Celsius = <span> $tempC ºC </span> <br>
          </p> ";

    ?>

</body> 
</html> 