<?php 

include_once ('../bd/conexion.php');


header('location: ../registros.php');

//Captura de la variable deseada en el navegador ej ID=33
$id = isset($_GET['id']) ? $_GET['id'] : 0; //Recibe el parametro id por la url desde el verRegistro
//consulta a bd
$sql = "SELECT * FROM autogestion";
$consulta = mysqli_query($conexion, $sql);
borrar($id);
die();
//funcion para eliminar dato en l a bd
function borrar($id){
    global $conexion;
    $sql = "UPDATE autogestion SET estado = 0 WHERE id = {$id}";
    $conexion->query($sql);
    }
   
?>