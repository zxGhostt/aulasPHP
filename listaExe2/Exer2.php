<?php

    function orde($x, $y, $z){
        if($x < $y && $x < $z){
            echo "\n ".$x;
            if($y < $z){
                echo "\n ".$y."\n ".$z;
            }else{
                echo "\n ".$z."\n ".$y;
            }
        }else if($y < $x && $y < $z){
            echo "\n ".$y;
            if($x < $z){
                echo "\n ".$x."\n ".$z;
            }else{
                echo "\n ".$z."\n ".$x;
            }
        }else{
            echo "\n ".$z;
            if($x < $y){
                echo "\n ".$x."\n ".$y;
            }else{
                echo "\n ".$y."\n ".$x;
            }
        }
    }


    orde(5000, 20, 30);
?>