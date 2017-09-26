<head>
   <script src="jquery-1.4.2.min.js" type="text/javascript"></script>
   <script src="jquery.validate.js" type="text/javascript"></script>
   </head>
<div class="box-tools">
 <table class="table table-bordered table-striped" id="tbldatos">
    <tr>
        <form name="formdatos" action="" method="POST">
           <?php
             if (empty($_SESSION['iduser']))
               {
               session_start();
               }

                
               include("../../../includes/conexion.php");
               $link=conectar();
               $seleccion=$_POST['seleccion'];
               $consulta = "SELECT * FROM tbltecnico where rut='$seleccion'";
               $sql=mysqli_query($link,$consulta);
               while($row = mysqli_fetch_array($sql)){

   
                    echo "	<tr>";
                    echo "<td>Supervisor</td>";
                    echo "<p><td><input type=\"text\" id=\"textsupervisor\" size=\"50\" name=\"textsupervisor\" value=".$row['supervisor']." readonly></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Zona</td>";
                    echo "<p><td><input type=\"text\" id=\"textzona\" size=\"50\" name=\"textzona\" value=".$row['territorio']." readonly></td>";
                    echo "</tr>";
                     echo "<tr>";
                    echo "<td>Fecha</td>";
                    echo "<p><td><input type=\"text\" id=\"textfecha\" size=\"50\" name=\"textfecha\" value=".date('d-m-Y H:i:s')." readonly></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Vehiculo</td>";
                    echo "<p><td><input type=\"text\" id=\"textvehiculo\" size=\"50\" name=\"textvehiculo\" required=\"true\"></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Patente</td>";
                    echo "<p><td><input type=\"text\" id=\"textpatente\" size=\"50\" name=\"textpatente\" placeholder=\"Patente XXYY-23\"></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Descripcion</td>";
                    echo "<td><textarea id=\"descripciones\" name=\"descripciones\" maxlength=\"50\" wrap=\"soft\"></textarea></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td COLSPAN=2><input type=\"submit\" id=\"evaluacion\" onclick=\"guardarregistro();return false\" value=\"Realizar Evaluacion\"  a data-toggle=\"tab\"  href=\"#menu1\"></td>";
                    echo "<p><td><input type=\"hidden\" id=\"textrutsupervisor\" size=\"50\" name=\"textrutsupervisor\" value=".$row['rut_supervisor']."></td>";               echo "</tr>";
                echo  "</tr>";
                    
                }
               
                mysqli_close($link);
                ?>                        
        </form>
    </table>
    </div>     
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       <!--echo "<p> <input type= \"hidden\" name=\"idxtext2\" value=".date('d-m-Y H:i:s')."></td>";
       
       
       
       
       
       
       <tr>
        <td>Supervisor</td>
        <td><input type="text" id="textsupervisor" size="50" name="textsupervisor"></td>
        </tr> 
        <tr>
        <td>Zona</td>
        <td><input type="text" id="textzona" size="50" name="textzona"></td>
        </tr>
        <tr>
        <td>Fecha</td>
        <td><input type="text" id="textfecha" size="50" name="textfecha"></td>
        </tr>
        <tr>
        <td>Vehiculo</td>
        <td><input type="text" id="textvehiculo" size="50" name="textvehiculo"></td>
        </tr>                                             
        <tr>
        <td>Patente</td>
        <td><input type="text" id="textpatente" size="50" name="textpatente"></td>
        </tr>
        <tr>
        <td>Descripcion</td>
        
         </tr> 
         
         <td COLSPAN=2><input type="submit" id="evaluacion" value=" Realizar Evaluacion"  a data-toggle="tab"  href="#menu1"></td>-->