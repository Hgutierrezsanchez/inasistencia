function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function guardarempleado() {

    divotros = document.getElementById('otros');
    
    

    rut = document.empleados.rut.value;
    nombre = document.empleados.nombre.value;
    apellido = document.empleados.apellido.value;
    direccion = document.empleados.direccion.value;
    correo = document.empleados.correo.value;
    telefono = document.empleados.telefono.value;
    cargo = document.empleados.cargo.value;
    fechaingreso = document.empleados.idfechaingreso.value;
    fechanacimiento = document.empleados.idfechanacimiento.value;

    ajax = objetoAjax();
    ajax.open("POST", "funciones/guardarempleado.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            divotros.innerHTML = ajax.responseText
            alert("Datos guardados correctamente");

        }else{
            alert("No se han guardado los datos");
        }

    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("rut=" + rut + "&nombre=" + nombre + "&apellido=" + apellido + "&direccion=" + direccion + "&correo=" + correo + "&telefono=" + telefono + "&cargo=" + cargo + "&fechaingreso=" + fechaingreso + "&fechanacimiento=" + fechanacimiento);
    limpiar();

}

function limpiar(){
    
    document.empleados.rut.value=""
    document.empleados.nombre.value=""
    document.empleados.apellido.value=""
    document.empleados.direccion.value=""
    document.empleados.correo.value=""
    document.empleados.telefono.value=""
    document.empleados.cargo.value=""
}

function cargar_turno_excel(archivo){
   
    divResultado = document.getElementById('carga_archivo');
   
    
    $("#carga_archivo").html($("#cargador").html());
    
    ajax = objetoAjax();
    ajax.open("POST", "../../app/inasistencia/cargar_tecnicos.php", true);
    
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alert(divResultado);
            divResultado.innerHTML = ajax.responseText;
        }
        
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("archivo=" + archivo);
    
}


function guardarevaluacion() {
        
    var checks=document.forms['formverherramientas'].elements['check'];
    var box=document.forms['formverherramientas'].elements['estado'];
    var id=document.forms['formverherramientas'].elements['idhtext'];
    var checkboxes=[];
    var combo=[];
    var idx=[];
    

    
    if (checks.length != undefined) {
        for (var i = 0; i < checks.length; i++) {
            if (checks[i].checked) {
                combo.push(box[i].value);
                idx.push(id[i].value);
                arrayid=document.formverherramientas.textid.value;
                fecha=document.formverherramientas.textfecha.value;
           
                
                
                arrayestado = combo;
                arrayidx = idx;
                valorcombo = ("SI");
            }else{
                combo.push(box[i].value);
                idx.push(id[i].value);
                arrayid=document.formverherramientas.textid.value;
                fecha=document.formverherramientas.textfecha.value;
           
                
                
                arrayestado = "NO APLICA";
                arrayidx = idx;
                valorcombo = ("NO")
                
                
            }
                
                ajax=objetoAjax();
                ajax.open("POST", "funciones/guardarrevisionherramienta.php", true);


                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 0) {
                    }

                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("arrayid=" +arrayid+ "&arrayidx=" + arrayidx + "&valorcombo=" + valorcombo + "&arrayestado=" + arrayestado+ "&fecha="+ fecha);
                
                combo.length = 0;
                idx.length=0;
                 
                }
           
        }
        alert("Datos Guardados Correctamente");
        agregardato(arrayid);
        eliminarregistro();
        error
    }
    
               
function cargarfecha(){
    
    fecha=document.formrevisar.fecha.value;
    
    
    divotros = document.getElementById("mostrar");

	ajax=objetoAjax();   
	ajax.open("POST", "funciones/listarregistroporfecha.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {	
			divotros.innerHTML = ajax.responseText
			divotros.style.display="block";
		}
	}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("fechas="+fecha);
	

}
function verherramientas(idregistro){
    
    
   
   divotros=document.getElementById("divherramientas");
    
   ajax=objetoAjax();   
   ajax.open("POST", "funciones/listarherramienta.php",true);
   ajax.onreadystatechange=function() {
   if (ajax.readyState==4) {	
   divotros.innerHTML = ajax.responseText
   divotros.style.display="block";
   }
   }
   ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
   ajax.send("idh="+idregistro);
       
}

function verherramientasporfecha(idregistro){
    
    
    divotros=document.getElementById("divherramientas");
    
    ajax=objetoAjax();   
    ajax.open("POST", "funciones/listarherramientaporfecha.php",true);
    ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {	
    divotros.innerHTML = ajax.responseText
    divotros.style.display="block";
    }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("idh="+idregistro);
       
}



function datosselect(){
    
    var seleccion=document.getElementById('combotecnico').value;
    
    divotros=document.getElementById("documentos2");
    
    ajax=objetoAjax();   
    ajax.open("POST", "funciones/listardatotecnico.php",true);
    ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {	
    divotros.innerHTML = ajax.responseText
    divotros.style.display="block";
    }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("seleccion="+seleccion);
   
}

function guardarregistro() {
    
  
    ruttecnico=document.formherramientas.combotecnico.value;
    rutsupervisor=document.getElementById('textrutsupervisor').value;
    zona=document.getElementById('textzona').value;
    fecha=document.getElementById('textfecha').value;
    vehiculo=document.getElementById('textvehiculo').value;
    patente=document.getElementById('textpatente').value;
    descripcion=document.getElementById('descripciones').value;
 
    
        ajax=objetoAjax();   
        ajax.open("POST", "funciones/guardardatosregistro.php",true);
        ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {	
        divotros.innerHTML = ajax.responseText
        divotros.style.display="block";
        }
        }
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.send("ruttecnico="+ruttecnico+ "&rutsupervisor="+rutsupervisor+ "&zona="+zona+ "&fecha="+fecha+ "&vehiculo="+vehiculo+ "&patente="+patente+ "&descripcion="+descripcion);

}


function agregardato(arrayid){
    
    
    ajax=objetoAjax();   
    ajax.open("POST", "funciones/agregardato.php",true);
    ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {	
    divotros.innerHTML = ajax.responseText
    divotros.style.display="block";
    }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("arrayid="+arrayid);
        
}

function eliminarregistro(){
    
    pendiente="pendiente"
    ajax=objetoAjax();   
    ajax.open("POST", "funciones/eliminardato.php",true);
    ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {	
    divotros.innerHTML = ajax.responseText
    divotros.style.display="block";
    }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("pendiente="+pendiente);   
}












  
    
    
    
    
    


    
    
    
    
    
  
    

