<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilo_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <form action="login_registrar.php" method="POST">
        <h2>Iniciar sesión</h2>
        <input type="text" class="form-control mt-3" placeholder="&#128273; Usuario" name="usuario" required>
        <input type="password" class="form-control mt-3" placeholder="&#128274; Contraseña" name="pass" required>
        <input type="submit" class="mt-4" value="Ingresar" name="btningresar">
        <br>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>