<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/99fe9ee983.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>AUTOGESTIÓN</title>
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
            require_once "php/buscar.php";
            error_reporting(E_ERROR | E_WARNING | E_PARSE  );    
         ?> 

        <section class="section">
           <div class="titulo">
                    <h2>FORMULARIO DE AUTOGESTIÓN</h2>                 
                <div class="three-columns">                  
                    <div class="form-auto">                         
                        <form action="busqueda.php" class="form" id="miForm" method="POST">
                            <label for="">codigo</label>
                            <input type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>">
                            <label for="">Descripcion Codigo</label>
                            <input type="text" name="descripcionCodigo" id="descripcionCodigo" value="<?php echo $descripcionCodigo; ?>">
                            <label for="">orden de servicio</label>
                            <input type="text" name="ordenServicio" id="ordenServicio" value="<?php echo $ordenServicio; ?>">
                            <label for="">tipo de sala</label>
                            <select name="tipoSala" >
                                <option><?php echo $tipoSala; ?></option>
                                <option >GRANDE</option>
                                <option>PEQUEÑA</option>
                                <option>VP</option>
                                <option>OFICINA TIPO VP</option>
                                <option>PUNTO FIJO PARED</option>
                                <option>PUNTO FIJO ASCENSORES</option>
                                <option>ITINERANTE ORIENTE</option>
                                <option>ITINERANTE OCCIDENTE</option>
                            </select>                            
                            <label for="">tipo de Servicio</label>
                            <select name="tipoServicio" >
                                <option><?php echo $tipoServicio; ?></option>
                                <option>AUTOGESTIÓN</option>
                                <option>INCIDENTE</option>
                                <option>MANTENIMIENTO</option>                               
                            </select>  
                            <label for="">Fecha y Hora inicial</label>
                            <input type="datetime-local" name="fechaHoraInicial" id="fechaHoraInicial" value="<?php echo $fechaHoraInicial; ?>">                            
                            <label for="">Fecha y Hora Atencion</label>
                            <input type="datetime-local"  name="fechaHoraAtencion" id="fechaHoraAtencion" value="<?php echo $fechaHoraAtencion; ?>">                            
                            <label for="">Fecha y hora Salucion</label>
                            <input type="datetime-local" name="fechaHoraSolucion" id="fechaHoraSolucion" value="<?php echo $fechaHoraSolucion; ?>">                            
                            <label for="">Tiempo de Contacto</label>
                            <input type="text" name="tiempoContacto" id="tiempoContacto" readonly value="<?php echo $diferenciaContacto; ?>"/>
                            <label for="">Tiempo Solucion</label>
                            <input type="text" name="tiempoSolucion" id="tiempoSolucion" readonly value="<?php echo $diferenciaSolucion ; ?>">
                            <label for="">Tiempo Final</label>
                            <input type="text" name="tiempoFinal" id="tiempoFinal" readonly value="<?php echo $diferenciaFinal; ?>"/>
                            <label for="">Estado Cable VGA</label>
                            <select name="estadoCableVga">
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Requiere Cable VGA</label>
                            <select name="requiereCambioVga">
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Tipo Cable VGA</label>
                            <select name="tipoCableVga" >
                                <option></option>
                                <option>V1.8A</option>
                                <option>V3.0</option>
                                <option>V4.5</option>
                                <option>V4.5A</option>
                                <option>V7.0</option>
                                <option>V10.0</option> 
                            </select>
                            
                            <label for="">Estado Cable HDMI</label>
                            <select name="estadoCableHdmi" >
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Requiere Cable HDMI</label>
                            <select name="requiereCambioHdmi">
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Tipo Cable HDMI</label>
                            <select name="tipoCableHdmi" >
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
                            </select>
                            <label for="">Observacion</label>
                            <textarea rows="4" type="text" name="observacion" id="observacion" value="<?php echo $observacion; ?>"></textarea>
                           
                            <label for="">Estado del Servicio</label>
                            <select name="estadoServicio">
                                <option></option>
                                <option>REVISADO</option>
                                <option>PENDIENTE</option>
                                <option>SOLUCIONADO</option>
                                <option>SUSPENDIDO</option>                              
                            </select>
                            <label for="">Ciudad</label>
                            <select name="ciudad" >
                                <option><?php echo $ciudad; ?></option>
                                <option></option>
                                <option>MEDELLIN</option>
                                <option>BOGOTA</option>
                                <option>CALI</option>
                                <option>ARMENIA</option>    
                                <option>PEREIRA</option>
                                <option>BARRANQUILLA</option>
                                <option>VILLAVICENCIO</option>
                                <option>BUCARAMANGA</option>
                                <option>CARTAGENA</option>
                                <option>CUCUTA</option>
                                <option>IBAGUE</option>                                
                                <option>MONTERIA</option>
                                <option>NEIVA</option>
                                <option>SANTA MARTA</option>
                                <option>TUNJA</option>    
                                <option>RIONEGRO</option>
                                <option>MANIZALES</option>
                                <option>CARTAGENA</option>
                                <option>PASTO</option>
                                <option>PEREIRA</option>
                                <option>BELLO</option>                                
                            </select>
                            <label for="">Direccion</label>
                            <select name="direccion" >
                                <option><?php echo $direccion; ?></option>
                                <option></option>
                                <option>vegas</option>
                                <option>vegas</option>                                                         
                            </select>
                            <label for="">Sede</label>
                            <select name="sede" >
                                <option><?php echo $sede; ?></option>
                                <option></option>
                                <option>DIRECCION GENERAL</option>
                                <option>TORRE ORIENTE</option>
                                <option>SEDE CENTRO</option>
                                <option>INSTITUTO DE LIDERZGO</option>    
                                <option>CEOH</option>                                                              
                            </select>
                            <label for="">Piso</label>
                            <input type="text" name="piso" id="piso" value="<?php echo $piso; ?>"/>
                            <label for="">Soporte Datecsa</label>
                            <select name="soporteDatecsa" >
                                <option></option>
                                <option>JOYBER DUMITH MANCO</option>
                                <option>ANDRES PULGARIN COLORADO</option>
                                <option>EDWIN PIRATEQUE HEREDIA</option>
                                <option>LEON JAIME PARRA ZAPATA</option>    
                                <option>SERVICIO TECNICO MEDELLIN</option>                                                              
                            </select>
                            <label for="">Solicita Servicio</label>
                            <input type="text" name="solicitaServicio" id="solicitaServicio" value="<?php echo $solicitaServicio; ?>">
                            <label for="">Existe VP</label>                            
                            <select name="existeVp">
                                <option><?php echo $existeVp; ?></option>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Marca VP</label>
                            <input type="text" name="marcaVp" id="marcaVp" value="<?php echo $marcaVp; ?>">
                            <label for="">Modelo VP</label>
                            <input type="text" name="modeloVp" id="modeloVp" value="<?php echo $modeloVp; ?>"/>
                            <label for="">Serie VP</label>
                            <input type="text" name="serieVp" id="serieVp" value="<?php echo $serieVp; ?>">
                            <label for="">Horas Lampara</label>
                            <input type="text" name="horasLampara" id="horasLampara" value="<?php echo $horasLampara; ?>">
                            <label for="">Estado VP</label>
                            <select name="estadoVp" >
                                <option><?php echo $estadoVp; ?></option>
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Existe TV</label>
                            <select name="existeTv">
                                <option><?php echo $existeTv; ?></option>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Marca TV</label>
                            <input type="text" name="marcaTv" id="marcaTv" value="<?php echo $marcaTv; ?>"/>
                            <label for="">Modelo TV</label>
                            <input type="text" name="modeloTv" id="modeloTv" value="<?php echo $modeloTv; ?>"/>
                            <label for="">Serie TV</label>
                            <input type="text" name="serieTv" id="serieTv" value="<?php echo $serieTv; ?>">
                            <label for="">Pulgadas TV</label>
                            <input type="text" name="pulgadas" id="pulgadas" value="<?php echo $pulgadas; ?>"/>
                            <label for="">Estado TV</label>
                            <select name="estadoTv" >
                                <option><?php echo $estadoTv; ?></option>
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Existe Clickshare</label>
                            <select name="existeCli">
                                <option><?php echo $existeCli; ?></option>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Marca Clickshare</label>
                            <input type="text" name="marcaCli" id="marcaCli" value="<?php echo $marcaCli; ?>">
                            <label for="">Modelo Clickshare</label>
                            <input type="text" name="modeloCli" id="modeloCli" value="<?php echo $modeloCli; ?>">
                            <label for="">Serie Clickshare</label>
                            <input type="text" name="serieCli" id="serieCli" value="<?php echo $serieCli; ?>"/>
                            <label for="">Existe Sonido</label>
                            <select name="existeSonido">
                                <option><?php echo $existeSonido; ?></option>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Marca Sonido</label>
                            <input type="text" name="marcaSonido" id="marcaSonido" value="<?php echo $marcaSonido; ?>"/>
                            <label for="">Modelo Sonido</label>
                            <input type="text" name="modeloSonido" id="modeloSonido" value="<?php echo $modeloSonido; ?>">
                            <label for="">Serie Sonido</label>
                            <input type="text" name="serieSonido" id="serieSonido" value="<?php echo $serieSonido; ?>">
                            <label for="">Estado Sonido</label>
                            <select name="estadoSonido" >
                                <option><?php echo $estadoSonido; ?></option>
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Existe Tactil</label>
                            <select name="existeTactil">
                                <option><?php echo $existeTactil; ?></option>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <option>N/A</option>                               
                            </select>
                            <label for="">Marca Tactil</label>
                            <input type="text" name="marcaTactil" id="marcaTactil" value="<?php echo $marcaTactil; ?>"/>
                            <label for="">Modelo Tactil</label>
                            <input type="text" name="modeloTactil" id="modeloTactil" value="<?php echo $modeloTactil; ?>">
                            <label for="">Serie Tactil</label>
                            <input type="text" name="serieTactil" id="serieTactil" value="<?php echo $serieTactil; ?>"/>
                            <label for="">Estado Tactil</label>
                            <select name="estadoTactil" >
                                <option><?php echo $estadoTactil; ?></option>
                                <option></option>
                                <option>BUENO</option>
                                <option>MALO</option>
                                <option>N/A</option>                               
                            </select>
                            
                    </div> 
                </div> 

                <div class="botones">
                    <button type="submit" name="buscar" id="buscar" class="boton1" >Buscar</button>
                    <button type="submit" name="registrar" id="registrar" class="boton2">Registrar</button>
                    <button type="button"  class="#" >Eliminar</button>
                    <button type="button" class="boton3" id="registros" onclick = "location='registros.php'" >Ver Registros</button>
                    
                </div>
                </form> 
            </div>               
            
        </section>      
    
    <footer class="footer">
        <nav class="pie">
            <h1>DATECSA Y BANCOLOMBIA</h1>
        </nav>
    </footer>
   </body>
</html>
