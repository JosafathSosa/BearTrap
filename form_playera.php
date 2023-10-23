<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$talla = $_POST['talla'];
$imagen = $_POST['imagen'];
$ID_Producto = $_POST['idProd'];

echo $precio;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Form</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php">BearTrap</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
                        <li class="nav-item text-white">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item text-white" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-white" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item text-white" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-white">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-light" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="contenedor-forma">
            <div class="informacion-pedido">

                <div class="talla d-flex">
                    <img class="img-form" src="<?php echo $imagen ?>" alt="">
                    <h5><?php echo $talla ?></h5>
                </div>
                <div class="cant">
                    <h4 class="">Cantidad:</h4>
                    <h3><?php echo $cantidad ?></h3>
                </div>
                <div class="datos m-0">
                    <div class="car-container d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <h4>Total:</h4>
                    </div>
                    <div class=" ">
                        <h3 id="precio-total"><?php echo $precio; ?></h3>
                    </div>
                </div>
            </div>
            <div class="forma">
                <h4>Informacion de contacto</h4>
                <form id="registro" method="POST" action="guardar_pedido.php" autocomplete="off" class="row g-2">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <h4>Informacion de envio</h4>
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="nombres" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="calle" class="form-label">Calle</label>
                        <input type="text" class="form-control" name="calle" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="apartamento" class="form-label">No Apartamento</label>
                        <input type="text" class="form-control" name="apartamento" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="postal" class="form-label">Codigo Postal</label>
                        <input type="text" class="form-control" name="postal" required>
                    </div>
                    <div class="mb-3">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select class="form-select" name="ciudad" required>
                            <option selected>Selecciona tu ciudad</option>
                            <option>Aguascalientes</option>
                            <option>Ciudad de Mexico</option>
                            <option>Guadalajara</option>
                            <option>Monterrey</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="municipio" class="form-label">Municipio</label>
                        <input type="text" class="form-control" name="municipio" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="" required>
                    </div>
                    <input type="hidden" name="precio" id="precio" value="<?php echo $precio ?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo $cantidad ?>">
                    <input type="hidden" name="talla" id="talla" value="<?php echo $talla ?>">
                    <input type="hidden" name="idProd" id="idProd" value="<?php echo $ID_Producto ?>">
                    <div class="btn-form-container">
                        <center>
                            <button type="submit" class="btn-form" name="btnpedido">Realizar Pedido</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="contenedorfinal">
            <div class="informacion">
                <div class="final">
                    <h3>STORE INFORMATION</h3>
                    <div class="linea"></div>
                    <div class="logo">
                        <img src="IMAGENES/trap-removebg-preview.png" alt="" />
                    </div>
                </div>
                <div class="sociales">
                    <h5>SOCIAL MEDIA</h5>
                    <div class="linea"></div>
                    <p>Facebook</p>
                    <p>Instagram</p>
                </div>
                <div class="ayuda">
                    <h5>HELP & INFORMATION</h5>
                    <div class="linea"></div>
                    <p>Delivery Delays Due to Covid-19</p>
                    <p>About Us</p>
                    <p>Size guide</p>
                </div>
            </div>
            <div class="credits">
                <p>2022 Bear Trap Clothes. All rights reserved. Code by Josafath</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>

    <script src="https://kit.fontawesome.com/5654adcfa3.js" crossorigin="anonymous"></script>

</body>

</html>