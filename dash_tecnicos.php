<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<section class="content-header">
    <h4>
        <i class="fa fa-th"></i> Cargar Tecnicos
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

            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-rigth">
                    <li class="active"><a href="#tab_2-2" data-toggle="tab">Importar datos (.xlsx):</a></li>
                    <li class="pull-left header"></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1-1">
                        <div class="box-body col-sm-8">
                        
                        <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Seleccione Archivo</span>
                            <!-- The file input field used as target for the file upload widget -->
                            <input id="fileupload" type="file" name="files[]" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                        </span>

                        
                        <br>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                        </div>
                        <!-- The container for the uploaded files -->
                        <div style="display: none;" id="cargador" align="center">
                            <br>
                            <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

                            <img src="../../img/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

                            <br>
                            <hr style="color:#003" width="50%">
                            <br>
                        </div>
                        <div id="carga_archivo"></div>
                        </div>
                        <div class="box-body col-sm-4">
                        <span><b>Formato de Archivo</b>
                        <p>Col A -> Rut</p>
                        <p>Col B -> Nombre</p>
                        <p>Col C -> Codigo</p>
                        <p>Col D -> Jefe Territorial</p>
                        <p>Col E -> Territorio</p>
                        <p>Col F -> Supervisor</p>
                        <p>Col G -> Rut Supervisor</p>
                        <p></p>
                        <p><label>Ademas es importante recordar que el documento no debe traer encabezado, que los registros deben comenzar de la linea 1</label></p>
                        </span>
                        </div>

                    </div>
                    <!-- /.tab-pane -->
                </div>
            </div>
        </div>
    </div>
    
</section>
                 
              
      




































              </div>
            </div>
</section>
                

