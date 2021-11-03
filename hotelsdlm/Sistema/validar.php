<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost:3308","root","","hotelsdlm");

$consulta="SELECT*FROM Usuario WHERE nombre='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['idrol']==1){
	header("location:HabAdmin.php");

}
else 
if($filas['idrol']==2){
	header("location:menu.php");
}
else{
	?>
	<?php
	include("Login.html");
	?>
	<h1 class="mal">Error en el inicio de sesion</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);