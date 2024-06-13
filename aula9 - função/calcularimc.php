<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <style>
        body{
           background-color: teal;
        }
        h1{
            color: black;
            text-align: center;
            font-size: 50px;
        }
        form{
            color: black;
            text-align: center;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <form action="funcao2.php" method="get">
    <h1>Calculo do IMC com função</h1>

    Digite seu peso: <input type="text" name="peso"><br>
    Digite sua altura: <input type="text" name="altura"><br>
    
    <input type="submit" value="Enviar Infos">

    </form>
</body>
</html>