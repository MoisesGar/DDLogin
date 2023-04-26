




<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="./css/login.css">
        
    </head>
    <style>
        .warning{
            background-color: lightcoral;
            color: white;
            text-align: center;
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>
    <body>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        <h3>Login</h3>
                    </div>
                    <div>
                    <?php
                        include("conexion_bd.php");
                        include("controlador.php");
                    ?>  
                    </div>   
                    <form action="" id="loginform" method="post">
                        <label style="color: white;">Usuario</label>
                        <input type="text" class="inputLog" name="usuario" placeholder="Usuario" >
                        <label style="color: white;">Password</label>
                        <input type="password" class="inputLog" placeholder="Contraseña" name="password" >
                        
                        <button type="submit" title="Ingresar" name="OK" value="LOGIN">Login</button>
                        <a class="btn btn-info" href="" >I am Doctor</a>
                    </form>
                    <br>
                    <a class="text-center" href="registrar.php" style="color: white; text-decoration: none;" >Don't have an account? Sing up </a>
                    <!--<div class="pie-form">
                        
                        <a href="#">¿No tienes Cuenta? Registrate</a>
                    </div>-->
                </div>
            </div>
        </div>
       
    </body>
</html>
