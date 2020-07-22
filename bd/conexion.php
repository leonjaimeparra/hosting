<?php

$servername = "localhost";
$database = "datecsa";
$username = "root";
$password = "";


$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "conectado a la bd". "</br>";


?>
