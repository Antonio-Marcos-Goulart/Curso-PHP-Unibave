<?php

echo "<h1>Laços de repetição</h1>";
echo "<hr>";

echo "for(variáveis; condição; incremento)". "</br> </br>"; 

for($i = 0; $i <= 10; $i ++){
    echo "<pre>";
    print_r($i);
    echo "<pre>";
}

echo "<hr>" . "</br> </br>";

echo "foreach(variável as chaves => valor)" . "</br> </br>";
$array = [
    [
        "id" => 10,
        "name" => "Antônio"
    ],
    [
        "id" => 11,
        "name" => "Toninho"    
    ]

];

foreach($array as $key => $value){
    foreach($value as $key2 => $value2){
echo $key2;
echo"<pre>";
print_r($value2);
echo"<pre>";
    }
}

echo "<hr>" . "</br> </br>";

echo "while(condição)" . "</br> </br>";
$valor = rand(1, 100);
while($valor <= 100){
    echo "<pre>";
print_r($valor);
    echo "<pre>";

    $valor = $valor * 2;
}

echo "<hr>" . "</br> </br>";

echo "do{}while(condição)" . "</br> </br>";
$valordw = rand(1, 100);
do{
    echo "<pre>";
print_r($valordw);
    echo "<pre>";

    $valordw = $valordw * 2;
}while($valordw < 77);

echo "<hr>" . "</br> </br>";



