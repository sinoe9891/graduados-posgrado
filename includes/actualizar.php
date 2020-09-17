<?php

	require_once('session.php');

	if (!empty($_POST)) {
		require_once('conexion.php');
		print_r($_POST);

		$programa='';
		$orientacion='';
		switch ($_POST['programaAcademico']) {
		    case '0077':
		        $programa='0077';
		        break;
		    case '0707':
		        $programa='0707';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '0007':
		        $programa='0007';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '0777':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07771':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07772':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07773':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '07774':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		    case '077741':
		        $programa='0777';
		        $orientacion=$_POST['orientacion'];
		        break;
		}

		if ($_POST['genero']=='FEMENINO') {
			$_POST['genero']='F';
		}elseif ($_POST['genero']=='MASCULINO') {
			$_POST['genero']='M';
		}
		if ($_POST['deceased']=='SI') {
			$_POST['deceased']='1';
		}elseif ($_POST['deceased']=='NO') {
			$_POST['deceased']='0';
		}
		print_r($programa.' - '.$orientacion);

		 // <option value="0077">AGRONOMO</option>
   //                  <option value="0707">AGRONOMO - PIA</option>
   //                  <option value="0007">AGRONOMO - PPIA</option>
   //                  <option value="0777">INGENIERO AGRONOMO</option>
   //                  <option value="07771">INGENIERIA AGRONOMICA</option>
   //                  <option value="07772">INGENIERO EN AGROINDUSTRIA ALIMENTARIA</option>
   //                  <option value="07773">INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS</option>
   //                  <option value="07774">INGENIERO EN DESARROLLO SOCIOECONOMICO Y AMBIENTE</option>
   //                  <option value="077741">INGENIERO EN AMBIENTE Y DESARROLLO</option>



		$sql = "UPDATE `graduat3s` SET `ID` = '{$_POST['ID']}', `codigo` = '{$_POST['codigo']}', `nombres` = '{$_POST['nombres']}', `apellidos` = '{$_POST['apellidos']}', `nacionalidad` = '{$_POST['nacionalidad']}', `genero` = '{$_POST['genero']}', `programa` = '$programa', `orientacion` = '$orientacion', `dia_graduacion` = '{$_POST['diaGraduacion']}', `mes_graduacion` = '{$_POST['mesGraduacion']}', `deceased` = '{$_POST['deceased']}', `date_deceased` = '{$_POST['date_deceased']}',  `pais_reside` = '{$_POST['pais_reside']}',  `ciudad` = '{$_POST['ciudad']}', `estatus` = '{$_POST['estatus']}', `lugar_pasantia` = '{$_POST['lugarPasantia']}', `direccion_pasantia` = '{$_POST['direccion_pasantia']}', `rubro_empresa` = '{$_POST['rubro_empresa']}', `exp_pasantia` = '{$_POST['exp_pasantia']}', `area_interes` = '{$_POST['area_interes']}', `nickname` = '{$_POST['nickname']}', `asesor_tesis` = '{$_POST['asesor_tesis']}', `url_tesis` = '{$_POST['url_tesis']}', `titulo_tesis` = '{$_POST['titulo_tesis']}', `fecha_nacimiento` = '{$_POST['fechaNacimiento']}', `financiado_por` = '{$_POST['financiado_por']}', `otras_entidades` = '{$_POST['otras_entidades']}', `direccion` = '{$_POST['direccion']}', `email` = '{$_POST['email']}', `email_2` = '{$_POST['email_2']}', `email_3` = '{$_POST['email_3']}', `empresa_labora` = '{$_POST['empresa_labora']}', `rubros` = '{$_POST['rubros']}', `telefono` = '{$_POST['telefono']}', `movil` = '{$_POST['movil']}' WHERE `graduat3s`.`ID` = '{$_POST['ID']}'";

		if ($mysqli->query($sql) === TRUE) {
		    header("Location: ../busqueda-avanzada.php?apellidosInput=".$_POST['apellidos'], true);
		} else {
		    echo "Error updating record: " . $mysqli->error;
		}

		$mysqli->close();
	}





 ?>
