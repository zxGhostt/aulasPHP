<?php
//Declaração de variaveis = $$$$
    echo "Aula 2 Tmj ";
    print("\nImprimindo com prinf\n");
    $valor1 = 7500;
    $valor2 = 10;
    $nome = "Guilherme";
    $numero = null;
    $numeros = array(1,2,"3", "texto");
    $teste = true;
    $tes = false;

    //impressão com interpolação
    echo "\nValor 1 é: {$valor1}. ";
    echo "\nValor 2 é: {$valor2}. ";
    echo "\nSeu nome é: {$nome}. \n";
    
    //impressão com conotação
    echo "\nNumero: \n\n".$numero;
    
    //impressão com var_dump()
    var_dump ($nome);

    //impressão com print_r
    print_r($nome);

    //estrutura de dados de forma sequencial = Vetores
    var_dump ($numeros);
    print_r ($numeros);

    //impressaão com boolean
    var_dump($teste);

    var_dump($tes);

?>