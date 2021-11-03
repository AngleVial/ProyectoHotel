<?php
$conexion=mysqli_connect("localhost:3308","root","","hotelsdlm");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
    <link type="text/css" href="CSS/adhab.css" rel="stylesheet">
<div id="cabeza">
    <img src="Images/Icono.png" width="8%">
        <ul id="menu">
        <li><a href="AdminReserva.html">Reservaciones</a></li>
        <li>
            <a href="HabAdmin.php">Ctrl Habitaciones</a>
        </li>
        <li><a href="#">Crtl Servicios</a>
        </li>
        <li><a href="AdminRegistro.html">Registro
        </a>
        </li>
        <li><a href="Login.html">LogOut</a>
    </li>
    </ul>
</div>
</head>
<body id="contenido">
    <div id="Desc">
<h1>CONTROL DE HABITACIONES</h1>
<br/>
<table border>
    <tr>
        <th width="30%">Habitaciones</th>
        <th width="10%">Camas</th>
        <th width="30%">Estado</th>
    </tr>
<?php
$query="SELECT `idhabitacion`, `cama`, `idestado`  
FROM `habitacion`, `estadohabi`";
$result=mysqli_query($conexion,$query);
 while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $mostrar['idhabitacion'] ?></td>
    <td><?php echo $mostrar['cama'] ?></td>
    <td><?php echo $mostrar['idestado'] ?></td>
 </tr>
 <?php
 }
 ?>
 </table>

</div>
</body>
<footer>
<p>Mangle</p>

</footer>
</html>