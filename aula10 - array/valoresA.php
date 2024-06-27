<?php

    $valores = array(10, 30, 80, 100);
    $soma = 0;
    $media = 0;
    
    # "V" é o int no array
    # count($valores) retorna a quantidade de elementos no array

    foreach($valores as $v){
        $soma += $v;
    }

    $media = $soma / count($valores);
    echo "A soma dos valores são: {$soma}\n";
    echo "A média dos valores é: {$media}\n";
?>