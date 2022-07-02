<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-atividadeAprendizagem.css">
</head> 

<body> 
    <h1> Programação web - Exercício 5</h1>

    <?php
    $valorD = $_POST ["valor-dolares"];

    define("TAXACAMBIO", 5.22);

    $valorR = $valorD * TAXACAMBIO;

    echo "<p> Como está o dólar hoje? <br><br>

            Dólar americano = <span> US$ $valorD </span> <br>
            Real brasileiro = <span> R$ $valorR </span> <br><br>
            Valor da Taxa de Câmbio (26 de dez)<br> 1 Dólar americano = ", TAXACAMBIO, " Real brasileiro.           
          </p> ";

    ?>
</body> 
</html> 