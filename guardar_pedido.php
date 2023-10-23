<?php

require 'conexion.php';
//Estos valores van a la tabla cliente
$email = $mysqli->real_escape_string($_POST['email']);
$nombres = $mysqli->real_escape_string($_POST['nombres']);
$apellidos = $mysqli->real_escape_string($_POST['apellidos']);
$telefono = $mysqli->real_escape_string($_POST['telefono']);
//Estos valores van a al tabla direccion
$calle = $mysqli->real_escape_string($_POST['calle']);
$apartamento = $mysqli->real_escape_string($_POST['apartamento']);
$postal = $mysqli->real_escape_string($_POST['postal']);
$ciudad = $mysqli->real_escape_string($_POST['ciudad']);
$municipio = $mysqli->real_escape_string($_POST['municipio']);
//Valores que se van a la tabla pedido
$precio = $mysqli->real_escape_string($_POST['precio']);
$cantidad = $mysqli->real_escape_string($_POST['cantidad']);

$idProd = $mysqli->real_escape_string($_POST['idProd']);
$talla = $mysqli->real_escape_string($_POST['talla']);

$consulta1 = "INSERT INTO Cliente (Email_cte, Nombres_cte, Apellidos_cte, Celular_Cte) VALUES ('$email', '$nombres', '$apellidos', '$telefono')";
$result = $mysqli->query($consulta1);

if ($result) {
    $cte_id = $mysqli->insert_id;

    $consulta2 = "INSERT INTO Direccion (Calle_cte, NoApart_cte, CP_cte, Ciudad_cte, Mcipio_cte, ID_cte) VALUES ('$calle', '$apartamento', '$postal', '$ciudad', '$municipio', '$cte_id')";

    $result = $mysqli->query($consulta2);

    //Checar porque falla la cantidad a guardar
    /*if ($result) {
        $consulta3 = "INSERT INTO BearDB.Pedido (Cant_pedido, Total_pedido, Pedido_ID_cte) VALUES ('$cantidad', '$precio', '$cte_id')";

        $result = $mysqli->query($consulta3);

        $pedido_id = $mysqli->insert_id;

        if ($result) {
            $consulta4 = "UPDATE BearDB.Producto SET Existencia_pto = (Existencia_pto - '$cantidad') WHERE ID_Producto = '$idProd' AND Talla_pto = '$talla' ";

            $result = $mysqli->query($consulta4);

            if ($result) {
                $consulta5 = "INSERT INTO BearDB.ProductoPedido (ID_Producto_ProductoPedido, ID_Pedido_ProductoPedido, ID_Talla_ProductoPedido) VALUES ('$idProd', '$pedido_id', '$talla')";

                $result = $mysqli->query($consulta5);
                include("index.php");
            }
        }
    }*/
}