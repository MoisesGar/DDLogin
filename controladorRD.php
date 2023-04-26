<?php
if(!empty($_POST["OK"])){
  if(empty($_POST["usuario"]) and empty($_POST["password"])){
    echo '<div class="warning">LOS CAMPOS ESTAN VACIOS</div>';
  }else{ 
    $USUARIO =$_POST["usuario"];
    $PASSWORD =$_POST["password"];
     $q=$dbh->query("select * from usuarios where ='$USUARIO' and password='$PASSWORD'");
     if($datos=$q->fetch_object()){
      header("location:login.php");
      }else{
        echo '<div class="warning">Acceso denegado</div>';
      }
   } 
};
?>