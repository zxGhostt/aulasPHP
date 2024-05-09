<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        informe seu nome: <input type="text" name="nome" id="">
        informe sua idade: <input type="text" name="idade" id=""><br><br>
    
        <input type="submit" value="verificar">
    </form>
    
</body>
</html>
<?php 
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    if($idade >= 18){
        echo "<br><br>{$nome} é maior de idade";
    }else{
        echo "<br><br>{$nome} é menor de idade";
    }
?>