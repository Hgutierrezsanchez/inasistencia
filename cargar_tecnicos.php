<?php 
	extract($_POST);
	if ($_POST['archivo'] != "")
	{
        
        $archivo=$_SERVER["DOCUMENT_ROOT"]."disco/turnos/".$archivo;
       
        
          
		if (file_exists ($archivo))
		{ 
			/** Clases necesarias */
			require_once('../Classes_excel/PHPExcel.php');
			require_once('../Classes_excel/PHPExcel/Reader/Excel2007.php');

			// Cargando la hoja de cálculo
			$objReader = new PHPExcel_Reader_Excel2007();
			$objPHPExcel = $objReader->load($archivo);
			$objFecha = new PHPExcel_Shared_Date();       

			// Asignar hoja de excel activa
			$objPHPExcel->setActiveSheetIndex(0);

			//conectamos con la base de datos 
			include("../../includes/conexion.php");
			$linkt=conectar();
			
			echo "Conectando a la base....";
			
			$i=1;
			$param=0;
            $rut="";
            
			while ($param==0){
                
				//echo $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue(); 
				if ($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue()!=NULL)
				{ 
                    if ($rut != $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue())
                      {
                        $rut = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                        $query="insert into tbltecnico(rut,nombre,codigo,jefe_territorial,territorio,supervisor,rut_supervisor)select nombre,'Nuevo turno cargado',0,DATE(now()) from tbltecnicos where rut='".$rut."'";
                        mysqli_query($linkt,$query);
                       
                    }
					$rut = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
					$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getvalue();
					$codigo=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getvalue();
                    $jefeterritorial=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getvalue();
                    $territorio=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getvalue();
                    $supervisor=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getvalue();
                    $rutsupervisor=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getvalue();
                    
					
				
					
					//$query="Delete from tblturnos Where Rut='$rut' And fecha=$fecha";
					//echo $query;
					mysqli_query($linkt,$query);
					
					$query="Insert Into tbltecnico(rut,nombre,codigo,jefe_territorial,territorio,supervisor,rut_supervisor) values('$rut','$nombre','$codigo','$jefeterritorial','$territorio','$supervisor','$rutsupervisor')";
					mysqli_query($linkt,$query);
					
				}else{
				$param=1;
				}
				$i++;
			}
            mysqli_close($linkt);
            unlink($archivo);
            
			if ($i>1)
            {
                $i=$i-2;
                echo "<br />";
                echo "<div class='callout callout-success'>";
                    echo "<p>Carga Finalizada...</p>";
                    echo "<p>Total de registros importados ".$i."</p>";
                echo "</div>";
            }else{
                echo "<br />";
                echo "<div class='callout callout-danger'>";
                    echo "A ocurrido un error al tratar de cargar el archivo... registros importados ".$i." intente nuevamente.";
                echo "</div>";    
            }
			
		}else{
            echo "<br />";
            echo "<div class='callout callout-danger'>";
                echo "A ocurrido un error al tratar de cargar el archivo... intente nuevamente.";
            echo "</div>";
        }
	}
?>