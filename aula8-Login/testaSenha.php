<?php

    //login no sitema usando html e php juntos.
    //login.php
    //testaSenha.php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    while($senha != 123){
        header("location: login.php");
    }

    echo "bem vindo ao sistema seu fi da peste";

?>