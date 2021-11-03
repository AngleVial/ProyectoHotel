<?php
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


$conexion=mysqli_connect("localhost:3308","root","","hotelsdlm");

$consulta="INSERT INTO usuario(nombre, Correo, contrasena, idrol) 
VALUES ('$nombre','$correo','$contrasena','2')";
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