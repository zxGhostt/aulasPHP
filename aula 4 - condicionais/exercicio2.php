<?php
    #condicionais encadeadas

    $idade = 20;

    if(($idade >= 16 && $idade < 18) || $idade >= 70){
        echo "voto facultativo";
    }else if ($idade >=18 && $idade <70){
        echo "voto obrigatorio";
    }else{
        echo "Não vota";
    }
?>