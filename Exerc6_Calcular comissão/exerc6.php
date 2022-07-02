<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-atividadeAprendizagem.css">
</head> 

<body> 
    <h1> Programação web - Exercício 6</h1>
    <h3> Loja de informática </h3>

    <?php
    $nomeCliente = $_POST ["nome-cliente"];
    $valorTotal = $_POST ["valor-total"];
    $percentualCom = $_POST ["percentual-comissao"];
    
    define("COMISSAO", $_POST ["percentual-comissao"]/100);

    $comissaoVendedor  = $valorTotal * COMISSAO;
    $comissaoVendedorFormatado = number_format($comissaoVendedor, 2, ",", ".");

    echo "<p> <b>Resultados da venda </b><br><br>
            Nome do cliente = <span> $nomeCliente </span> <br>
            Valor total da compra = <span> R$$valorTotal </span> <br><br>
            Comissão do vendedor <br> 
            <span> $percentualCom%</span> de (R$$valorTotal) = <span> R$$comissaoVendedorFormatado </span> <br>
            </p> ";
    ?>
</body> 
</html> 