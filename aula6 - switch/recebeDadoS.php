<?php
    //switch case
    $numero1 = $_GET["numero1"];
    $nome = $_GET["nome"];
    $estado = $_GET["estadoCivil"];

    echo "<br><br>
    Olá {$nome}";

    echo "<br><br>
    O estado civil de {$nome} é: {$estado}";

    switch($numero1){
        case 1:
            echo "<br><br>
            numero correpondente ao dia da semana: Domingo";
            break;
        case 2:
            echo "<br><br>
            numero correpondente ao dia da semana: segunda-feira ";
            break;
        case 3:
            echo "<br><br>
            numero correpondente ao dia da semana: terça-feira ";
            break;
        case 4:
            echo "<br><br>
            numero correpondente ao dia da semana: quarta-feira ";
            break;
        case 5:
            echo "<br><br>
            numero correpondente ao dia da semana: quinta-feira ";
            break;
        case 6:
            echo "<br><br>
            numero correpondente ao dia da semana: sexta-feira ";
            break;
        case 7:
            echo "<br><br>
            numero correpondente ao dia da semana: sabado ";
            break;
        default:
            echo "<br><br>
            este numero não corresponde a nada do progama.";
        }
?>