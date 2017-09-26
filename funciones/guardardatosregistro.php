<?php
include("../../../includes/conexion.php");
$linkr=conectar();


//variables POST
/*$tarea=($_POST['nombre']);*/

$ruttecnico=$_POST['ruttecnico'];
$rutsupervisor=$_POST['rutsupervisor'];
$zona=$_POST['zona'];
$fecha=$_POST['fecha'];
$vehiculo=$_POST['vehiculo'];
$patente=$_POST['patente'];
$descripcion=$_POST['descripcion'];
$estado=("pendiente");

$fecha=substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);


$sql="insert into tblregistro(ruttecnico,rutsuper,zona,fecha,vehiculo,patente,descripcion,estado) values('$ruttecnico','$rutsupervisor','$zona','$fecha','$vehiculo','$patente','$descripcion','$estado')";



mysqli_query($linkr,$sql);
	
mysqli_close($linkr);


?>