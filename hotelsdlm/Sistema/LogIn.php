<?php 
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: Sistema/');
    
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['contrasena']))
		{
			$alert = 'Ingrese su usuario y su contraseña';
		}else{

			require_once "conexioon.php";

			$user = $_POST['usuario'];
 			$pass = $_POST['contrasena'];
      $query = mysqli_query($conection,"SELECT*FROM Usuario WHERE nombre='$user' AND contrasena='$pass'");
			$result = mysqli_num_rows($query);
			if($result > 0)
			{
                if($result['idrol']==1){
                    header("location:AdminHabitaciones.html");
                
                }
                else 
                if($result['idrol']==2){
                    header("location:Menu.html");
                
			}else{
				$alert = 'El usuario o la contraseña son incorrectos';
				session_destroy();
			}


		}

	}
}
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
    <link type="text/css" href="CSS/style.css" rel="stylesheet">
  </div> 
  </head>
  <body>
    <section class="form-login">
      <h3>Inicia Sesion</h3>
      <form action="" method="post">
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="ingresar" value="Ingresar">
      <p><a href="Registro.html">Registrarse</a></p>
    </form>
    </section>

  </body>
</html>