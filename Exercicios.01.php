<?php
// EXERCICIO 1

echo ">>Exercicio 01 - Num. Aleatorio";
echo "</br>";
echo "</br>";

$num1 = rand(0,100);
$num2 = rand(0,100);
$maior = max($num1, $num2);
echo "Primeiro numero:" . $num1 . "</br>" . "Segundo numero" . $num2 . "</br>" . "Maior numero:" . $maior;

echo "</br>";
echo "</br>";

// Exercicio 2

echo ">>Exercicio 02 - Raiz Quadrada";
echo "</br>";
echo "</br>";

echo "Raiz quadrada do primeiro numero: " . sqrt($num1) . "</br>" . "Raiz do segundo numero: " . sqrt($num2) . "</br>" . "</br>";

// Exercicio 03

echo ">> Exercicio 03 - Forma arredondada";
echo "</br>";
echo "</br>";

echo "Forma arredondada: " . round(sqrt($num1)) . "</br>" . "Segundo numero arredondado: " . round(sqrt($num2)) . "</br>" . "</br>";

// Exercicio 04

echo ">> Exercicio 04 - Desconto";
echo "</br>";
echo "</br>";

$ValorProduto = rand(1,500);
$ValorPorcentagem = rand(0,20);
$valorComDesconto = $ValorProduto - ($ValorProduto * ($ValorPorcentagem/100));
echo "Valor do produto: R$" . $ValorProduto . "</br>" . "Desconto" . $ValorPorcentagem . "%" . "</br>" . "Valor do produto com desconto: R$" . $valorComDesconto . "</br>" . "</br>";

// Exercicio 05

echo ">> Exercicio 05 - Temperatura";
echo "</br>";
echo "</br>";

echo "Conversão temperatura: " . "</br>";
$tempFh = rand(-20,200);
$CalculoConv = ($tempFh - 32) *5/9;
echo "Temperatura em Fahrenheit: " . $tempFh . "</br>" . "Temperatura Convertida: " . round($CalculoConv) . "</br>" . "</br>";

// Exercicio 06

echo ">> Exercicio 06 - Capitalização de frase";
echo "</br>";
echo "</br>";

$frase = "Bom dia senhoras e senhores, só não vou falar o conselho do dia pois ja é noite!!" ."</br>" . "</br>";
echo ucwords($frase);

// Exercicio 07

echo ">> Exercicio 07 - Contagem de Ocorrências";
echo "</br>";
echo "</br>";

echo "Qunatidade de palavras na frase: " . str_word_count($frase , $format=0) . "</br>";

?>

