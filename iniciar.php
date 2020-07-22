<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/99fe9ee983.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>LOGIN</title>
</head>
<body>
    <div class="padre">
        <header class="header">
            <div class="menu">
                <div class="logo">
                    <img src="img/1.png" alt="">
                 </div>
                <nav class="nav">
                  
                </nav>
             </div>
        </header>  
    
        <section class="section">
           <div class="titulo">
               <div class="usuarios">
                    <h3>Iniciar Seccion</h3>                 
                <div class="formularioUser">                  
                    <div class="form-user">                         
                        <form class="user" id="user" action="users/registrarUser.php" method="POST">
                            <label for="">correo</label>
                            <input type="email" name="correo" id="correo" value="">
                            <label for="">contraseña</label>
                            <input type="password" name="clave" id="clave" value="">
                            <label for="">Cargo</label>
                            <select name="cargo" >  
                                <option ></option>                              
                                <option >JEFE</option>
                                <option>HELPDESK</option>
                                <option>ADMINISTRADOR</option>                                
                            </select>           
                    
                    </div> 
                </div> 

                <div class="botones">
                    <button type="submit" name="iniciar" id="iniciar" class="boton1" >iniciar</button>
                    <button type="submit" name="regUser" id="regUser" class="boton2">Registrarme</button>
                    
                </div>
                </form> 
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