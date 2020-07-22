<?php
  session_start();
  $correo = $_SESSION['correo'];

  if ($correo == null || $correo = '') {
      echo "NO ESTAS AUTORIZADO PARA ACCEDER";
      die();
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/99fe9ee983.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>BIENVENIDO</title>
</head>

<body>
    <div class="padre">
        <header class="header">
            <div class="menu">
                <div class="logo">
                    <img src="img/1.png" alt="">
                 </div>
                 <nav class="nav">
                    <a href="busqueda.php">AUTOGESTIÓN</a>                
                    <a href="inventario.php">INVENTARIO</a>
                    <a href="cerrarSession.php">CERRAR SECCIÓN</a>                    
                </nav>
             </div>
        </header>  
        <div class="bienvenido">
            <h1>BIENVENIDO AL SISTEMA DE AUTOGESTIÓN</h1>
            <h4>Recuerde Verificar los Campos de Cables</h4>
            <h5><?php echo $_SESSION['correo'];?></h5>

            </div>

        <section class="section">
       
            <div class="articulos">
                <h2 >DIRECCIÓN GENERAL</h2>
                <img id="dg" src="img/dg.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam libero minima officia veniam maxime optio perferendis saepe voluptate alias velit dolorem qui possimus, fugiat, eum neque nemo. Impedit, porro.</p>
            </div>
            <div class="articulos">
                <h2>TORRE ORIENTE</h2>
                <img id="to" src="img/to.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam libero minima officia veniam maxime optio perferendis saepe voluptate alias velit dolorem qui possimus, fugiat, eum neque nemo. Impedit, porro.</p>
            </div>
            <div class="articulos">
                <h2>SEDE CENTRO</h2>
                <img id="sc" src="img/sc.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam libero minima officia veniam maxime optio perferendis saepe voluptate alias velit dolorem qui possimus, fugiat, eum neque nemo. Impedit, porro.</p>
            </div>

        </div>
        
        </section>
    <footer class="footer">
        <nav class="pie">
            <h1>DATECSA Y BANCOLOMBIA</h1>
        </nav>

    </footer>
</body>
</html>