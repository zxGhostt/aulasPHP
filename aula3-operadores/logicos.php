<?php

    //logicos e (&&), ou (||) não (!)

    $res1 = (10 > 5) && (10 == 20);
    $res2 = (10 > 5) && (!(10 == 20));
    $res3 = (10 > 5) || (10 == 20);


    var_dump($res1);
    var_dump($res2);
    var_dump($res3);
    
?>