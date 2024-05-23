<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="recebeDadoS.php" method="get">
    
    <h1>Switch</h1>

    Digite seu nome: <input type="text" name="nome"><br><br>

    <h2>Estado Civil: </h2>
    <select name="estadoCivil">
        <option value="solteiro">Solteiro</option>
        <option value="casado">Casado</option>
        <option value="divorciado">Divorciado</option>
        <option value="viuvo">Viuvo</option>
        <option value="separado">Separado</option>
        <option value="outro">Outro</option>
    </select><br><br>


    Digite um numero de 1 a 7: <input type="text" name="numero1"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>