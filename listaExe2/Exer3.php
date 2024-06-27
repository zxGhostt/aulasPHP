<?php

    #dados das pessoas

    $dados = [
        ['salario' => 350, 'filhos' => 2],
        ['salario' => 100, 'filhos' => 3],
        ['salario' => 200, 'filhos' => 1],
        ['salario' => 110, 'filhos' => 4],
        ['salario' => 320, 'filhos' => 2],
    ];
    //função 

    function estatistica($dados){
        $somaSal = 0;
        $somaF = 0;
        $totalP = count($dados);
        $maiorSal = 0;
        $salarioAte350 = 0;

        foreach($dados as $p){
            $salario = $p['salario'];
            $filhos = $p['filhos'];

            $somaSal += $salario;
            $somaF += $filhos;
            
            if($salario > $maiorSal){
                $maiorSal = $salario;
            }
            if($salario <= 350){
                $salarioAte350++;
            }
        }
        $mediaSal = $somaSal / $totalP;
        $mediaF = $somaF / $totalP;
        $porcentagemSal350 = ($salarioAte350 / $totalP) * 100;
    
    
        echo "Media do salario da população: ".number_format($mediaSal,2)."\n";
        echo "Media dos filhos da população: ".number_format($mediaF)."\n";
        echo "Maior salario: ".number_format($maiorSal,2)."\n";
        echo "Porcentagem de pessoas com pessoas de salario ate R$350,00: ".number_format($porcentagemSal350)."%";
    }     
    
    #chamar a função
    estatistica($dados)

?>