<?php
include("../../../includes/conexion.php");
$linkr=conectar();


//variables POST
/*$tarea=($_POST['nombre']);*/

$arrayid=$_POST['arrayid'];
$arrayidx=$_POST['arrayidx'];
$valorcombo=$_POST['valorcombo'];
$arrayestado=$_POST['arrayestado'];
$fecha=$_POST['fecha'];
$estado=("realizada");

$fecha=substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);


$sql="insert into tbldetreg(iddetreg,idherramienta,posee,estado,fecharevision) values('$arrayid','$arrayidx','$valorcombo','$arrayestado','$fecha')";


mysqli_query($linkr,$sql);


mysqli_close($linkr);

?>