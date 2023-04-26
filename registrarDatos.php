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
                        <H4>REGISTRO CLINICOS</H4>
                    </div>
                    <form action="" id="loginform" method="post">
                        <label style="color: white;">Name</label>
                        <input type="text" class="inputLog" name="name" placeholder="Name" required>
                        <label style="color: white;">Phone Number</label>
                        <input type="text" class="inputLog" placeholder="Phone" name="phone" required>
                        <label style="color: white;">Address</label>
                        <input type="text" class="inputLog" placeholder="Address" name="address" required>
                        <label style="color: white;">Blood Type</label>
                        <input type="text" class="inputLog" placeholder="O+" name="blood" required>
                        <label style="color: white;">Allergies</label>
                        <input type="text" class="inputLog" placeholder="Allergies" name="allergies" required>

                        <button  type="submit" title="Ingresar" name="OK" value="INFORMATION">Add Information</button>
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
    $NAME=$_POST["name"];
    $PHONE=$_POST["phone"];
    $ADDRESS=$_POST["address"];
    $BLOOD=$_POST["blood"];
    $ALLERGIES=$_POST["allergies"];
    echo " ";
  } 
  if(isset($OK)) {
    if ($OK == "INFORMATION") {
     // coneccion al servidor de bases de datos
     $dbh=mysqli_connect ("localhost","comandazo","comandazo123")or die ('problema conectando porque :' . mysql_error());

     // seleccionado la base de datos
     mysqli_select_db ($dbh, "diamond");

     if (!$dbh) {
        die("Connection failed: " . mysqli_connect_error());
  }
     //construyendo insert
     $q="INSERT INTO pacientes (clave_usuario,nombre,phone,adress,bloodType,Allergies) VALUES (7,'$NAME','$PHONE','$ADDRESS','$BLOOD','$ALLERGIES')";
     // ejecutando el query
     $usuarios= mysqli_query($dbh, $q) or die ("problema con query");
   
     //avisando
     echo "registro insertado <br>";
     header("location:menu.html");
   };
  }
?> 
