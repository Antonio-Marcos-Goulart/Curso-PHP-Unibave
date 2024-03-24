<?php
echo ">>> EXERCICIOS SOBRE VARIAVEIS <<<" . ". </br>" . "</br>"; 
echo ">> EXERCICIO 01 - NOTA" . ". </br>" . "</br>"; 

$nota01 = rand (0,10);
$nota02 = rand (0,10);
$nota03 = rand (0,10);

$media = ($nota01 + $nota02 + $nota03) /3;

echo "Suas notas foram: " . $nota01. "," . $nota02. "," . $nota03. ". </br>" . "</br>" ;
if ($media >= 7) {
    echo "Parabens,  sua média foi: " . round($media) . " Parabens, você foi aprovado! </br> </br>" ;
}else{
    echo "Sua nota foi: " . round($media) . " Você foi reprovado! </br> </br>" ;

}

echo ">> EXERCICIO 02 - IMPAR OU PAR" . ". </br>" . "</br>"; 

$numero = rand(0,100);

if($numero %2 !==0) {

   echo "O numero $numero é impar. </br> </br>";

}else{
    echo "Onumero $numero é par. </br> </br>";
}

echo ">> EXERCICIO 03 - CLASSIFICAÇÃO DE IDADE" . ". </br>" . "</br>"; 

$idade = rand(1,100);

if ($idade < 18 ) {
    echo "Adolescente " .$idade . "</br> </br>";

}elseif ($idade >= 18 && $idade <= 65){
    echo "Adulto " .$idade . "</br> </br>";
   
}else{
    echo "Idoso " .$idade . "</br> </br>";
}

echo ">> EXERCICIO 04 - POSITIVO, NEGATIVO OU ZERO. </br> </br>"; 

$numNP = rand(-1000,1000);
if($numNP < 0) {
    echo "O numero " .$numNP. " é negativo.  </br> </br>";

}elseif ($numNP > 0){
    echo "O numero " .$numNP. " é positivo. </br> </br>";

}else{
    echo $numNP. " Não é negativo nem positivo. </br> </br>";
}

echo ">> EXERCICIO 05 - CALCULO DE DESCONTO. </br> </br>";

$valor = rand(1,1000);
echo " Valor da compra: R$ " . $valor. "</br> </br>";
if($valor > 100) {
    $valordesc = $valor - $valor * (10/100);
    echo "O valor da sua compra com 10% de desconto: R$ " .$valordesc. "</br> </br>";
}else{
    echo "O valor da sua comopra sem desconto foi: R$ " .$valor. "</br> </br>";
}

echo ">> EXERCICIO 06 - DESCISÃO DE COMPRA. </br> </br>";

$saldoConta = rand(0,1200);
$valorprod = rand(1,1500);

$saldoF = $saldoConta - $valorprod;

echo "Saldo disponivel: R$" . $saldoConta. "</br> </br>";
echo "Valor do produto: R$" . $valorprod. "</br> </br>";

if($saldoConta > $valorprod) {
    echo "Seu saldo é sufuciente para realizar a compra. </br> </br>" ;
    echo "Compra realizada com sucesso! </br> </br>";
    echo "Valor restante na conta após a compra: R$ " . $saldoF. "</br> </br>";

}else{
    echo "Seu saldo não é o suficiente para realizar a compra </br> </br>";
}

echo ">> EXERCICIO 07 - CLASSIFICAÇÃO DE NOTA. </br> </br>";

$nota = rand(0,10);
echo "Sua nota foi: $nota" . "</br> </br>";

if ($nota >= 9 ) {
    echo "Exelente, você foi aprovado! </br> </br>";

}elseif ($nota >= 7 && $nota <= 8){
    echo "Bom, você está acima da média! </br> </br>";

}elseif ($nota >= 4 && $nota <= 6){
     echo "Regular, você está na média! </br> </br>";
       
}else{
    echo "Insuficiente, você não foi aprovado! </br> </br>";
}

echo ">> EXERCICIO 08 - CALCULADORA DE IMC. </br> </br>";

echo ">> EXERCICIO 09 - DETERMINAÇÃO DE MES POR NÚMERO. </br> </br>";


?>


