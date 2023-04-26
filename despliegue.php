<HTML>
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
    background-color: orange;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
  }

  input[type=submit]:hover {
    background-color: coral;
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
 <body style="background: linear-gradient(-110deg,  #9B62FF 50%,#5F04FE,#6729D3, pink)">
  <div class="nav"style="margin:0; margin-bottom: 20px;">
<nav>
      <a href="inserts.php" class="navlink">INSERTAR BD</a>
      <a href="despliegue.php" class="navlink">LEER BD</a>
      <a href="delete.php" class="navlink">DELETE BD</a>
      <a href="Buscando.php" class="navlink">BUSCAR BD</a>
    </nav>

    </div>
 <FORM ACTION=despliegue.php METHOD=post>
 <INPUT TYPE=submit NAME=OK VALUE="SELECT"><BR>
</FORM></HTML>

<?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
     $OK=$_POST["OK"];
    } 
   if(isset($OK)) {
     if ($OK == "SELECT") {

     // coneccion al servidor de bases de datos
     $dbh=mysqli_connect("localhost", "uprueba", "Uprueba20*") or die ('problema conectando porque :' . mysql_error());

     // seleccionado la base de datos
     mysqli_select_db ($dbh, "alumnos");

     // preparando la instruccion sql
     $q = 'select * from talumnos';

     // ejecutando el query
     $tabla1= mysqli_query($dbh, $q) or die ("problema con query");
     // empezando una tabla html
     echo "<HTML><TABLE Border=10 CellPadding=5><TR>";
   
     # construyendo los encabezados de la tabla
     echo "<th bgcolor=#dddddd>CLAVE</th><th bgcolor=#cccccc>NOMBRE</th><th  
     bgcolor=#dddddd>EDAD</th><th bgcolor=#cccccc>ESTATURA</th></TR>";

     // ciclo de lectura del rowset($tabla1)
     while($renglon = mysqli_fetch_row($tabla1))
       {
        // desplegando en celda de tabla html
        echo"<tr>";
        echo "<td bgcolor=white>".$renglon[0]."</td>";
        echo "<td bgcolor=white>".$renglon[1]."</td>";
        echo "<td bgcolor=white>".$renglon[2]."</td>";
        echo "<td bgcolor=white>".$renglon[3]."</td>";
        echo"</tr>";
     };
     // cerrando tabla html
     echo "</table>";
   };
 }
?>
