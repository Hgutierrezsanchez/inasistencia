<?php
include("../../../includes/conexion.php");
$linkr=conectar();

$estado=("realizada");
$arrayid=$_POST['arrayid'];

$sql="update tblregistro set estado='$estado' where idregistro='$arrayid'";



mysqli_query($linkr,$sql);
	
mysqli_close($linkr);


?>