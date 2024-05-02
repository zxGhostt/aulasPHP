<?php
    //receber os dados do fomulario e guarda na memoria 
    
    $nome = $_GET["nome"];
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $soma = $numero1 + $numero2;


    echo "Olá {$nome}";
    echo "<br>Seus numeros escolhidos: {$numero1}";
    echo ", {$numero2}";

    echo "<br><br> O resultado da operção é ".$soma;
?>