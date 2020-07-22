<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/99fe9ee983.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>


    <title>INVENTARIO</title>
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

      
        <section class="section">
           <div class="titulo">
                    <h2>INVENTARIO</h2>
                <div class="three-columns " id="tres">
                    <div class="form-auto">
                        <form action="#" class="inventario" id="inventario" method="POST">
                            <label for="">CODIGO</label>
                            <input type="text" name="codigo" id="codigo" value="">
                            <label for="">DESCRIPCIÓN</label>
                            <input type="text" name="descripcionArticulo" id="descripcionArticulo" value="">
                            <label for="">FECHA INGRESO</label>
                            <input type="date" name="fechaIngreso" id="fechaIngreso" value="">
                            <label for="">HORA INGRESO</label>
                            <input type="time" name="horaIngreso" id="horaIngreso" value="">
                            <label for="">TIPO ELEMENTO</label>
                            <select name="tipoElemento" >
                                <option><?php ?></option>
                                <option value="0"></option>
                                <option value="1">CABLE HDMI</option>
                                <option value="2">CABLE VGA</option>
                                <option value="3">UNION HDMI</option>
                                <option value="4">TELEVISOR</option>
                                <option value="5">MONITOR</option>
                                <option value="6">VIDEO PROYECTOR</option>
                            </select>
                            <label for="">MARCA</label>
                            <input type="text" name="marca" id="marca" value="">
                            <label for="">MODELO</label>
                            <input type="text" name="modelo" id="modelo" value="">
                            <label for="">SERIE</label>
                            <input type="text" name="serie" id="serie" value="">
                            <label for="">ESTADO</label>
                            <select name="estadoArticulo" >
                                <option></option>
                                <option>NUEVO</option>
                                <option>USADO</option>
                            </select>
                            <label for="">PROPIEDAD</label>
                            <select name="propiedad" >
                                <option></option>
                                <option>DATECSA</option>
                                <option>BANCOLOMBIA</option>
                                <option>BACKUP</option>
                            </select>
                            <label for="">TIPO DE CABLE</label>
                            <select name="tipoCable" >
                                <option><?php ?></option>
                                <option></option>
                                <option>H1.8</option>
                                <option>H3.0</option>
                                <option>H4.5</option>
                                <option>H5.0</option>
                                <option>H7.0</option>
                                <option>H7.5</option>
                                <option>H10.0</option>
                                <option>H10.5</option>
                                <option>H13.0</option>
                                <option>H13.5</option>
                                <option>H15.0</option>
                                <option>V1.8A</option>
                                <option>V3.0</option>
                                <option>V4.5</option>
                                <option>V4.5A</option>
                                <option>V7.0</option>
                                <option>V10.0</option>
                            </select>

                            <label for="">ENTRADAS</label>
                            <input type="number" name="entradas" id="entradas" value=""/>
                            <label for="">EXISTENCIAS</label>
                            <input type="number" name="existencias" id="existencias" readonly value="<?php ?>"/>

                            <label for="">OBSERVACIÓN</label>
                            <textarea rows="4" type="text" name="observacion" id="observacion" value=""></textarea>
                    </div>
                </div>

                <div class="botones">
                    <button type="submit" name="btnRegistrarInventario" id="btnRegistrarInventario" class="btnRegistrarInventario">Registrar</button>
                    <button type="button" class="inventario" id="inventario" onclick = "location='mostrarInventario.php'" >Ver Inventario</button>
                <div>
                </form>
            </div>

        </section>

    <footer class="footer">
        <nav class="pie">
            <h1>DATECSA Y BANCOLOMBIA</h1>
        </nav>
    </footer>
    <script>

    </script>
   </body>
</html>
