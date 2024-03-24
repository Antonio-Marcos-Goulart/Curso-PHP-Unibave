<?php
echo "01 >> EXERCÍCIO FOR - Calcule a soma dos números de 1 a 100 exiba o resultado." . "</br> </br>"; 
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " .$soma . "</br> </br>"; 

echo "02 >> EXERCÍCIO WHILE - Calcule a soma dos números de 1 a 100 exiba o resultado." . "</br> </br>";

$sun = 0;
$num = 1;
while ($num <= 100) {
    $sun += $num;
    $num++;
}
echo "A soma dos números de 1 a 100 é: " . $sun. "</br> </br>"; 

echo "03 >> EXERCÍCIO WHILE - Contagem regressiva a partir de 5" . "</br> </br>";
$numero = 50;
while($numero >= 0) {
    echo $numero . " ";
    $numero = $numero -2;
}
echo "</br> </br>";

echo "04 >> EXERCÍCIO DO-WHILE" . "</br> </br>";

$somar = 0;
do{
    $somar++;
}while ($somar <= 99);

echo $somar . "</br> </br>";

echo "05 >> EXERCÍCIO ARRAY FRUTA" . "</br> </br>";

$frutas = array("maçã", "Banana", "Laranja");
$frutas = ["maçã", "Banana", "Laranja"];
echo $frutas[0];

echo"</br> </br>";

echo "06 >> Array MUltidimensional" . "</br> </br>";

$numeirnho = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
echo $numeirnho[1][2] . "</br> </br>";



?>