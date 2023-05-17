<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acceso a usuario</h1>
    <a href="registro.php">registrarse</a>
    <br><br>
    <form action = "registro.php" method = "POST" >
        <label for="nombreUsuario">Usuario</label>
        <input type = "text" name = "nombreUsuario"><br>

        <label for="contraUsuario">Contraseña</label>
        <input type = "password" name = "contraUsuario"><br>

        <input type="submit" value ="Ingresar">
    </form>
</body>
</html>