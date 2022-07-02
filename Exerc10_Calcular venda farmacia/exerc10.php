<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
    <h1> Programação web - Exercício 10</h1>
    <h3> Rede de Farmácias XXX </h3>

    <?php

$valorCompra = $_POST["valor-compra"]; 

define("DESCONTO1", 7/100);
define("DESCONTO2", 5/100);
define("DESCONTO3", 0/100);

if(isset($_POST["desconto-cliente"])) 
{
    $descontoDoCliente = $_POST["desconto-cliente"];
    $desconto = 0; 
    
    if($descontoDoCliente == "0")
    {
        $desconto = $valorCompra * DESCONTO1;
        $desconto = "7% de desconto: Cliente acima de 70 anos.";
    }
    elseif($descontoDoCliente == "1")
    {
        $desconto = $valorCompra * DESCONTO2;
        $desconto = "5% de desconto: Cliente entre 55 e 70 anos.";
    }
    else
    {
        $desconto = $valorCompra * DESCONTO3;
        $desconto = "0% de desconto: Cliente com menos de 55 anos.";
    }

if(isset($_POST["cartao-fidelidade"]))
{
    $compraCartao = $_POST["cartao-fidelidade"];

    if($compraCartao == "Sim")
    {
        $compCartao = 0.05;
        $compCartao = "+ 5% de desconto: Pagamento com cartão de fidelidade.";
    }
}
else
{
    $compCartao = "0% de desconto: Pagamento sem cartão de fidelidade.";
}

$valorF = $valorCompra - $desconto - $compraCartao;
$valorFinalCompraFormatado = number_format($valorF, 2, ",", ".");

echo "<p> <b>Resultados da venda </b><br><br>
            Valor da compra do cliente: <span> R$$valorCompra. </span><br><br>
            Valor final da compra: <span> R$$valorFinalCompraFormatado. </span><br> 
            Descontos do cliente:<br>
            <span> $desconto </span><br>
            <span>$compCartao </span><br><br>       
    </p>";
}

else
{
    exit ("<p> Aplicação encerrada!<br> Marque as opções para concluir a venda. </p>");
}

    ?>

</body> 
</html> 