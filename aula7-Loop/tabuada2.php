<?php

$number = 5;
$contador = 0;
$res;

//repetição com teste no final
do{
    $res = $number * $contador;
    echo "\n{$number} x {$contador} = {$res}";
    $contador++;

}while($contador <= 10);

?>