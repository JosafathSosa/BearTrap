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

$consulta1 = "INSERT INTO cliente (email_cte, nombres_cte, apellidos_cte, celular_cte) VALUES ('$email', '$nombres', '$apellidos', '$telefono')";
$result = $mysqli->query($consulta1);

if ($result) {
    $cte_id = $mysqli->insert_id;

    $consulta2 = "INSERT INTO direccion (calle_cte, noapart_cte, cp_cte, ciudad_cte, mcipio_cte, id_cliente) VALUES ('$calle', '$apartamento', '$postal', '$ciudad', '$municipio', '$cte_id')";

    $result = $mysqli->query($consulta2);

    //Checar porque falla la cantidad a guardar
    if ($result) {
        $consulta3 = "INSERT INTO bear.pedido (cant_pedido, total_pedido, pedido_id_cliente) VALUES ('$cantidad', '$precio', '$cte_id')";

        $result = $mysqli->query($consulta3);

        $pedido_id = $mysqli->insert_id;

        if ($result) {
            $consulta4 = "UPDATE bear.producto SET existencia_pto = (existencia_pto - '$cantidad') WHERE id_producto = '$idProd' AND talla_pto = '$talla' ";

            $result = $mysqli->query($consulta4);

            if ($result) {
                $consulta5 = "INSERT INTO bear.pedido_has_producto (producto_id_producto, pedido_id_pedido, producto_talla_pto) VALUES ('$idProd', '$pedido_id', '$talla')";

                $result = $mysqli->query($consulta5);
                include "index.php";
            }
        }
    }
}
