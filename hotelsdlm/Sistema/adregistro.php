<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$rol=$_POST['rol'];


$conexion=mysqli_connect("localhost:3308","root","","hotelsdlm");

$consulta="INSERT INTO usuario(nombre, Correo, contrasena, idrol) 
VALUES ('$nombre','$correo','$contrasena','$rol')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <h3>Registro exitoso</h3>
    <?php
    include("Registro.html");
}else{
    include("Registro.html");
    ?>
    
    <h3>Ha ocurrido un error</h3>
    <?php
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Senda de la Montaña</title>
    <link rel="stylesheet" href="style.css">
    <div id="cabeza">
    <img src="Images/Icono.png" width="10%">
    <link type="text/css" href="CSS/regadm.css" rel="stylesheet">

          <ul id="menu">
          <li><a href="adreserva.php">Reservaciones</a></li>
          <li>
              <a href="HabAdmin.php">Ctrl Habitaciones</a>
          </li>
          <li><a href="#">Crtl Servicios</a>
          </li>
          <li><a href="adregistro.php">Registro
          </a>
          </li>
          <li><a href="Inicio.html">LogOut
          </a>
      </li>
      </ul>
  </div>
  </head>
  <body>
    <section class="form-login">
      <h3>Registro</h3>
      <form action="registradmin.php" method="post">
      <input class="controls" type="text" name="nombre" value="" placeholder="Nombre de Usuario">
      <input class="controls" type="text" name="correo" value="" placeholder="CorreoElectronico">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input type="radio" name="rol" value="1">Administador
      <br/>
      <br/>
      <input type="radio" name="rol" value="2">Cliente
      <br/>
      <br/>
      <br/>
      <input class="buttons" type="submit" name="ingresar" value="Ingresar">
      <p><a href="Login.html">Inicia sesion</a></p>
    </form>
    
    </section>

  </body>
</html>