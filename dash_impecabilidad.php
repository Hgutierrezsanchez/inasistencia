<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 </head>

   <?php
      if (empty($_SESSION['iduser']))
      {
      session_start();
      }
      $link=conectar();

      $query=mysqli_query($link,"Select nombre from tbltecnico");  ?>


   
   
   
  <style type="text/css">
        body {
            font-family: arial, verdana, sans-serif;
            font-size: 12px;
        }
  </style>
    

  <section class="content-header">
       
       
       
            <h4>
                 <i class="fa fa-th">  Evaluacion Impecabilidad:    </i>

            </h4>
 </section>
    

 <section class="content">
   <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Informe de Impecabilidad</a></li>
          <li class="tablinks"><a data-toggle="tab" href="#menu3">Evaluaciones</a></li>
        </ul>
            
        <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="box-body">
                <table class="table table-bordered table-striped">


                    <form role="form" name="formherramientas" action="" method="POST">

                    <table class="table table-bordered table-striped" border="0" , align="center" , bordercolor="white">

                     <tr>
                        <?php
                        ///include("../../includes/conexion.php");
                        $link=conectar();

                        $user=mysqli_query($link,"Select idusuario,nombre from tblusuario where idusuario = '$iduser' "); 
                        $rs=mysqli_fetch_array($user);
                        echo  "<input type=hidden  id=datos value='".$rs['nombre']."'>" ?>  
                     </tr>
                     <tr>
                        <?php
                        ///include("../../includes/conexion.php");
                        $link=conectar();


                        $user=mysqli_query($link,"Select rut,nombre from tbltecnico where supervisor='".$rs['nombre']."'");  ?>
                        <td>Tecnico</td>
                        <td><label>
                        <!--combobox con conexion a bd para cargar nombres de usuarios-->
                        <?php echo "<select name=combotecnico id=combotecnico onchange=datosselect();return false >"; ?>
                        <?php echo "<option selected='selected'>Seleccione Tecnico</option>"; ?>
                        <?php while($rs=mysqli_fetch_array($user)) { 
                        echo  "<option value='".$rs['rut']."'> ".utf8_encode($rs['nombre'])."</option>";
                                                          } 
                                echo   "</select>"; 
                                ?>        
                            </label></td>
                     </table>
                     <div id=documentos class=box-body>
                     </div>
                     <div id=documentos2 class=box-body>
                     </div> 
                    </form>

            </table>
        </div>
    </div>
        
         
      


                               
<!---------------------------------------------------------------------------------------------------------------->
<div id="menu1" class="tab-pane fade">
   <div class="box-body">
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


                    $link=conectar();

                    $consultas = "SELECT Max(idregistro) as ultimo FROM tblregistro";
                    //$consultas = "SELECT Max(iddetallereg) as ultimo FROM tbldetalleregistro";

                    $ultimo=mysqli_query($link,$consultas);

                    while ($recorrer = mysqli_fetch_array($ultimo))
                           {
                        $ul =$recorrer['ultimo'];
                        if ($ul==0){
                            $ul=1;
                        }else{
                        $ul=$ul+1;
                        }
                        
                    echo "<p> <input type= \"hidden\" name=\"textid\" value=".$ul."></td>";
                    echo "<p> <input type= \"hidden\" name=\"textfecha\" value=".date('d-m-Y H:i:s')."></td>";

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
                    <input type="submit" id="guardar" value="Evaluar" onclick="guardarevaluacion(); return false"> 
                    </td>
                </tr>
            </form>
                <div id="otros">
                </div>
        </table>
    </div>
</div>


<!----------------------------------------------------------------------------------------------------------------->


<!----------------------------------------------------------------------------------------------------------------->
 <div id="menu3" class="tab-pane fade">
  <div class="box-body">
    <table class="table table-bordered table-striped" id="tblrevisar">
      <form name="formrevisar" action="" method="POST">
        <tr>
          <td>Revisar por Fecha </td>
            <td>
               <input name="fecha" type="text" id="fecha" size="auto" value="<?php echo date('d/m/Y');?>" size="10">
               <buton>
               <img src="calendario/cal.gif" alt="calendario" onclick="displayCalendar(formrevisar.fecha,'dd/mm/yyyy',this)" /> </buton>
            </td>
 
        </tr>
        <input type="submit" id="btnfecha" name="Submit" value="Revisar Fecha"  a data-toggle="tab" onclick="cargarfecha(); return false" href="">
                           
        <input type="submit" id="btnrevisartodas" name="Submit" value="Revisar Todas " a data-toggle="tab" href="#menu4">
                            
                            
      </form>
      <div id="otros" class="box-body">
      </div>
    </table>
    <div id="mostrar" class="box-body">
    </div>
  </div>
</div>
                         
                         

                        
 <div id="menu4" class="tab-pane fade">
      <div class="box-body">
       <table class="table table-bordered table-striped" id="tblrevisar2">
            <form name="formrevisado" action="" method="POST">
                <tr>
                    <td>Rut Tecnico</td>
                    <td>Nombre Tecnico</td>
                    <td>Nombre Supervisor</td>
                    <td>Zona</td>
                    <td>Fecha</td>
                    <td>Vehiculo</td>
                    <td>Patente</td>
                    <td>Descripcion</td>
                </tr>
                    <?php
                        $link=conectar();               
                        $consulta5="Select tblregistro.`*`,tbltecnico.nombre,tbltecnico.supervisor from tblregistro inner join tbltecnico on tblregistro.ruttecnico=tbltecnico.rut where estado='realizada'";
                        $sql=mysqli_query($link,$consulta5);


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
                            echo "<button type=\"button\" a data-toggle=\"tab\" href=\"#menu5\" onclick=\"verherramientas('".$row['idregistro']."')\">Revisar </button>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='../pdf_word/output_pdf.php?id=".$row['idregistro']."&archivo=epp' target='_blank'><img src='../../../img/pdf.png' width='25' \></a></td>";
                            echo "</td>";
                            echo " </tr>";

                        }

                          mysqli_close($link);
                        ?>
                        


                        <input type="submit" id="btnprobar"name="Submit" value="Revisar Fecha " onclick="cargardato() return false" a data-toggle="tab" href="#menu3">

                        <input type="submit" id="btnrevisartodas"name="Submit" value="Revisar Todas " onclick="cargardato() return false" a data-toggle="tab" href="#menu4">


           </form>
           <div id="otros">
           </div>
           <div id="nuevo" class="box-body">
           </div>
       </table>
    </div>
</div>
                       
                       <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                       
                       
        <div id="menu5" class="tab-pane fade">
         <div class="box-body" id="divherramientas">
         </div>
            </div>                  
</div>
</div>    
</section>
</html>














