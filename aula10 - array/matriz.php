<?php

    //matriz ou array associativo
    $dados = array(
        array("Nome" => "Guilherme", "Idade" => 10),
        array("Nome" => "Ana", "Idade" => 70),
        array("Nome" => "joão", "Idade" => 30),
        array("Nome" => "Gabi", "Idade" => 50),
    );


foreach($dados as $d){
    echo "\nNome: ".$d['Nome']. "Idade: ".$d['Idade'];
}
?>