<html>

<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="estilo_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="principal">
        <h1>BearTrap Clothes</h1>
        <form action="login_registrar.php" method="POST">
            <div class="login-container">
                <h2>Crear una cuenta</h2>
                <input type="text" class="form-control mt-3" placeholder="&#128273; Usuario" name="usuario" required>
                <input type="password" class="form-control mt-3" placeholder="&#128274; Contraseña" name="pass"
                    required>
                <input type="submit" class="mt-4" value="Registrar" name="btnregistrar">
                <br>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>