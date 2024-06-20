<?php

    #vetor ou array idexado

    #declaração do array
    $number = array(10, 20, 30, 40, "Maria", 10.5);

    #acessando um numero so da sequncia do array
    echo " ".$number[1];

    #usado para mostrar a sequncia de numeros no array
    foreach($number as $n){
        echo "\nSequencia $n";
    }


?>