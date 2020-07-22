<?php 
include_once ('bd/conexion.php');

//captura del id o elemento en la url
$id = isset($_GET['id']) ? $_GET['id'] : 0; 
//consulta a la bd con la captura del id
$sql = "SELECT * FROM autogestion WHERE id = '$id'";
        $result = mysqli_query($conexion, $sql);
        if ($result === false){
            echo mysqli_error($conexion);
            
        }else{
            //listado que devuelve la bd
            $total = mysqli_num_rows($result);
            if ($total > 0) {
                // Imprimimos los resultados
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
            }
        }
        //botn de buscar en los registros
        if (isset($_POST['guardar'])) {

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
            //round deveulve un valor redondeado con presicion especificada
            $diferenciaContacto = round(($date2 - $date1));
            echo $diferenciaContacto =  (gmdate("z G:i", ($diferenciaContacto)));

            $diferenciaSolucion = round(($date3 - $date2));
            echo $diferenciaSolucion =  (gmdate("z G:i", ($diferenciaSolucion)));

            $diferenciaFinal = round(($date3 - $date1));
            echo $diferenciaFinal  =  (gmdate("z G:i", ($diferenciaFinal )));
            
            // actualizacion del registro en la bd
            $update = "UPDATE autogestion 
                                            SET codigo='$codigo',
                                                descripcionCodigo='$descripcionCodigo',
                                                ordenServicio='$ordenServicio', 
                                                tipoSala='$tipoSala', 
                                                tipoServicio='$tipoServicio',
                                                fechaHoraInicial='$fechaHoraInicial',
                                                fechaHoraAtencion='$fechaHoraAtencion',
                                                fechaHoraSolucion='$fechaHoraSolucion',
                                                tiempoContacto='$diferenciaContacto',
                                                tiempoSolucion='$diferenciaSolucion',
                                                tiempoFinal='$diferenciaFinal',
                                                estadoCableVga='$estadoCableVga',
                                                requiereCambioVga='$requiereCambioVga',
                                                tipoCableVga='$tipoCableVga',
                                                estadoCableHdmi='$estadoCableHdmi',
                                                requiereCambioHdmi='$requiereCambioHdmi',
                                                tipoCableHdmi='$tipoCableHdmi',
                                                observacion='$observacion',
                                                estadoServicio='$estadoServicio',
                                                ciudad='$ciudad',
                                                direccion='$direccion',
                                                sede='$sede',
                                                piso='$piso',
                                                soporteDatecsa='$soporteDatecsa',
                                                solicitaServicio='$solicitaServicio',
                                                existeVp='$existeVp',
                                                marcaVp='$marcaVp',
                                                modeloVp='$modeloVp',
                                                serieVp='$serieVp',
                                                horasLampara='$horasLampara',
                                                estadoVp='$estadoVp',
                                                existeTv='$existeTv',
                                                marcaTv='$marcaTv',
                                                modeloTv='$modeloTv',
                                                serieTv='$serieTv',
                                                pulgadas='$pulgadas',
                                                estadoTv='$estadoTv',
                                                existeCli='$existeCli',
                                                marcaCli='$marcaCli',
                                                modeloCli='$modeloCli',
                                                seriecli='$serieCli',
                                                existeSonido='$existeSonido',
                                                marcaSonido='$marcaSonido',
                                                modeloSonido='$modeloSonido',
                                                serieSonido='$serieSonido',
                                                estadoSonido='$estadoSonido',
                                                existeTactil='$existeTactil',
                                                marcaTactil='$marcaTactil',
                                                modeloTactil='$modeloTactil',
                                                serieTactil='$serieTactil',
                                                estadoTactil='$estadoTactil' WHERE id= '$id'";

        $query = mysqli_query($conexion, $update);
        
        if (!$query) {
            echo '<script>
                    alert(" NO SE ACTUALIZO LA AUTOGESTION");
                     window.location="ediccion.php";
                  </script>';
        }else {
            echo '<script>
                    alert("SE ACTUALIZO LA AUTOGESTION");
                    window.location="ediccion.php";
                 </script>';
                
            }
            
        }
        
mysqli_close($conexion);
?>