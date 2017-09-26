<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<section class="content-header">
  <h4>
    <i class="fa fa-th"></i> AGENDAMIENTOS ROMA
  </h4>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
            
<div class="box-body">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-rigth">
          <li class="active"><a href="#tab_2-2" data-toggle="tab"><?php $fecha ?>TURNOS</a></li>
          <li class="pull-left header"></li>
        </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="tab_1-1">
    <div class="callout callout-info"><h4>Turnos</h4>
    </div>
    </div><!-- /.tab-pane -->

<?php
$link=conectar();

$user=mysqli_query($link,"Select rut,nombre from tblusuario where admin=0 and estado=1 order by nombre");  ?>


<form name="inasistencia" action="" method="POST">
    <p>
     <p>
      <table border="0" , align="center" , bordercolor="white">
        <tr>
            <h2>Usuarios</h2>
        <br>
            <td><label>Nombre</label></td>
             <td>
               <div></div>
             </td>
             <td>
               <div></div>
             </td>
             <td><label>
             <?php echo "<select name=datos id=datos; >"; ?>
             <?php echo "<option selected='selected'>Seleccione Nombre</option>"; ?>
             <?php while($rs=mysqli_fetch_array($user)) { 
             echo  "<option value='".$rs['rut']."'> ".utf8_encode($rs['nombre'])."</option>";
             } 
             echo   "</select>";
             ?>        
             </label>
             </td>
                <tr>
                  <td>Tipo inasistencia</td>
                  <td>
                    <div></div>
                  </td>
                  <td><input name="prub3" type="hidden" value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" /></td>
                  <td>
                    <SELECT id="inasistencias" NAME="inasistencias" SIZE="auto" border="1"> 
                      <OPTION>Con Licencia    </OPTION>
                      <OPTION>Permiso  </OPTION>
                      <OPTION>Falla  </OPTION> 
                    </SELECT>
                  </tr>
                  <tr>
                     <td>Descripcion</td>
                     <td>
                       <div></div>
                     </td>
                     <td>
                          <div></div>
                     </td>
                    <td><textarea id="descripcion" name="descripcion" maxlength="50" wrap="soft" required=true></textarea></td>
                   </tr>
                     <tr>
                       <td>Desde</td>
                       <td>
                       <div></div>
                       </td>
                       <td>
                       <div></div>
                       </td>
                       <td>
                       <input name="iddesde" type="date" id="iddesde" size="auto" value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" />
                       <buton>
                       <img src="calendario/cal.gif" alt="calendario" onclick="displayCalendar(document.forms[0].iddesde,'dd/mm/yyyy',this)" />
                       </buton>
                       </td>
                       <td>Hasta</td>
                       <td>
                       <div></div>
                       </td>
                       <td>
                        <div></div>
                       </td>
                       <td><label>
                       <input name="idhasta" type="text" id="idhasta" size=auto value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" />
                       <buton>
                       <img src="calendario/cal.gif" alt="calendario" onclick="displayCalendar(document.forms[0].idhasta,'dd/mm/yyyy',this)" /></buton> 
                       </label></td>
                        </tr>
                          <tr>
                            <p>
                              <td><input type="submit" name="Submit" value="guardar" onclick="guardar(); return false" /></td>
                              <td><input name="prub" type="hidden" value="<?php echo date('d/m/Y');?>" size="10" readonly="readonly" /></td>
                            </p>
    </table>
</form>
    <div id="otros">
    </div>
                                    
                                    
<script>

    
    
function validacion(){
    
    $.ajax({
        method: "POST",
        url: "/intranielsen/includes/validausuario.php",
        data:{ vehiculo: $('input[name=textvehiculo]').val(), patente: $('input[name=textpatente]').val(), descripcion: $('input[name=textdescripcion]').val()}
    }).done(function(datosrecuperados){
            if (datosrecuperados==1){
        var ruta="/intranielsen/home.php";
        window.location=ruta;
    }else if (datosrecuperados==2) {
        var result;
        result='<div id="alert" class="alert alert-danger alert-dismissable">';
        result+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>';
        result+='<h4>Alerta!</h4>';
        result+='Debe completar los datos para ingresar...';
        result+='</div>';
        document.getElementById('message').innerHTML=result;
        
    }else {
        var result;
        result='<div id="alert" class="alert alert-danger alert-dismissable">';
        result+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>';
        result+='<h4>Alerta!</h4>';
        result+='Las credenciales ingresadas no son validas...';
        result+='</div>';
        document.getElementById('message').innerHTML=result;
    }
}).error(function(xhr,ajaxOptions, thrownError){
        alert(xhr.responsetext)
    });
    }                    
                                    
</script>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

    
