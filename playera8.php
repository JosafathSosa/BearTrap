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
    <title>Document</title>
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

    <div class="containerplayera">
        <div class="playera">
            <img class="8" id="Sueterhombre" src="IMAGENES/playera8.png" alt="Sueter hombre" />
            <div class="venta">
                <div class="informacion">
                    <h3>BLACKBEAR IN LOVING MEMORY TOXIC ENERGY</h3>
                    <p>Buy 2 products or more and you will save on shipping.</p>
                    <p>
                        Buy 2 products discount 5%, Buy 3 products discount 10%, Buy 5+
                        products discount 15%
                    </p>
                </div>
                <div class="size">
                    <h5 class="sizes">Size</h5>
                    <label for="sizes" class="size-label"></label>
                </div>
                <div class="sizes">
                    <label for="sizes" class="XS">XS</label>
                    <label for="sizes" class="S">S</label>
                    <label for="sizes" class="M">M</label>
                    <label for="sizes" class="L">L</label>
                </div>
                <div for="div-precio" class="precio">$ 500</div>
                <div class="acciones d-flex">
                    <div class="cant-playeras">
                        <input type="button" value="-" class="minus button is-form" />
                        <input type="number" value="1" min="1" max="10" class="equal button is-form"
                            inputmode="numeric" />
                        <input type="button" value="+" class="plus button is-form" />
                    </div>
                    <div class="btn">
                        <form action="form_playera.php" method="POST" id="metodo-post">
                            <input type="hidden" id="precio" name="precio">
                            <input type="hidden" id="cantidad" name="cantidad">
                            <input type="hidden" id="talla" name="talla">
                            <input type="hidden" id="imagen" name="imagen">
                            <input type="hidden" id="idProd" name="idProd">
                            <div class="buy-btn" id="btn-comprar">Buy it now</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="borde"></div>
        <div class="info-cliente">
            <h3>BLACKBEAR IN LOVING MEMORY TOXIC ENERGY</h3>
            <p>
                BlackBear Official Store is an exclusive store for the world’s best
                apparel for Men, Women, Kids. BlackBear Store makes sure to offer
                customers high-quality trendy apparel yet budget-friendly products as
                well as excellent customer service you can’t find anywhere else.
            </p>
            <h5>How to order</h5>
            <ol>
                <li>Click "Buy Button"</li>
                <li>Select Style and Color</li>
                <li>Select Size and Quantity</li>
                <li>Click “ADD TO CART”</li>
                <li>Enter shipping and billing information</li>
            </ol>
            <p>
                This is a quality 100% cotton t-shirt with a screen-printed design.
                Machine wash cold with like colors, dry low heat Perfect to wear at
                home or out on the town. Lightweight, Classic fit, Double-needle
                sleeve, and bottom hem. Perfect For Gifts, Or To Purchase For
                Yourself.
            </p>
        </div>
    </div>

    <div class="container">
        <h2 class="text-white">Podria interesarte</h2>
        <div class="contenedorplayeras2">
            <div class="playeras playera1">
                <a href="playera1.php"><img src="IMAGENES/prox1.png" alt="" /></a>
                <h5>Hoddie Hombre</h5>
                <p>$1999</p>
            </div>
            <div class="playeras playera1">
                <a href=""><img src="IMAGENES/prox2.png" alt="" /></a>
                <h5>Hoddie Hombre</h5>
                <p>$1999</p>
            </div>
            <div class="playeras playera3">
                <a href=""><img src="IMAGENES/prox3.png" alt="" /></a>
                <h5>Hoddie Hombre</h5>
                <p>$1999</p>
            </div>

        </div>
    </div>

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

</body>

</html>