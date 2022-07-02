                                                                                                                                                                 <!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
		<!--o arquivo css usado aqui não existe. Deves utilizar o mesmo nome de arquivo CSS da página html-->
		<link rel="stylesheet" href="formata-atividadeAprendizagem.css">                                                      kii
  
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
					   //aqui, ao invés de calcular o desconto, apenas guardamos a taxa apropriada
        $descontoIdade = DESCONTO1;
								//Criei uma variável nova
								$msgDesconto = "7% de desconto: Cliente acima de 70 anos.";
    }
    elseif($descontoDoCliente == "1")
    {
        $descontoIdade = DESCONTO2;
        $msgDesconto = "5% de desconto: Cliente entre 55 e 70 anos.";
    }
    else
    {
        $descontoIdade = DESCONTO3;
        $msgDesconto = "0% de desconto: Cliente com menos de 55 anos.";
    }

if(isset($_POST["cartao-fidelidade"]))
{
    $compraCartao = $_POST["cartao-fidelidade"];

    if($compraCartao == "Sim")
    {
					   //aqui também guardamos apenas a taxa para 5% de desconto para cartão de fidelidade. Note como criei uma outra variável diferente só para armazenar a mensagem relativa ao desconto por fidelidade
								$descontoFidelidade = 5/100;
        $msgDescontoCartao = "+ 5% de desconto: Pagamento com cartão de fidelidade.";
    }
}
else
{
	   //neste caso, o cliente não ganha nenhum desconto por fidelidade
	   $descontoFidelidade = 0;
    $msgDescontoCartao = "0% de desconto: Pagamento sem cartão de fidelidade.";
}

//Finalmente, Yanne, neste ponto, temos as duas variáveis que armazenam as taxas de desconto tanto para a idade quanto para a fidelidade. Basta somar estas duas e aplicar o percentual das duas somadas ao valor da compra
$percentualDescontoTotal = $descontoIdade + $descontoFidelidade;

//aplicando o percentual total à compra feita
$valorDesconto = $valorCompra * $percentualDescontoTotal;

//calculando o valor final da compra em função de todos os descontos
$valorFinalCompra = $valorCompra - $valorDesconto;

$valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
$valorDescontoFormatado = number_format($valorDesconto, 2, ",", ".");

//alterei um pouco tua mensagem na página web
echo "<p> <b>Resultados da venda </b><br>
            Valor da compra do cliente: <span> R$$valorCompra. </span><br>
            Valor final da compra: <span> R$$valorFinalCompraFormatado. </span><br> 
												Valor total dos descontos: <span> R$ $valorDescontoFormatado </span> <br>
												
            Descontos obtidos pelo cliente: <br>
												<span> $msgDesconto </span> <br>
												<span> $msgDescontoCartao </span> </p>";
}

else
{
    exit ("<p> Aplicação encerrada!<br> Marque as opções para concluir a venda. </p>");
}

    ?>

</body> 
</html> 