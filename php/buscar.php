<?php

require_once "bd/conexion.php";

        // boton de registar en busqueda php
        if (isset($_POST['registrar'])) {
            //valores taridos desdes el formulario busqueda.php
            $codigo = $_POST['codigo'];
            $descripcionCodigo = $_POST['descripcionCodigo'];
            $ordenServicio = $_POST['ordenServicio'];
            $tipoSala = $_POST['tipoSala'];            
            $tipoServicio = $_POST['tipoServicio'];
            $fechaHoraInicial = $_POST['fechaHoraInicial'];
            $fechaHoraAtencion = $_POST['fechaHoraAtencion'];
            $fechaHoraSolucion = $_POST['fechaHoraSolucion'];
            $tiempoContacto = $_POST['tiempoContacto'];            
            $tiempoSolucion = $_POST['tiempoSolucion'];
            $tiempoFinal = $_POST['tiempoFinal'];
            $estadoCableVga = $_POST['estadoCableVga'];
            $requiereCambioVga = $_POST['requiereCambioVga'];
            $tipoCableVga = $_POST['tipoCableVga'];
            $estadoCableHdmi = $_POST['estadoCableHdmi'];
            $requiereCambioHdmi = $_POST['requiereCambioHdmi'];
            $tipoCableHdmi = $_POST['tipoCableHdmi'];
            $observacion = $_POST['observacion'];
            $estadoServicio = $_POST['estadoServicio'];            
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $sede = $_POST['sede'];
            $piso = $_POST['piso'];
            $soporteDatecsa = $_POST['soporteDatecsa'];            
            $solicitaServicio = $_POST['solicitaServicio'];
            $existeVp = $_POST['existeVp'];
            $marcaVp = $_POST['marcaVp'];
            $modeloVp = $_POST['modeloVp'];
            $serieVp = $_POST['serieVp'];            
            $horasLampara = $_POST['horasLampara'];
            $estadoVp = $_POST['estadoVp'];
            $existeTv = $_POST['existeTv'];
            $marcaTv = $_POST['marcaTv'];
            $modeloTv = $_POST['modeloTv'];            
            $serieTv = $_POST['serieTv'];
            $pulgadas = $_POST['pulgadas'];
            $estadoTv = $_POST['estadoTv'];
            $existeCli = $_POST['existeCli'];
            $marcaCli = $_POST['marcaCli'];            
            $modeloCli = $_POST['modeloCli'];
            $serieCli = $_POST['serieCli'];
            $existeSonido = $_POST['existeSonido'];
            $marcaSonido = $_POST['marcaSonido'];
            $modeloSonido = $_POST['modeloSonido'];            
            $serieSonido = $_POST['serieSonido'];
            $estadoSonido = $_POST['estadoSonido'];
            $existeTactil = $_POST['existeTactil'];
            $marcaTactil = $_POST['marcaTactil'];
            $modeloTactil = $_POST['modeloTactil'];            
            $serieTactil = $_POST['serieTactil'];
            $estadoTactil = $_POST['estadoTactil'];
           
            $date1 = strtotime($fechaHoraInicial);
            $date2 = strtotime($fechaHoraAtencion);
            $date3 = strtotime($fechaHoraSolucion);
            
            //calculos de fechas y horas z->para el dia exacto/ Gpara horas/ i para minutos

            $diferenciaContacto = round(($date2 - $date1));
            echo $diferenciaContacto =  (gmdate("z G:i", ($diferenciaContacto)));

            $diferenciaSolucion = round(($date3 - $date2));
            echo $diferenciaSolucion =  (gmdate("z G:i", ($diferenciaSolucion)));

            $diferenciaFinal = round(($date3 - $date1));
            echo $diferenciaFinal  =  (gmdate("z G:i", ($diferenciaFinal )));
            
            //consulta a la bd para insertar
            $insert = "INSERT INTO autogestion (codigo,
                                                descripcionCodigo, 
                                                ordenServicio, 
                                                tipoSala, 
                                                tipoServicio,
                                                fechaHoraInicial,
                                                fechaHoraAtencion,
                                                fechaHoraSolucion,
                                                tiempoContacto,
                                                tiempoSolucion,
                                                tiempoFinal,
                                                estadoCableVga,
                                                requiereCambioVga,
                                                tipoCableVga,
                                                estadoCableHdmi,
                                                requiereCambioHdmi,
                                                tipoCableHdmi,
                                                observacion,
                                                estadoServicio,
                                                ciudad,
                                                direccion,
                                                sede,
                                                piso,
                                                soporteDatecsa,
                                                solicitaServicio,
                                                existeVp,
                                                marcaVp,
                                                modeloVp,
                                                serieVp,
                                                horasLampara,
                                                estadoVp,
                                                existeTv,
                                                marcaTv,
                                                modeloTv,
                                                serieTv,
                                                pulgadas,
                                                estadoTv,
                                                existeCli,
                                                marcaCli,
                                                modeloCli,
                                                seriecli,
                                                existeSonido,
                                                marcaSonido,
                                                modeloSonido,
                                                serieSonido,
                                                estadoSonido,
                                                existeTactil,
                                                marcaTactil,
                                                modeloTactil,
                                                serieTactil,
                                                estadoTactil)                                             
                                                VALUES('$codigo',
                                                        '$descripcionCodigo', 
                                                        '$ordenServicio', 
                                                        '$tipoSala', 
                                                        '$tipoServicio',
                                                        '$fechaHoraInicial',
                                                        '$fechaHoraAtencion',
                                                        '$fechaHoraSolucion',
                                                        '$diferenciaContacto',
                                                        '$diferenciaSolucion',
                                                        '$diferenciaFinal',
                                                        '$estadoCableVga',
                                                        '$requiereCambioVga',
                                                        '$tipoCableVga',
                                                        '$estadoCableHdmi',
                                                        '$requiereCambioHdmi',
                                                        '$tipoCableHdmi',
                                                        '$observacion',
                                                        '$estadoServicio',
                                                        '$ciudad',
                                                        '$direccion',
                                                        '$sede',
                                                        '$piso',
                                                        '$soporteDatecsa',
                                                        '$solicitaServicio',
                                                        '$existeVp',
                                                        '$marcaVp',
                                                        '$modeloVp',
                                                        '$serieVp',
                                                        '$horasLampara',
                                                        '$estadoVp',
                                                        '$existeTv',
                                                        '$marcaTv',
                                                        '$modeloTv',
                                                        '$serieTv',
                                                        '$pulgadas',
                                                        '$estadoTv',
                                                        '$existeCli',
                                                        '$marcaCli',
                                                        '$modeloCli',
                                                        '$serieCli',
                                                        '$existeSonido',
                                                        '$marcaSonido',
                                                        '$modeloSonido',
                                                        '$serieSonido',
                                                        '$estadoSonido',
                                                        '$existeTactil',
                                                        '$marcaTactil',
                                                        '$modeloTactil',
                                                        '$serieTactil',
                                                        '$estadoTactil')";
    //validacion que se ejecute la consulta
        $query = mysqli_query($conexion, $insert);
        
        if (!$query) {
            echo '<script>
                    alert(" NO SE REGISTRO LA AUTOGESTION");
                     window.location="busqueda.php";
                  </script>';
        }else {
            echo '<script>
                    alert("SE REGISTRO LA AUTOGESTION");
                    window.location="busqueda.php";
                 </script>';
                
            }
            
        }
 //Boton buscar fel formulario busqueda.php       
