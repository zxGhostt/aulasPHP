<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
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
    <form action="calcularmedia.php" method="get">
    <h1>Media do estudante</h1>

    informe a primeira nota: <input type="text" name="nota1"><br>

    informe a segunda nota: <input type="text" name="nota2"><br>

    informe a terceira nota: <input type="text" name="nota3"><br>

    <input type="submit" value="Enviar notas">
    </form>
    
</body>
</html>