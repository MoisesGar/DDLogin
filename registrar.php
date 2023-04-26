<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> REGISTRO USUARIOS </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="./css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        <h3>Registro</h3>
                    </div>

                    <form action=""  method="post">
                        <label style="color: white;">Email</label>
                        <input type="text" class="inputLog" name="email" placeholder="sotfetch@email.com" required>
                        <label style="color: white;">Password</label>
                        <input type="password" class="inputLog" placeholder="Password" name="password" required>
                        <button type="submit" title="Ingresar" name="OK" value="REGISTER">Register</button>
                    </form>
                    <!--<div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        
                    </div>-->
                </div>
            </div>
        </div>
            
    </body>
</html>


<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $OK=$_POST["OK"]; 
    $EMAIL=$_POST["email"];
    $PASSWORD=$_POST["password"];
    echo " ";
  } 
  if(isset($OK)) {
    if ($OK == "REGISTER") {
     // coneccion al servidor de bases de datos
     $dbh=mysqli_connect ("localhost","comandazo","comandazo123")or die ('problema conectando porque :' . mysql_error());

     // seleccionado la base de datos
     mysqli_select_db ($dbh, "diamond");

     if (!$dbh) {
        die("Connection failed: " . mysqli_connect_error());
  }
     //construyendo insert
     $q="INSERT INTO usuarios (email,password) VALUES ('$EMAIL','$PASSWORD')";
     // ejecutando el query
     $usuarios= mysqli_query($dbh, $q) or die ("problema con query");
   
     //avisando
     echo "registro insertado <br>";
     header("location:login.php");
   };
  }
?> 