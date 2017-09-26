 
 <div class="box-tools">
        <table class="table table-bordered table-striped" id="tbldatos">
            <tr>
                
                <td> Nombre</td>
                <td> Descripcion</td>
                <td> Clasificacion</td>
                <td> Criticidad</td>
                <td> Tipo Formulario</td>
                <td> Posee</td>
                <td> Estado</td>
                
         

            <form name="formverherramientas" action="" method="POST">
                <?php

                if (empty($_SESSION['iduser']))
                {
                session_start();
                }

                
                include("../../../includes/conexion.php");
                $link=conectar();
                
                $consultas = "SELECT Max(iddetreg) as ultimo FROM tbldetreg";
                //$consultas = "SELECT Max(iddetallereg) as ultimo FROM tbldetalleregistro";
                
                $ultimo=mysqli_query($link,$consultas);
                
                while ($recorrer = mysqli_fetch_array($ultimo))
                       {
                    $ul =$recorrer['ultimo'];
                    $ul= $ul+1;
                echo "<p> <input type= \"hidden\" name=\"idxtext\" value=".$ul."></td>";
                echo "<p> <input type= \"hidden\" name=\"idxtext2\" value=".date('d-m-Y H:i:s')."></td>";
                    
                }
          
                $consulta1 = "SELECT * FROM tblherramientas";
                

                $sql=mysqli_query($link,$consulta1);
                
                
               
                
                $query_perfil="Select distinct idh from tblherramientas";
                
           
              //  $consulta2 = "select iddetallereg from tbldetalleregistro order by iddetallereg desc limit 1";
               
               
                    
                while($row = mysqli_fetch_array($sql)){

   
                    echo "	<tr>";
               
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['descripcion']."</td>";
                    echo "<td>".$row['clasificacion']."</td>";
                    echo "<td>".$row['criticidad']."</td>";
                    echo "<p> <input type= \"hidden\" id=\"idhtext\" name=\"idhtext\" value=".$row['idh']."></td>";
                    echo "<td>".$row['tipoformulario']."</td>";
                    
                     
               
                ?>
               
                    <td><p><input type="checkbox" id="check" name="check">
                    <td><SELECT id="estado" NAME="estado" SIZE="auto"> 
                    <OPTION>Bueno</OPTION>
                    <OPTION>Regular</OPTION>
                    <OPTION>Malo</OPTION> 
                    <OPTION>Extraviada</OPTION>
                    </SELECT></td>
                    
                <?php  echo  "</tr>";
                    
                }
               
                mysqli_close($link);
                ?>                         
                       
                       
                        </p>
                </td>
                    

                    <tr>
                        <td COLSPAN=5>
                            <input type="submit" name="Submit" value="  Atras " a data-toggle="tab" href="#home">
                            <input type="submit" name="Submit" value=" Siguiente " a data-toggle="tab" href="#menu2">
                              <input type="submit" id="guardar" value="Evaluar" onclick="prub1(); return false()"> 
                         </td>
                    </tr>
                 </form>
        </table>
    </div>

            
 

