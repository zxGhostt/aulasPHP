<?php

    #Exercicio 01
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];

    $mp = ($numero1 * 1)+($numero2 * 1)+($numero3 * 2);

    $divi = $mp / 4;

    if($divi < 7){
        echo "<br><br>Reprovou com a nota de: {$divi}";
    }else if ($divi >= 7)
        echo "<br><br>Passou com a nota: {$divi} ";
    
    
    #Exercicio 02
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $tempo = $_GET["tempo"];

    if($idade >= 65){
        echo "<br><br>{$nome} pode se aposentar.";
    }else if ($tempo >= 30){
        echo "<br><br>{$nome} pode se aposentar.";
    }else if ($idade >= 60 && $tempo >= 25){
        echo "<br><br>{$nome} pode se aposentar.";
    }else{
        echo "<br><br>{$nome} não pode se aposentar.";
    }

    #exercicio 03
    $salario = $_GET["salario"];
    $tempo1 = $_GET["tempo1"];

    $total = $salario * 0.25;
    $totalSal = $salario + $total;

    $total1 = $salario * 0.20;
    $totalSal1 = $salario + $total1;

    $total2 = $salario * 0.15;
    $totalSal2 = $salario + $total2;

    $total3 = $salario * 0.10;
    $totalSal3 = $salario + $total3;

    if($salario <= 500 && $tempo1 <= 1){
       
        echo "<br><br> Voçe recebera o reajuste de 25% que comrresponde ao de total de {$total}, o salario reajustado fica de R$ {$totalSal}, mas nao recebera bonus.";

    }else if ($salario <= 1000 && $tempo1 <= 3){
       
        echo "<br><br> Voçe recebera o reajuste de 20% que comrresponde ao de total de {$total1}, o salario reajustado fica de R$ {$totalSal1}, recebera bonus de R$100 conto.";

    }else if (($salario <= 1500 && $tempo1 >= 4 ) || $tempo1 <= 6){
       
        echo "<br><br> Voçe recebera o reajuste de 15% que comrresponde ao de total de {$total2}, o salario reajustado fica de R$ {$totalSal2}, recebera bonus de R$200 conto.";

    }else if (($salario <= 2000 && $tempo1 >= 7 ) || $tempo1 <= 10){
       
        echo "<br><br> Voçe recebera o reajuste de 10% que comrresponde ao de total de {$total3}, o salario reajustado fica de R$ {$totalSal3}, recebera bonus de R$300 conto.";
    
    }else if ($salario > 2000 && $tempo1 > 10 ){
       
        echo "<br><br> Voçe não recebera o reajuste, mas recebera bonus de R$500 conto.";
        
    }else{
        echo "<br><br> não tera reajuste e nem bonus.";
    }

    #Exercicio 04
    $a = 1;
    $b = 12;
    $c = -13;

    if ($a == 0){
        echo "não é equação de segundo grau.";
    }else{
        $delta=(($b**2)- (4*$a*$c));
        if($delta < 0){
            echo "<br><br><br><br> não existe raiz.";
        }else if($delta == 0){
            $x1= (-($b)+ (sqrt($delta)))/(2*$a);
            echo "<br><br><br><br> raiz única: {$x1}";
        }else{
            $x1= (-($b)+ (sqrt($delta)))/(2*$a);
            $x2= (-($b)- (sqrt($delta)))/(2*$a);
            echo "<br><br><br><br> há duas raizes reais: \n";
            echo "{$x1}\n";
            echo "{$x2}";
        }
        
    }

?>