if (isset($_POST['buscar'])){
    // Tomamos el valor ingresado
    $buscar = mysqli_real_escape_string($conexion, $_POST['codigo']);

    // Si está vacío, lo informamos, sino realizamos la búsqueda
    if (empty($buscar)){
        echo '<script>alert("DIGITA EL CODIGO, ESTA VACIO");
                window.history.go(-1);
              </script>';
    }else{
        //consulta a la bd
        $sql = "SELECT * FROM autogestion WHERE codigo = '$buscar'";
        $result = mysqli_query($conexion, $sql);
        //validacion de la consulta
        if ($result === false){
            echo mysqli_error($conexion);
            
        }else{
            //# de filas que devuelve la consulta
            $total = mysqli_num_rows($result);
            if ($total > 0) {
                // Imprimimos los resultados en una matriz
                if ($row = mysqli_fetch_array($result)){
                    
                $codigo = $row['codigo'];
                $descripcionCodigo = $row['descripcionCodigo'];
                $ordenServicio = $row['ordenServicio'];
                $tipoSala = $row['tipoSala'];            
                $tipoServicio = $row['tipoServicio'];
                $fechaHoraInicial = $row['fechaHoraInicial'];
                $fechaHoraAtencion = $row['fechaHoraAtencion'];
                $fechaHoraSolucion = $row['fechaHoraSolucion'];
                $tiempoContacto = $row['tiempoContacto'];            
                $tiempoSolucion = $row['tiempoSolucion'];
                $tiempoFinal = $row['tiempoFinal'];
                $estadoCableVga = $row['estadoCableVga'];
                $requiereCambioVga = $row['requiereCambioVga'];
                $tipoCableVga = $row['tipoCableVga'];
                $estadoCableHdmi = $row['estadoCableHdmi'];
                $requiereCambioHdmi = $row['requiereCambioHdmi'];
                $tipoCableHdmi = $row['tipoCableHdmi'];
                $observacion = $row['observacion'];
                $estadoServicio = $row['estadoServicio'];            
                $ciudad = $row['ciudad'];
                $direccion = $row['direccion'];
                $sede = $row['sede'];
                $piso = $row['piso'];
                $soporteDatecsa = $row['soporteDatecsa'];            
                $solicitaServicio = $row['solicitaServicio'];
                $existeVp = $row['existeVp'];
                $marcaVp = $row['marcaVp'];
                $modeloVp = $row['modeloVp'];
                $serieVp = $row['serieVp'];            
                $horasLampara = $row['horasLampara'];
                $estadoVp = $row['estadoVp'];
                $existeTv = $row['existeTv'];
                $marcaTv = $row['marcaTv'];
                $modeloTv = $row['modeloTv'];            
                $serieTv = $row['serieTv'];
                $pulgadas = $row['pulgadas'];
                $estadoTv = $row['estadoTv'];
                $existeCli = $row['existeCli'];
                $marcaCli = $row['marcaCli'];            
                $modeloCli = $row['modeloCli'];
                $serieCli = $row['serieCli'];
                $existeSonido = $row['existeSonido'];
                $marcaSonido = $row['marcaSonido'];
                $modeloSonido = $row['modeloSonido'];            
                $serieSonido = $row['serieSonido'];
                $estadoSonido = $row['estadoSonido'];
                $existeTactil = $row['existeTactil'];
                $marcaTactil = $row['marcaTactil'];
                $modeloTactil = $row['modeloTactil'];            
                $serieTactil = $row['serieTactil'];
                $estadoTactil = $row['estadoTactil'];
                  
                }
             }else {
                echo '<script>alert("EL CODIGO NO EXISTE EN LA BD");
                window.history.back(-2);
                location.reload();
              </script>'; 
            }
        }
    }
}


mysqli_close($conexion);
?>