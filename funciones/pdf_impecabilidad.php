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
				
		$consulta1 = "select tblregistro.*,tbltecnico.nombre from tblregistro inner join tbltecnico on tblregistro.ruttecnico=tbltecnico.rut where tblregistro.idregistro='$id'";
		$sql1=mysqli_query($link,$consulta1);
	
		while($row = mysqli_fetch_array($sql1)){
       		
	?>
	<br> 
	<div class="box-body">
		<table border="1" align="center" >
			<form name="ver_pdf" >
				
				<tr> <td COLSPAN=6><img src="../../../img/n1.png" width="170" align="center"><label style="margin-center: 10%;" > Cable Nielsen Limitada</label></td></tr>
				<tr> <th COLSPAN=6 style="font-weight: normal;"><label >INFORME IMPECABILIDAD			</label></th></tr>
				<tr> <td COLSPAN=6><label style="margin-left: 1%;"> NOMBRE TECNICO : <?php echo $row['nombre']; ?> </label></td></tr>
				<tr> <td COLSPAN=6><label style="margin-left: 1%;">ZONA : <?php echo $row['zona']; ?> </label></td></tr>
				<tr><td COLSPAN=2 ><label style="margin-left: 1%;"> FECHA REVISION : <?php echo $row['fecha'];?>  </label></td>
				<td COLSPAN=2><label style="margin-left: 1%;">  VEHICULO : <?php echo $row['vehiculo'];?> </label></td>
				<td COLSPAN=2><label style="margin-left: 1%;" > PATENTE:  <?php echo $row['patente'];} ?> </label></td></tr>
          
          		<tr > <td COLSPAN=6 align="center"><label >HERRAMIENTAS </label></td>
                </tr>
                <tr>
				<td><label > CLASIFICACION  </label></td>
				<td><label > CODIGO HERRAMIENTA </label></td>
				<td><label > DESCRIPCION  </label></td>
				<td><label > CRITICIDAD </label></td>
				<td><label > POSEE </label></td>
				<td><label > ESTADO  </label></td></tr>
          
          	<?php
				$consulta2 = "select tblherramientas.clasificacion, tblherramientas.descripcion, tblherramientas.criticidad, tbldetreg.idherramienta, tbldetreg.posee, tbldetreg.estado from tblherramientas inner join tbldetreg on tblherramientas.idh=tbldetreg.idherramienta where tbldetreg.iddetreg='$id' ORDER BY idherramienta";
				
				$sql2=mysqli_query($link,$consulta2);
				
				while($row = mysqli_fetch_array($sql2)){

                echo "<tr><td><label style=\"margin-left: 1%;\">".$row['clasificacion']."</label> </td>";
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['idherramienta']." </td>";
                echo " 		<td><label style=\"margin-left: 1%;\">".$row['descripcion']." </td>";
                echo " 		<td><label style=\"margin-left: 1%;\">".$row['criticidad']." </td>";
                echo " 		<td><label style=\"margin-left: 1%;\">".$row['posee']." </td>";    
				echo " 		<td><label style=\"margin-left: 1%;\">".$row['estado']." </td></tr>";
                }
                echo "<tr><td  COLSPAN=2 rowspan=1><label style=\"margin-left: 1%;\">NOMBRE GESTOR DE OPERACIONES QUE REALIZA AUDITORIA:</td>";
                echo " 	    <td  COLSPAN=4 rowspan=1><label style=\"margin-left: 1%;\">Cargo:</td></tr>";
                echo " 		<tr><td  COLSPAN=2><label style=\"margin-left: 1%;\">Firma</td>";
                echo "      <td  COLSPAN=4><label style=\"margin-left: 1%;\">Firma</td></tr>";
                echo " 		<tr><td COLSPAN=2 rowspan=3></td>";
                echo "      <td COLSPAN=4 rowspan=3 ><img src=\"../../../img/firma.png\" width=\"200\" align='center'></td></tr>";
			
                
            ?>
            
            </form>
        </table>
    </div>

</html>

