<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INTRA-Nielsen | Agendamiento</title>
    
    <link rel="stylesheet" href="/dist/css/styles.css">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load.
         bueno ahora hice un cambio en Github -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../../dist/css/jquery.fileupload.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" type="text/css" href="calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css">
    <link rel="stylesheet" type="text/css" href="calendario/css/ui-lightness/jquery-ui-1.7.2.custom.css">
    <script type="text/javascript" src="calendario/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-red sidebar-mini">
    
    <div class="wrapper">
        <!-- DIV FLOTANTE FRENTE DE PAGINA -->
        <section>
            <div id="capa_modal" class="div_modal" onclick="javascript:cerrar_div_modal()"></div>
            <div id="capa_para_edicion" class="div_contenido"></div>
        </section>
        
        <!-- Encabezado pagina -->
        <?php
            session_start();
            if (!empty($_SESSION['iduser']))
            {
                include('../../home_header.php');
            }else{
               header("location:/index.php");
            }
            session_write_close();
        ?>
      
        <!-- Menu Principal -->      
        <aside class="main-sidebar">
            <section class="sidebar">
            <?php
                include('../../home_menu.php');
            ?>
            </section>
        </aside>

        <!-- Contenido Central de Pagina -->
        <div class="content-wrapper">
            <div id="content-sidebar">
                <?php 
                    $iduser=$_SESSION['iduser'];
                    $op=$_GET['inasistencia'];
                    switch ($op) {
                        case 'listado1':        include('dash_inasistencia.php'); break;
                        case 'listado2':        include('dash_empleados.php'); break;
                        case 'listado4':        include('dash_tecnicos.php'); break;
                        case 'listado5':        include('dash_impecabilidad.php');break;
                            
                      
       
                                 }
                ?>
            </div>
        </div><!-- /.content-wrapper -->
      
      
      
        <!-- Pie de Pagina -->
        <?php 
            include('../../home_footer.php');
        ?>  

        <!-- Barra Lateral Derecha -->
        <?php 
            include('../../home_control_sidebar.php');
        ?>
      
      
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     
     <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    
    <!-- DataTables -->
    <!--<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>-->
    
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
    
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <script src="../../js/jquery.fileupload.js"></script>
    <script src="/js/sidebar.js"></script>
    <script src="../agendamiento_ordenes/ajax.js"></script>  
      
     <script language="JavaScript" type="text/javascript" src="../inasistencia/funciones/ajax.js"></script>
     
     <!--------------------------funcion up------------------------------>
      <script>
     
        
        $(function () {
            // Change this to the location of your server-side upload handler:
            var url = window.location.hostname === '' ?
                    '' : '../../disco/';

            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        $("<a href=\"#\" onclick=\"cargar_turno_excel('"+file.name+"')\" class='btn btn-primary start'></a>").text('presione para cargar archivo: '+file.name).appendTo('#carga_archivo');
                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
           
        });
        
        
    </script>
    
                                        
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
    
  </body>
</html>
