<?php 

    $number = 2;
    $contador = 1;

   
    while($contador <= 10 ){
        $res = $number * $contador;
        echo "\n{$number} x {$contador} = {$res}";
        $contador++;
    }

    echo "\nfim"

?>