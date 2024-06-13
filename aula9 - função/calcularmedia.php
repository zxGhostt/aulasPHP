<?php


    function calcularMedia($nota1, $nota2, $nota3){
        $media = (($nota1 + $nota2 + $nota3)/3);
        return $media;
    }

    function situacao($media){

        if($media >= 7){
            echo "A media é: {$media}. <br>\nSituação: Aluno esta aprovado";
        }else if($media >= 4 && $media < 7){
            echo "A media é: {$media}. <br>\nSitução: Aluno de recuperção";
        }else{
            echo "A media é: {$media}. <br>\nSitução: Aluno reprovado";
        }
           
        
    }
    ////////////////////////////////////////////////////////////////
    //debugar

    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];

    $media = calcularMedia($nota1, $nota2, $nota3);
    situacao($media);

?>