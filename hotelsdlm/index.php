<?php
session_start();
if(!empty($_SESSION['active']))
{
	header('location: Sistema/');
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senda de la Montaña</title>
    <link type="text/css" href="CSS/Intento.css" rel="stylesheet">
<div id="cabeza">
    <img src="Images/Icono.png" width="8%">
    <a href="Sistema/Login.html">Inicio de Sesion</a>
</div>
</head>
<body id="contenido">
    <div id="Desc">
        <h1>HOTEL SENDA DE LA MONTAÑA</h1>
        <br/>
        <br/>
        <img src="Images/Hotel.jpg" width="30%">
        <br/>
        <br/>
        <br/>
        <br/>

        <p>Ubicado estrategicamente en las cercanias de los bellos y hermosos paisajes de la Sierra Madre, el Hotel Senda de la Montaña. El hotel brinda una experiencia unica al presentar el ambiente calmado y muy fresco que poseen las montañas, combinandolo con un toque hogareño propio de la region.</p>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
        <div  id="Sec">
            
        <img  id="imagen" src="Images/Individual.jpg" width="30%">
       <br/>
        <br/>
        <br/>
        <br/>
        
       <p>Las Habitaciones estan decoradas y ambientadas en la tranquilidad y serenidad de un bosque otorgandole al cliente un descanso relajante al gusto. Dentro del hotel se encuentra un restaurante el cual tiene un menu especial de la region.  el municipio.</p>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
    </div>
    <div id="Ters">
        <img  id="imagen" src="Images/transporte.jpg" width="25%">
        <br/>
        <br/>
        <br/>
        <br/>
        <p>El transporte es importante a la hora de visitar otro lugar, por ello el hotel tambien provee un sistema de transporte hacia distintos puntos de la montaña, asi tambien provee un transporte directo desde el aeropuerto en caso de ser visitante del extranjero. Existe tambien
        un sistema de alquiler de vehiculos el cual permite la eficaz movilizacion en todo el territorio</p>
    </div>
      <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
    <div id="Cars">
        <p>Existe tambien
        un sistema de alquiler de vehiculos el cual permite la eficaz movilizacion en todo</p>
        <img  id="imagen" src="Images/renta.jpg" width="25%">
        
    </div>
</body>
<footer>
    <p></p>

</footer>
</html>
