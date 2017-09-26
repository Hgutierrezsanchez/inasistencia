<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<?php

		if (empty($_SESSION['iduser']))
		{
		session_start();
		}
		include("../../../includes/conexion.php");
	
		$link=conectar();
	
		$id=$_GET['id'];
				
		$consulta1 = "SELECT * from tblregistroauditoria where id ='$id'";
		$sql1=mysqli_query($link,$consulta1);
	
		while($row = mysqli_fetch_array($sql1)){
		
	?>
	<br> 
	<div class="box-body">
		<table border="1" align="center" >
			<form name="ver_pdf" >
				
				<tr> <td COLSPAN=3><img src="../../../img/n1.png" width="170" align="center"><label style="margin-center: 10%;" > Cable Nielsen Limitada</label></td></tr>
				<tr> <th COLSPAN=3 style="font-weight: normal;"><label >AUDITORIA DE VERIFICACIÓN CUMPLIMIENTO PREVENCIÓN DE RIESGOS			</label></th></tr>
				<tr> <td COLSPAN=3><label style="margin-left: 1%;"> Nombre Técnico Auditado : <?php echo $row['nombre_tecnico']; ?> </label></td></tr>
				<tr> <td COLSPAN=3><label style="margin-left: 1%;"> Zona : <?php echo $row['zona']; ?> </label></td></tr>
				<tr> <td ><label style="margin-left: 1%;"> FECHA AUDITORIA : <?php echo $row['fecha'];?>  </label></td>
				<td ><label style="margin-left: 1%;">  VEHICULO : <?php echo $row['vehiculo'];?> </label></td>
				<td><label style="margin-left: 1%;" > PATENTE:  <?php echo $row['patente'];} ?> </label></td></tr>

				<tr > <td><label > ELEMENTOS DE PROTECCIÓN PERSONAL </label></td>
				<td><label > CUMPLE  </label></td>
				<td><label > OBSERVACIÓN  </label></td></tr>
				<tr> <td COLSPAN=3 ><label style="margin-left: 1%"; >02.- REQUISITOS ELEMENTOS DE PROTECCIÓN PERSONAL			</label></td></tr>
				
				<?php
				$consulta2 = "SELECT tbldetalleregistro.idh ,tbldetalleregistro.cumple,tbldetalleregistro.observacion  , tblherramientas.nombre FROM tbldetalleregistro INNER JOIN tblherramientas ON tbldetalleregistro.idh = tblherramientas.idh WHERE (tbldetalleregistro.idr='$id') and (tblherramientas.clasificacion='elementos de porteccion personal')ORDER BY idh";
				
				$sql2=mysqli_query($link,$consulta2);
				
				while($row = mysqli_fetch_array($sql2)){

                echo "<tr><td><label style=\"margin-left: 1%;\">".$row['nombre']."</label> </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['cumple']." </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['observacion']." </td></tr>";
				}
				
				
				echo " 		<tr><td  COLSPAN=3><label style=\"margin-left: 1%;\"> 03.- ELEMENTOS DEL MOVIL </td></tr>";
				
				$consulta3 = "SELECT tbldetalleregistro.idh ,tbldetalleregistro.cumple,tbldetalleregistro.observacion  , tblherramientas.nombre FROM tbldetalleregistro INNER JOIN tblherramientas ON tbldetalleregistro.idh = tblherramientas.idh WHERE (tbldetalleregistro.idr='$id')  and (tblherramientas.clasificacion='elementos del movil') ORDER BY idh";
				$sql3=mysqli_query($link,$consulta3);
				
				while($row = mysqli_fetch_array($sql3)){

                echo "<tr><td><label style=\"margin-left: 1%;\">".$row['nombre']."</label> </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['cumple']." </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['observacion']." </td></tr>";
				}
				
				echo " 		<tr><td  COLSPAN=3><label style=\"margin-left: 1%;\"> 04.- REQUISITOS ESCALA EXTENSION </td></tr>";
				
				$consulta4 = "SELECT tbldetalleregistro.idh ,tbldetalleregistro.cumple,tbldetalleregistro.observacion  , tblherramientas.nombre FROM tbldetalleregistro INNER JOIN tblherramientas ON tbldetalleregistro.idh = tblherramientas.idh WHERE (tbldetalleregistro.idr='$id')  and (tblherramientas.clasificacion='escala extencion') ORDER BY idh";
				$sql4=mysqli_query($link,$consulta4);
				
				while($row = mysqli_fetch_array($sql4)){

                echo "<tr><td><label style=\"margin-left: 1%;\">".$row['nombre']."</label> </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['cumple']." </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['observacion']." </td></tr>";
				}
				
				
				echo " 	<tr><td  COLSPAN=3><label style=\"margin-left: 1%;\">Observación Sobre Inspeción </td></tr>";
				
				$sql1=mysqli_query($link,$consulta1);
				while($row = mysqli_fetch_array($sql1)){
				echo " 		<tr><td COLSPAN=3><label style=\"margin-left: 1%;\">".$row['observacion']." </td></tr>";	
				echo " 		<tr><td COLSPAN=3><label style=\"margin-left: 1%;\">TOME CONOCIOIENTO:</td></tr>";
				echo " 		<tr><td COLSPAN=1 ><label style=\"margin-left: 1%;\">".$row['nombre_tecnico']." </td>";
				}
				echo " 		<tr><td  COLSPAN=1><label style=\"margin-left: 1%;\">Cargo:</td></tr>";
				echo " 		<tr><td  COLSPAN=1><label style=\"margin-left: 1%;\">Firma</td><td  COLSPAN=2><label style=\"margin-left: 1%;\">Firma</td></tr>";
                echo " 		<td  COLSPAN=2 rowspan=2><label style=\"margin-left: 1%;\">NOMBRE GESTOR DE OPERACIONES QUE REALIZA AUDITORIA:</td></tr>";
				echo " 		<tr><td COLSPAN=1 rowspan=3></td><td COLSPAN=2 rowspan=3 ><img src=\"../../../img/firma.png\" width=\"200\" align='center'></td></tr>";
				
				
			
				
				?>
				

			</form>
		</table>
	</div>

</html>

