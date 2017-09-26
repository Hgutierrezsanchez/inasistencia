<?php
include("../../../includes/conexion.php");
$linkr=conectar();

$pendiente=$_POST['pendiente'];
$sql="delete from tblregistro where estado='$pendiente'";



mysqli_query($linkr,$sql);
	
mysqli_close($linkr);


?>