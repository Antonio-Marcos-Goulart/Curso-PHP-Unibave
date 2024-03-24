<?php
    $alturaH = rand(1,10);
    $baseB = rand(1,10);
    $areaTriangulo = ($baseB * $alturaH) / 2;
    echo "A área do triângulo é: " . $areaTriangulo;
    echo "</br></br>";
    $pes = rand(0,100);
    $polegadas = $pes * 12;
    $jardas = $pes / 3 ;
    $milhas = $jardas / 1760 ; 
    echo "Conversão: </br> Pés: " . $pes . "</br> Jardas: " . $jardas . "</br> Milhas: " . $milhas . "</br> Polegadas: " . $polegadas; 
?>
