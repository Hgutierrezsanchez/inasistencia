<?php
include("../../../includes/conexion.php");
$linkr=conectar();





$fecha=$_POST['fechas'];
$fecha=substr($fecha,6,4).substr($fecha,3,2).substr($fecha,0,2);


$consulta1 = "select * from tbldetreg";
$sql=mysqli_query($linkr,$consulta1);
	
mysqli_close($linkr);


?>
  <div class="box-tools">
    <table  class="table table-bordered table-striped" id="tblrevisar">
     <form name="formrevisar2" action="" method="POST">
        <tr>
          <td> Rut Tecnico</td>
          <td> Nombre Tecnico</td>
          <td> Nombre Supervisor</td>
          <td> Zona</td>
          <td> Fecha de Evaluacion</td>
          <td> Vehiculo</td>
          <td> Patente</td>
          <td> Descripcion</td>
          </tr>
           <?php
                
                $link=conectar();               
                $consulta3="Select tblregistro.`*`,tbltecnico.nombre,tbltecnico.supervisor from tblregistro inner join tbltecnico on tblregistro.ruttecnico=tbltecnico.rut where fecha='$fecha' and estado='realizada'";
                $sql=mysqli_query($link,$consulta3);
                       
                    
                while($row = mysqli_fetch_array($sql)){

   
                    echo "	<tr>";
               
                    echo "<td>".$row['ruttecnico']."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['supervisor']."</td>";
                    echo "<td>".$row['zona']."</td>";
                    echo "<td>".$row['fecha']."</td>";
                    echo "<td>".$row['vehiculo']."</td>";
                    echo "<td>".$row['patente']."</td>";
                    echo "<td>".$row['descripcion']."</td>";
                    echo "<td>";
                    echo "<button type=\"button\" a data-toggle=\"tab\" href=\"#menu5\" onclick=\"verherramientasporfecha('".$row['idregistro']."')\">Revisar </button>";
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='../pdf_word/output_pdf.php?id=".$row['idregistro']."&archivo=epp' target='_blank'><img src='../../../img/pdf.png' width='25' \></a></td>";
                    echo "</td>";
                    
                    echo " </tr>";
                    
                }
                
                  mysqli_close($link);
                ?>
    </form>
 </table>
</div>