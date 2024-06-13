<?php

    // Definição da função = definir o que ela faz ou -PROCEDIMENTO-
    function soma($n1, $n2){
        //variavel local
        $resultado = $n1 + $n2;
        echo "\n\nO resultado da Soma: {$resultado}";

    }

    //definição da função
    function sub($num1, $num2){
       
        $res = $num1 - $num2;
        return $res;
        
    }

    function calcular($nn1, $nn2){
        
        soma($nn1, $nn2);
        $resSub = sub($nn1, $nn2);
        echo "\nO resultado da Subtração: {$resSub}";

    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Chamada da função ou invocador da função
    soma(500,213);
    soma(1000,2300);

    $retornoF = sub(50,30); 
    echo "\n\nO resultado da Retorno: {$retornoF}";

    calcular(50,50);
?>