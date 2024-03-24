<?php
echo "Exercícios Foreach" . "</br> </br>";

echo "01 - Faça um array com 5 nomes, e printe todos eles na tela utilizando o foreach()"  . "</br> </br>";

$nome = [ "Jubsclaison", "Pedro", "Abdala", "João", "Chico"];
    foreach ($nome as $nome){
    echo $nome . "<br>";
    }

echo "</br> </br>";
   
########################################################################################################################################################
echo "02 - Crie uma array de números inteiros e use um loop foreach para calcular a soma de todos os valores na array."  . "</br> </br>";

$numero = [0, 1, 2, 3, 4, 5];
$soma = 0;

foreach ($numero as $num) {
    $soma += $num;
    echo "Soma: " . $soma . "<br>";
}

echo "</br> </br>";

########################################################################################################################################################
echo "03 - Crie um array com 10 numeros e utilizando o foreach() passe por todos os numeros do array e printe ele na tela se ele for um numero par." . "</br> </br>";

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeros as $nump) {
    if ($nump %2 == 0) {
        echo "Número par: " . $nump . "<br>";
    }
}

echo "</br> </br>";

########################################################################################################################################################
echo "03 - Função para somar" . "</br> </br>";

function funçãoSomar($num1, $num2) {
    $soma = $num1 + $num2;
    $mult = $soma * 2;
    echo $num1 . ", " . $num2;
    echo "</br>" . $soma . "</br>";
    return $mult;	
        
} 
echo funçãoSomar(rand(0,10), rand(0,10)) . "</br> </br>" ;

?>