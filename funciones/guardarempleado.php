<?php
include("../../../includes/conexion.php");
$linkr=conectar();


//variables POST
/*$tarea=($_POST['nombre']);*/


$rut=utf8_decode(strtolower($_POST['rut']));
$nombre=utf8_decode(strtolower($_POST['nombre']));
$apellido=utf8_decode(strtolower($_POST['apellido']));
$direccion=utf8_decode(strtolower($_POST['direccion']));
$correo=utf8_decode(strtolower($_POST['correo']));
$telefono=utf8_decode(strtolower($_POST['telefono']));
$cargo=utf8_decode(strtolower($_POST['cargo']));
//Para guardar fecha
$fechaingreso=utf8_decode(strtolower($_POST['fechaingreso']));
$fechanacimiento=utf8_decode(strtolower($_POST['fechanacimiento']));
//con el substr sacamos el dato en formato de texto, el primer indica la posicion del caracter y el segundo la cantidad que extraeremos.

$fechaingreso=substr($fechaingreso,6,4).substr($fechaingreso,3,2).substr($fechaingreso,0,2);
$fechanacimiento=substr($fechanacimiento,6,4).substr($fechanacimiento,3,2).substr($fechanacimiento,0,2);



//registra los datos del empleados
$sql="insert into tblempleados(rut,nombre,apellido,direccion,correo,telefono,cargo,fecha_ingreso,fecha_nacimiento) values('$rut','$nombre','$apellido','$direccion','$correo','$telefono','$cargo','$fechaingreso','$fechanacimiento')";


mysqli_query($linkr,$sql);
	
mysqli_close($linkr);


?>