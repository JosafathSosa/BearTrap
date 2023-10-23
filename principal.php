<?php
require 'conexion.php';
$query = "SELECT ID_Cliente, Email_cte, Nombres_cte, Apellidos_cte, Celular_cte FROM Cliente ";
$resultado = $mysqli->query($query);

$consulta = "SELECT ID_Pedido, Ciudad_cte, Email_cte ,Nombres_cte, Calle_cte, NoApart_cte, Cant_pedido, Total_pedido, ID_Talla_ProductoPedido, Descripcion_pto FROM Cliente, Pedido, Direccion, ProductoPedido, Producto Where (ID_Cliente = ID_cte) AND (ID_Cliente = Pedido_ID_cte) AND ID_Pedido = (ID_Pedido_ProductoPedido) AND (ID_Producto = ID_Producto_ProductoPedido) AND (ID_Talla_ProductoPedido = Talla_pto)";
$res = $mysqli->query($consulta);

$consulta2 = "SELECT * FROM Producto order by Existencia_pto ";
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
                            <?php echo $row['ID_Cliente']; ?></td>
                        <td><?php echo $row['Email_cte']; ?></td>
                        <td><?php echo $row['Nombres_cte']; ?></td>
                        <td><?php echo $row['Apellidos_cte']; ?></td>
                        <td><?php echo $row['Celular_cte']; ?></td>
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
                            <?php echo $row['ID_Pedido']; ?></td>
                        <td><?php echo $row['Ciudad_cte']; ?></td>
                        <td><?php echo $row['Email_cte']; ?></td>
                        <td><?php echo $row['Nombres_cte']; ?></td>
                        <td><?php echo $row['Calle_cte']; ?></td>
                        <td><?php echo $row['NoApart_cte']; ?></td>
                        <td><?php echo $row['Cant_pedido']; ?></td>
                        <td><?php echo $row['Total_pedido']; ?></td>
                        <td><?php echo $row['ID_Talla_ProductoPedido']; ?></td>
                        <td><?php echo $row['Descripcion_pto']; ?></td>
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
                            <?php echo $row['ID_Producto']; ?></td>
                        <td><?php echo $row['Descripcion_pto']; ?></td>
                        <td><?php echo $row['Talla_pto']; ?></td>
                        <td><?php echo $row['PrecioUnit_ptp']; ?></td>
                        <td><?php echo $row['Existencia_pto']; ?></td>

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