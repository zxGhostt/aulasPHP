<?php

    //oeracçoes aritimeticas +, -, /, *, %.

    $num1 = 10;
    $num2 = 20;

    $soma = $num1 + $num2;
    $divisao = $num1 / $num2;
    $multi = $num1 * $num2;
    $subtracao = $num1 - $num2;
    $media = (($num1 + $num2)/2) + 10;
    
    $modulo = 15 % 2; //resto da divisao

    echo "A soma é: {$soma}";
    echo "\nA divisao é: {$divisao}";
    echo "\nA multiplicacao é: {$multi}";
    echo "\nA subtracao é: {$subtracao}";
    echo "\no  resultado da media tirada é: {$media}";
    
    echo "\n\no resto da divisao é: {$modulo}";
?>