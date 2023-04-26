<!DOCTYPE html>
<html>
 <style>
   input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  .nav{
    background-color: #CF08AB;
    margin-bottom: 20px;
    margin-top: 50px;
  }
  a{
    color: white;
    font-size: 20px;
    margin-left: 10px ;
    text-decoration: none;
  }
  a:hover{
    color: lightskyblue;
  }
 </style>
 <body style="background: linear-gradient(45deg,  #9B62FF 35%,#5F04FE 20%,#6729D3 20%, pink)">
  <div class="nav"style="margin:0; margin-bottom: 20px;">
<nav>
      <a href="inserts.php" class="navlink">INSERTAR BD</a>
      <a href="despliegue.php" class="navlink">LEER BD</a>
      <a href="delete.php" class="navlink">DELETE BD</a>
      <a href="Buscando.php" class="navlink">BUSCAR BD</a>
    </nav>

    </div>
  <h3>Pantalla de Captura de Datos.</h3>

  <div>
   <form METHOD=post>
     <label for="lnombre">NOMBRE</label>
     <input type="text" name="NOMBRE" placeholder="Escribe tu nombre..">

     <label for="ledad">EDAD</label>
     <input type="text" name="EDAD" placeholder="Escribe tu edad..">

     <label for="lestatura">ESTATURA</label>
     <input type=text name=ESTATURA>
  
     <INPUT TYPE=submit NAME="OK" VALUE="INSERT"><BR>
     <a href="registrar.html" class="navlink">Aun no tienes cuenta?</a>
   </form>

  </div>

 </body>
</html>

<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $OK=$_POST["OK"]; 
    $NOMBRE=$_POST["NOMBRE"];
    $EDAD=$_POST["EDAD"];
    $ESTATURA=$_POST["ESTATURA"];
    echo " ";
  } 
  if(isset($OK)) {
    if ($OK == "INSERT") {
     // coneccion al servidor de bases de datos
     $dbh=mysqli_connect ("localhost", "uprueba", "Uprueba20*")or die ('problema conectando porque :' . mysql_error());

     // seleccionado la base de datos
     mysqli_select_db ($dbh, "alumnos");

     //construyendo insert
     $q="INSERT INTO talumnos (nombre,edad,estatura) VALUES ('".$NOMBRE."',".$EDAD.",".$ESTATURA.") ;";
     // ejecutando el query
     $talumnos= mysqli_query($dbh, $q) or die ("problema con query");
   
     //avisando
     echo "registro insertado <br>";
   };
  }
?>
