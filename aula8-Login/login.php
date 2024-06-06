<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <h1>Login do Sistema</h1>
    <form action="testaSenha.php" method="post">

        Login: <input type="text" name="login"><br><br>
       
        Senha: <input type="text" name="senha"><br><br>
       
        <input type="submit" value="Logar"><br>

    </form>
    
</body>
</html>