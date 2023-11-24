<?php
require 'conexion.php';
$query = "SELECT id_cliente, email_cte, nombres_cte, apellidos_cte, celular_cte FROM cliente ";
$resultado = $mysqli->query($query);

$consulta = "SELECT id_pedido, ciudad_cte, email_cte, nombres_cte, calle_cte, noapart_cte, cant_pedido, total_pedido, producto_talla_pto, descripcion_pto FROM cliente, pedido, direccion, pedido_has_producto, producto Where (cliente.id_cliente = direccion.id_cliente) AND (cliente.id_cliente = pedido.pedido_id_cliente) AND (pedido.id_pedido = pedido_has_producto.pedido_id_pedido) AND (producto.id_producto = pedido_has_producto.producto_id_producto) AND (pedido_has_producto.producto_talla_pto = producto.talla_pto)";
$res = $mysqli->query($consulta);

$consulta2 = "SELECT * FROM producto order by existencia_pto ";
$resConsulta2 = $mysqli->query($consulta2);
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <link rel="stylesheet" href="style_tablas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="">
        <a class="logout" href="login.php">Cerrar Sesion</a>
        <div class="titulo">
            <h1 class="text-center text-white">Informacion del cliente</h1>
        </div>
        <div class="table-container">
            <table class="table table-dark table-striped ">
                <thead>
                    <tr class="text-center">
                        <td>ID Cliente:</td>
                        <td>Email Cliente:</td>
                        <td>Nombres Cliente</td>
                        <td>Apellidos Cliente</td>
                        <td>Celular Cliente:</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultado->fetch_assoc()) {?>
                    <tr>
                        <td width="140" align="center">
                            <?php echo $row['id_cliente']; ?></td>
                        <td><?php echo $row['email_cte']; ?></td>
                        <td><?php echo $row['nombres_cte']; ?></td>
                        <td><?php echo $row['apellidos_cte']; ?></td>
                        <td><?php echo $row['celular_cte']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <hr class="rounded">
        <h1 class="text-center text-white">Informacion pedidos</h1>
        <div class="table-container">
            <table class="table table-dark table-striped ">
                <thead>
                    <tr class="text-center">
                        <td>ID Pedido:</td>
                        <td>Ciudad Cliente:</td>
                        <td>Email Cliente</td>
                        <td>Nombres Cliente</td>
                        <td>Calle Cliente:</td>
                        <td>No apartamento:</td>
                        <td>Cantidad Pedido:</td>
                        <td>Total Pedido</td>
                        <td>Talla Pedido</td>
                        <td>Descripcion Producto:</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $res->fetch_assoc()) {?>
                    <tr>
                        <td width="140" align="center">
                            <?php echo $row['id_pedido']; ?></td>
                        <td><?php echo $row['ciudad_cte']; ?></td>
                        <td><?php echo $row['email_cte']; ?></td>
                        <td><?php echo $row['nombres_cte']; ?></td>
                        <td><?php echo $row['calle_cte']; ?></td>
                        <td><?php echo $row['noapart_cte']; ?></td>
                        <td><?php echo $row['cant_pedido']; ?></td>
                        <td><?php echo $row['total_pedido']; ?></td>
                        <td><?php echo $row['producto_talla_pto']; ?></td>
                        <td><?php echo $row['descripcion_pto']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <hr class="rounded">
        <h1 class="text-center text-white">Productos</h1>
        <div class="table-container">
            <table class="table table-dark table-striped ">
                <thead>
                    <tr class="text-center">
                        <td>ID Producto:</td>
                        <td>Descripcion Producto:</td>
                        <td>Talla Producto</td>
                        <td>Precio Producto</td>
                        <td>Existencias:</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resConsulta2->fetch_assoc()) {?>
                    <tr>
                        <td width="140" align="center">
                            <?php echo $row['id_producto']; ?></td>
                        <td><?php echo $row['descripcion_pto']; ?></td>
                        <td><?php echo $row['talla_pto']; ?></td>
                        <td><?php echo $row['preciounit_pto']; ?></td>
                        <td><?php echo $row['existencia_pto']; ?></td>

                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>