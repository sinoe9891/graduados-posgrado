<?php 
	/*
	require_once('includes/conexion.php');
	$query="SELECT * FROM `graduat3s` WHERE `programa`=0707 OR `programa` = 0077";
	
	$resultado=$mysqli->query($query);
	echo '<h4><p><strong>HEMOS ENCONTRADO ' . $resultado->num_rows . ' REGISTROS </strong></p></h4>';
	while ($f=$resultado->fetch_assoc()) {
		$query2="SELECT * FROM `graduat3s` WHERE  `estatus` LIKE 'G1' AND `apellidos` LIKE '%".$f["apellidos"]."%' AND `nombres` LIKE '%".$f["nombres"]."%' ";
		
		$resultado2=$mysqli->query($query2);
		

		while ($f2=$resultado2->fetch_assoc()) {

				$query3="UPDATE `graduat3s` SET 
								`ID`='".$f2["ID"]."',
								`clase`='".$f2["clase"]."',
								`codigo`='".$f2["codigo"]."',
								`nombres`='".$f2["nombres"]."',
								`apellidos`='".$f2["apellidos"]."',
								`pais`='".$f2["pais"]."',
								`genero`='".$f2["genero"]."',
								`programa`='".$f["programa"]."',
								`anioIA`='".$f["clase"]."',
								`codigoIA`='".$f["codigo"]."',
								`orientacion`='".$f["orientacion"]."',
								`dia_graduacion`='".$f["dia_graduacion"]."',
								`mes_graduacion`='".$f["mes_graduacion"]."',
								`estatus`='".$f["estatus"]."',
								`lugar_pasantia`='".$f2["lugar_pasantia"]."',
								`exp_pasantia`='".$f2["exp_pasantia"]."',
								`area_investigacion`='".$f2["area_investigacion"]."',
								`asesor_pasantia`='".$f2["asesor_pasantia"]."',
								`url_pasantia`='".$f2["url_pasantia"]."',
								`titulo`='".$f2["titulo"]."',
								`area_interes`='".$f2["area_interes"]."',
								`pa`='".$f["pa"]."',
								`fecha_nacimiento`='".$f["fecha_nacimiento"]."' WHERE `ID` = '".$f2["ID"]."'";
				if ($mysqli->query($query3)) {
					echo "Datos Actualizados";
					$query4 = "DELETE FROM `graduat3s` WHERE `ID` LIKE '".$f["ID"]."'";
					if ($mysqli->query($query4)) {
						echo "Dato Eliminado";
					}else{echo "ERROR: Dato NO Eliminado ".$mysqli->error;}
				}else{echo "ERROR: Datos NO Actualizados  ".$mysqli->error;}
				
				
		}
	}

*/


	
 ?>