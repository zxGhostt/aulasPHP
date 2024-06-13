<?php


    function calcularImc($peso, $altura){
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function situacao($imc){

        if($imc < 16){
            echo "O imc é: {$imc}.\nSitução de Baixo peso";
        }else if($imc >= 16 && $imc <= 25){
            echo "O imc é: {$imc}. \nSitução de Saudavel";
        }else if($imc > 25 && $imc < 29){
            echo "O imc é: {$imc}. \nSitução de sobrepeso";
        }else{
            echo "O imc é: {$imc}. \nSitução de obesidade";
        }
           
        
    }
    ////////////////////////////////////////////////////////////////
    //debugar

    $peso = $_GET["peso"];
    $altura = $_GET["altura"];


    $imc = calcularImc($peso, $altura);
    situacao($imc);

?>