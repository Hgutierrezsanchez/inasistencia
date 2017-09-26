<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<section class="content-header">
    <h4>
    <i class="fa fa-th"></i> Empleados
    </h4>
    </section>

        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            
             <div class="box-body">
              
             <!-- Custom Tabs (Pulled to the right) 
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-rigth">
                  <li class="active"><a href="#tab_2-2" data-toggle="tab"><?php $fecha ?>TURNOS</a></li>
                
                  <li class="pull-left header"></li>
              
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <div class="callout callout-info"><h4>Turnos</h4></div>
                  
                    <div id="bloque_agendamiento">
                        <?php //include('muestra_bloques.php') ?>
                    </div>
                  </div><!-- /.tab-pane -->

<?php
///include("../../includes/conexion.php");
$link=conectar();

$user=mysqli_query($link,"Select rut,nombre from tblusuario where admin=0 and estado=1 order by nombre");  ?>


    <form name="empleados" action="" method="POST">

        <!--<td><input id=rutt name="rutt" type="text" /></td>
  <td><input type="submit" name="Submit" value="Cargar" size="5" onclick="cargardatos(); return false"/></td>
  <td><input type="submit" name="Submit" size="7" value="Ver faltas" /></td>-->

        <p>
            <p>
                <table class="table table-bordered table-striped" border="0" , align="center" , bordercolor="white">
<tr>
    <td>Rut</td>
    <td><input name="rut" type="text" required></td>
</tr>
<tr>
    <td>Nombre</td>
    <td><input name="nombre" type="text" required></td>
</tr>
               <tr>
    <td>Apellido</td>
    <td><input name="apellido" type="text" required></td>
</tr>
<tr>
    <td>Direccion</td>
    <td><input name="direccion" type="text" required></td>
</tr>
<tr>
    <td>Correo</td>
    <td><input name="correo" type="text" required></td>
</tr>
<tr>
    <td>Telefono</td>
    <td><input name="telefono" type="text" required></td>
</tr>
<tr>
    <td>Cargo</td>
    <td><input name="cargo" type="text" required></td>
</tr>
<tr>
    <td>Fecha Ingreso</td>
    <td><input name="idfechaingreso" type="text" id="idfechaingreso" size=auto value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" />
    <buton>
        <img src="calendario/cal.gif" alt="calendario" onclick="displayCalendar(document.forms[0].idfechaingreso,'dd/mm/yyyy',this)" /></buton></td>
    
</tr>
<tr>
    <td>Fecha Nacimiento</td>
    <td><input name="idfechanacimiento" type="text" id="idfechanacimiento" size=auto value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" />
    <buton>
        <img src="calendario/cal.gif" alt="calendario" onclick="displayCalendar(document.forms[0].idfechanacimiento,'dd/mm/yyyy',this)" /></buton></td>
    
</tr>
<tr>
     <td><input type="submit" name="Submit" value="guardar" onclick="guardarempleado(); return false" /></td>
    
</tr>
                
             
                </table>






    </form>
    <div id="otros">
        <?php
/*include("regusuarios/consulta.php");
*/
?>
    </div>
              </div>
            </div>
</section>
