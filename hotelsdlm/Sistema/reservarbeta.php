<?php
$idcliente=$_POST['cliente'];
$idhabitacion=$_POST['selecto'];
$fecharea=$_POST['start'];
$fechasa=$_POST['startt'];
$idservicio=$_POST['cbox'];




$conexion=mysqli_connect("localhost:3308","root","","hotelsdlm");

$idprecio1="SELECT precio FROM servicio WHERE idservicio='$idservicio'";
$idprecio2="SELECT precio FROM habitacion WHERE cama='$selecto'";
$consulta="INSERT INTO reserva(idcliente, idhabitacion, fecharealizada, fechasalida, idservicio, idpago) 
VALUES ('$idcliente','$idhabitacion','$fecharea','$fechasa','$idservicio','$totalprecio')";
$resultado=mysqli_query($conexion,$consulta);

$totalprecio=$idprecio1+$idprecio2;

if($resultado){
    ?>
    <h3>Rerserva exitosa</h3>
    <?php
    include("reservarbeta.php");
}else{
    include("reservarbeta.php");
    ?>
    
    <h3>Ha ocurrido un error</h3>
    <?php
}
?>