
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



<!-- <?php
if(!empty($_POST["OK"])){
  if(empty($_POST["email"]) and empty($_POST["password"])){
    echo '<div class="warning">LOS CAMPOS ESTAN VACIOS</div>';
  }else{ 
    $USUARIO =$_POST["email"];
    $PASSWORD =$_POST["password"];
     $q=$dbh->query("insert into usuarios (email, password) values($USUARIO,$PASSWORD)");
     if($datos=$q->fetch_object()){
      header("location:login.php");
      }else{
        echo '<div class="warning">Acceso denegado</div>';
      }
   } 
};
?> -->