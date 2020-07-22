<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/99fe9ee983.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script src="js/ajax.js"></script>

    <title>VER INVENTARIO</title>
</head>
<body>
    <div class="padre">
        <header class="header">
            <div class="menu">
                <div class="logo">
                    <img src="img/1.png" alt="">
                 </div>
                 <nav class="nav">
                    <a href="bienvenido.php">INICIO</a>
                    <a href="busqueda.php">AUTOGESTIÓN</a>
                    <a href="inventario.php">INVENTARIO</a>
                    <a href="cerrarSession.php">CERRAR SECCIÓN</a>
                </nav>
             </div>
        </header>

        <?php

            error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
         ?>

        <section class="section-tabla">
           <div class="titulo-tabla">
                <h2>INVENTARIO REGISTRADO</h2>
            <div class="tabla">
            <input type="text" id="buscar" placeholder="BUSQUEDA RAPIDA" >
              <table >
              <?php
                    include 'php/verInventario.php';
                  ?>
              </table>
                   <!--con este scrits de js se realiza un filtro busqueda en el html -->
                   <script>
                          document.querySelector("#buscar").onkeyup = function(){
                            $TableFilter("#tabla", this.value);
                             }
                             $TableFilter = function(id, value){
                                 var rows = document.querySelectorAll(id + ' tbody tr');

                                 for(var i = 0; i < rows.length; i++){
                                     var showRow = false;

                                     var row = rows[i];
                                     row.style.display = 'none';

                                     for(var x = 0; x < row.childElementCount; x++){
                                         if(row.children[x].textContent.toLowerCase().indexOf(value.toLowerCase().trim()) > -1){
                                             showRow = true;
                                             break;
                                         }
                                        }

                                         if(showRow){
                                             row.style.display = null;
                                           }
                                       }
                                   }
                      </script>
            </div>
          </div>
        </section>

    <footer class="footer">
        <nav class="pie">
            <h1>DATECSA Y BANCOLOMBIA</h1>
        </nav>
    </footer>
    <script type="text/javascript">
        function preguntar(id){
            if (confirm('¿Está Seguro que Desea Eliminar el Registro con id '  + id +'?')) {
                window.location.href = "php/borrarRegistro.php?id" + id;
            }
        }

    </script>
   </body>
</html>
