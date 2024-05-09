<?php 

    #Exercicio 01
    $nome = $_GET["nome"];
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $soma = $numero1 + $numero2;
    $divisao = $numero1 / $numero2;
    $multi = $numero1 * $numero2;
    $subtracao = $numero1 - $numero2;

    echo "Questão 01";
    echo "<br> A soma é: {$soma}";
    echo "<br> A subtracao é: {$subtracao}";
    echo "<br> A multiplicacao é: {$multi}";
    echo "<br> A divisao é: {$divisao}";

    #Exercicio 02
    $numeroD = $_GET["numeroD"];

    $soma2 = $numeroD + $numeroD;

    echo "<br><br><br>Questão 02 - o dobro de seu numero escolhido é: {$soma2}";

    #Exercicio 03
    $base = $_GET["base"];
    $altura = $_GET["altura"];

    $multiplicacao = $base * $altura;

    echo "<br><br><br>Questão 03 - area da sala é de: {$multiplicacao}";

    #Exercicio 04
    $reais = $_GET["reais"];
    $dolar = $_GET["dolar"];

    $divi = $reais / $dolar;
    echo "<br><br><br>Questão 04 - seu numero colocado em dolar é: {$divi}";

    #Exercicio 05
    $merca = $_GET["merca"];
    $frete = $_GET["frete"];
    $eventuais = $_GET["eventuais"];
    $produto1 = $_GET["produto1"];

    $produto = $merca + $frete + $eventuais;
    $percentual = $produto - $produto1;
    $desconto = ($percentual / $produto) * 100;

    echo "<br><br><br>Questão 05 - o valor do produto R$ {$merca} junto do frete de R$ {$frete} e as despesas eventuais R$ {$eventuais} é R$ {$produto}";    
    echo "<br> A porcentagem de luro na compra foi de {$desconto}% referente ao valor da venda informada R$ {$produto1}";

    #Exercicio 06
    $raio = $_GET["raio"];

    $raio1 = $raio * 3.14;
    $circulo =pow($raio1,2);

    echo "<br><br><br> Questão 06 - a area do raio da cicunferencia informado é {$circulo}";
   
    #Exercicio 08
    $salario = $_GET["salario"];
    $reajuste = $_GET["reajuste"];

    $Totalrea = ($salario * $reajuste) / 100;
    $totalsal = $salario + $Totalrea;

    echo "<br><br><br> Questão 08 - o valor do salario novo fica de R$ {$totalsal}";

    #Exercicio 09
    $numero9 = $_GET["numero9"];

    $totalCarro = $numero9 * 0.28 * 0.45;
    $totalPago = $numero9 + $totalCarro;

    echo "<br><br> Questão 09 - o valor o carro informado foi de R$ {$numero9} acrescido dos percentuais de 28% do administrador e 45% dos impostos e resultou no valor total deo carro de R$ {$totalPago}";
?>