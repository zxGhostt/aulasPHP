<?php


    $numero = 5;
    $res;

    //tabuada que pode ser usada FOR que mostra qualquer
    for($i = 0; $i<=10; $i++ ){
        $res = $numero * $i;
        echo "\n{$numero} x {$i} = {$res}";
    }

    //tabuada ate 10 com FOR
    for($i = 1; $i<=10; $i++ ){
        for($g = 0; $g <= 10; $g++){
         $res = $i * $g;
         echo "\n{$i} x {$g} = {$res}";
         
        }
        echo"\n-----------------";
    }

   

?>