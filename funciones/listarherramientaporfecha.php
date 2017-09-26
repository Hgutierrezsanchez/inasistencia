
<?php
include("../../../includes/conexion.php");
$linkr=conectar();



$consulta1 = "select * from tbldetreg";
$sql=mysqli_query($linkr,$consulta1);
	
mysqli_close($linkr);


?>
<div class="box-tools">
 <table  class="table table-bordered table-striped" id="tbllistar2">
  <form name="formlistar2" action="" method="POST">
    <input type="submit" id="atrasreg"name="Submit" value="Atras " a data-toggle="tab" href="#menu3">
        <tr>
            <td> Codigo de Herramienta</td>
            <td> Nombre Herramienta</td>
            <td> Posee</td>
            <td> Estado</td>
            <td> Fecha de Revision</td>
           
        </tr>
            <?php
                $link=conectar();   
                $idregistro=$_POST['idh'];
                $consulta3="Select tbldetreg.* ,tblherramientas.nombre from tbldetreg INNER JOIN tblherramientas ON tbldetreg.idherramienta=tblherramientas.idh where tbldetreg.iddetreg='$idregistro'";
                
                $sql=mysqli_query($link,$consulta3);    
               
                    
                while($row = mysqli_fetch_array($sql)){

   
                    echo "	<tr>";
               
                    echo "<td>".$row['idherramienta']."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['posee']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['fecharevision']."</td>";
                    
                    
                }
                
                  mysqli_close($link);
                ?>
           
    </form>
 </table>
</div>