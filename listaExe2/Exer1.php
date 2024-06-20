<?php

    function tri($x,$y,$z){
    
    if(($x + $y > $z) && ($x + $z > $y) && ($y + $z > $x)){
        if($x == $y && $y == $z){
            echo "Equilatero";
        }else if($x == $y || $x == $z || $y == $z){
            echo "Isóceles";
        }else{
            echo "Escaleno";
        }
    }else{
        echo "não é um trianguo";
    }
}
    $x = 10;
    $y = 20;
    $z = 30;
   
    tri($x,$y,$z);
?>