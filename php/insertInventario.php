<?php

require_once "bd/conexion.php";

    //$prueba = "SELECT * FROM inventario ORDER BY id";
  $prueba =  "SELECT * FROM inventario";
  $result = mysqli_query($conexion, $prueba);






/*if (isset($_POST['btnRegistrarInventario'])) {



    $codigo = $_POST['codigo'];
    $descripcionArticulo = $_POST['descripcionArticulo'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $horaIngreso = $_POST['horaIngreso'];
    $tipoElemento = $_POST['tipoElemento'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $estadoArticulo = $_POST['estadoArticulo'];
    $propiedad = $_POST['propiedad'];
    $tipoCable = $_POST['tipoCable'];
    $entradas = $_POST['entradas'];
    $existencias = $_POST['existencias'];
    $observacion = $_POST['observacion'];


    $existencias = $existencias + $entradas;

    $insert = "INSERT INTO inventario (codigo,
                                        descripcionArticulo,
                                        fechaIngreso,
                                        horaIngreso,
                                        tipoElemento,
                                        marca,
                                        modelo,
                                        serie,
                                        estadoArticulo,
                                        propiedad,
                                        tipoCable,
                                        entradas,
                                        existencias,
                                        observacion)
                                        VALUES('$codigo',
                                                '$descripcionArticulo',
                                                '$fechaIngreso',
                                                '$horaIngreso',
                                                '$tipoElemento',
                                                '$marca',
                                                '$modelo',
                                                '$serie',
                                                '$estadoArticulo',
                                                '$propiedad',
                                                '$tipoCable',
                                                '$entradas',
                                                '$existencias',
                                                '$observacion')";

$query = mysqli_query($conexion, $insert);

if (!$query) {
    echo "no se registro";
}else {
    echo "se segistro";

    }

}*/

?>
