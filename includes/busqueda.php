<?php
// Aqui validamos si la variable $_GET["busca"] existe como validacion
 // Si es que esta cargando la pagina o haciendo una bsuqueda.
if(empty($_GET))
{
 ?>
 <div align="center">
 <?php
 echo '<h3><p><strong>ENTER TO SEARCH</strong></p></h3>';;
   // si es una Busqueda entrara en este siguente IF lo cual iniciara el proceso
}elseif(!empty($_GET)){
   // Sustituimos caracteres especiales para que el servidor no lo determine como codigo
    // $busca=htmlspecialchars($_GET["busca"]);
     //  Validacion interna de lo valores en el campo de busqueda
     require_once('conexion.php');
     $query="";
     foreach ($_GET as $key => $value) {
       switch ($key) {
         case 'codigoInput':
               if ($query=="") {
                 $query= $query." codigo LIKE '%".$value."%'";
               }else{
                $query= $query." AND codigo LIKE '%".$value."%'";
               }
           break;
         case 'nombresInput':
               if ($query=="") {
                 $query= $query." nombres LIKE '%".$value."%'";
               }else{
               $query= $query." AND nombres LIKE '%".$value."%'";
               }
           break;
         case 'apellidosInput':
               if ($query=="") {
                 $query= $query." apellidos LIKE '%".$value."%'";
               }else{
               $query= $query." AND apellidos LIKE '%".$value."%'";
               }
           break;
           case 'claseInput':
               if ($query=="") {
                 $query= $query." clase LIKE '%".$value."%'";
               }else{
               $query= $query." AND clase LIKE '%".$value."%'";
               }
           break;
           case 'carreraInput':
               // if ($value=='0777' || $value=='07771' || $value=='07772' || $value=='07773' || $value=='07774' || $value=='077711' || $value=='077721' || $value=='077731' || $value=='077741') { $carrera='0777'; }

               switch ($value) {
                 case '07771':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERIA AGRONÓMICA'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERIA AGRONÓMICA'";
                     }
                   break;
                 case '07772':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN AGROINDUSTRIA ALIMENTARIA'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN AGROINDUSTRIA ALIMENTARIA'";
                     }
                   break;
                 case '07773':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS'";
                     }
                   break;
                 case '07774':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN AMBIENTE Y DESARROLLO'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'INGENIERO EN AMBIENTE Y DESARROLLO'";
                     }
                   break;
                 case '077721':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'AGROINDUSTRIA'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'AGROINDUSTRIA'";
                     }
                   break;
                 case '077731':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'GESTION DE AGRONEGOCIOS'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'GESTION DE AGRONEGOCIOS'";
                     }
                   break;
                 case '077741':
                     $carrera='0777';
                    if ($query=="") {
                       $query= $query." programa LIKE '%".$carrera."%' AND orientacion LIKE 'DESARROLLO SOCIOECONOMICO Y AMBIENTE'";
                     }else{
                     $query= $query." AND programa LIKE '%".$carrera."%' AND orientacion LIKE 'DESARROLLO SOCIOECONOMICO Y AMBIENTE'";
                     }
                   break;
                   default:
                    $carrera=$value;
                     if ($query=="") {
                         $query= $query." programa LIKE '%".$carrera."%'";
                       }else{
                       $query= $query." AND programa LIKE '%".$carrera."%'";
                       }
                     break;


               }
// value="07771">INGENIERIA AGRONÓMICA</option>
// value="07772">INGENIERO EN AGROINDUSTRIA
// value="07773">INGENIERO EN ADMINISTRACION DE
// value="07774">INGENIERO EN AMBIENTE Y
// value="077711">INGENIERIA AGRONÓMICA</option>
// value="077721">AGROINDUSTRIA</option>
// value="077731">GESTION DE AGRONEGOCIOS</option
// value="077741">DESARROLLO SOCIOECONOMICO Y
           break;
           case 'paisInput':
               if ($query=="") {
                 $query= $query." nacionalidad LIKE '%".$value."%'";
               }else{
               $query= $query." AND nacionalidad LIKE '%".$value."%'";
               }
           break;
           case 'generoInput':
               if ($query=="") {
                 $query= $query." genero LIKE '%".$value."%'";
               }else{
               $query= $query." AND genero LIKE '%".$value."%'";
               }
           break;
           case 'cumpleanosInput':
               if ($query=="") {
                 $query= $query." fecha_nacimiento LIKE '____-".$value."-__'";
               }else{
               $query= $query." AND fecha_nacimiento LIKE '____-".$value."-__'";
               }
           break;
       }
     }
}


     $busqueda="SELECT * FROM graduat3s WHERE ".$query." ORDER BY `nombres` ASC";
     // print_r($busqueda);


     $resultado = $mysqli->query($busqueda);
      //Ejecución de la consulta
           //Si hay resultados...

     if ($resultado->num_rows > 0){
       $registros = '<h4 align="center"><p><strong>Hemos encontrado "' . $resultado->num_rows . '" coincidencias</strong></p></h4>';
       ?><div>

     <?php
     echo $registros;
     echo '<div class=" ">
           <div class="row-profile" >   ';

     while($f=$resultado->fetch_assoc()){
      // Condición Fecha de Nacimiento y Fecha de Fallecimiento
       if ($f["fecha_nacimiento"]=='0000-00-00') {
         $date='<p>Fecha de Nacimiento:</p> <strong>No actualizada</strong></p>';
       }else {
         $date ='<p>Fecha de Nacimiento: <strong>'.date('d/m', strtotime($f['fecha_nacimiento'])).'</strong></p>';
        }

       if ($f["date_deceased"]=='0000-00-00') {
         $datef= '<strong>No actualizada</strong>';
       }else {
         $datef = '<strong>'.date('d/m/Y', strtotime($f['date_deceased'])).'</strong></p>';
        }

         $img='';
         $img_fallecido='';
         $Titulo='';
         $boton='';
         $card_action='';
         $linkedin='';
         // print_r($f);
         if (file_exists("img/profile_pictures/".$f['ID'].".jpg")) {
           $img="img/profile_pictures/".$f['ID'].".jpg";
         }elseif(!file_exists("img/profile_pictures/".$f['ID'].".jpg"))
           {
              if($f['genero']=='M') {
                 $img="img/MASCULINO.jpg";
               }elseif ($f['genero']=='F') {
                 $img="img/FEMENINO.jpg";
               }
           }
           if($f['genero']=='M') {
              $f['genero']='MASCULINO';
            }elseif ($f['genero']=='F') {
              $f['genero']='FEMENINO';
            }
            // CONDICIÓN FALLECIDO
            if($f['deceased']=='1') {
                 $f['deceased']='SI';
                 $img_fallecido='<img src="img/cruz_fallecido.svg" alt="" width="15" height="20">';
                 $textofallecido='<p>Fallecido: <strong>'.$f['deceased'].'</strong></p><p>Fecha en que Falleció: '.$datef.'</p>';
               }elseif ($f['deceased']=='0') {
                 $f['deceased']='NO';
                 $textofallecido=' ';
               }

            // CONDICIÓN LINKEDIN  
            if($f['linkedin']=='0') {
              $linkedin='';
              $div=' ';
            }elseif ($f['linkedin']=='1') {
              $linkedin='';
              $div='
              <div class="boton-tesis1">
                <a target="_blank"  href="'.$f['url_linkedin'].'">
                  <img src="img/linkedin.svg" style="width: 30px;" alt="linkedin">
                </a>
                </div>
              ';
            }
            // CONDICIÓN PIA
           if ($f['programa']=='0077' AND $f['deceased']=='NO') {
               $Titulo='AGRÓNOMO';
               $card_action='<div class="box-education">
                              <div class="box-icono1">
                                <div class="icono1">
                                  <img class="imagen-icon1" src="img/birrete-1.svg" alt="">
                                </div>
                              </div>
                              <div class="info-education">
                                <p>Título <strong>PIA</strong>: </br><strong>INGENIERO AGRÓNOMO ('.$f['anioIA'].') </strong></p>
                                <p>Orientación: <strong>'.$f['orientacion'].'</strong></p>
                                <p>Título proyecto de graduación:<br> <strong>'.$f['titulo_tesis'].'</strong></p>
                                <p>Empresa donde realizó su pasantía:<br> <strong>'.$f['lugar_pasantia'].'</strong></p>
                                <p>Rubro de la Empresa:<br> <strong>'.$f['rubro_empresa'].'</strong></p>
                                <p>Experiencia de trabajo obtenida en su pasantía:<br> <strong>'.$f['exp_pasantia'].'</strong></p>
                                <p>Asesor de Tesis:<br> <strong>'.$f['asesor_tesis'].'</strong></p>
                                <p>Áreas de interés:<br> <strong>'.$f['area_interes'].'</strong></p>
                              </div>
                              <div class="botones">
                                <a class="boton-tesis" target="_blank"  href="https://bdigital.zamorano.edu/simple-search?location=%2F&query='.$f['primer_apellido'].'+'.$f['primer_nombre'].'&rpp=10&sort_by=score&order=desc">TESIS </a>
                                <a class="boton-update" target="_blank" href="https://goo.gl/TVWJq9">ACTUALIZA TUS DATOS</a>
                                '.$div.'
                              </div>
                            </div>';
           }
           if ($f['programa']=='0077' AND $f['deceased']=='SI') {
               $Titulo='AGRÓNOMO';
               $card_action='<div class="box-education">
                              <div class="box-icono1">
                                <div class="icono1">
                                  <img class="imagen-icon1" src="img/birrete-1.svg" alt="">
                                </div>
                              </div>
                              <div class="info-education">
                                <p>Título <strong>PIA</strong>: </br><strong>INGENIERO AGRÓNOMO ('.$f['anioIA'].') </strong></p>
                                <p>Orientación: <strong>'.$f['orientacion'].'</strong></p>
                                <p>Título proyecto de graduación:<br> <strong>'.$f['titulo_tesis'].'</strong></p>
                                <p>Empresa donde realizó su pasantía:<br> <strong>'.$f['lugar_pasantia'].'</strong></p>
                                <p>Rubro de la Empresa:<br> <strong>'.$f['rubro_empresa'].'</strong></p>
                                <p>Experiencia de trabajo obtenida en su pasantía:<br> <strong>'.$f['exp_pasantia'].'</strong></p>
                                <p>Asesor de Tesis:<br> <strong>'.$f['asesor_tesis'].'</strong></p>
                                <p>Áreas de interés:<br> <strong>'.$f['area_interes'].'</strong></p>
                              </div>
                              <div class="botones">
                                <a class="boton-tesis" target="_blank"  href="https://bdigital.zamorano.edu/simple-search?location=%2F&query='.$f['primer_apellido'].'+'.$f['primer_nombre'].'&rpp=10&sort_by=score&order=desc">TESIS </a>
                              </div>
                            </div>';
           }

           // CONDICIÓN PPIA
           if ($f['programa']=='0707') {
               $Titulo='AGRÓNOMO';
               $card_action='<div class="box-education">
                              <div class="box-icono1">
                                <div class="icono1">
                                  <img class="imagen-icon1" src="img/birrete-1.svg" alt="">
                                </div>
                              </div>
                              <div class="info-education">
                                <p>Título <strong>PPIA</strong>: </br><strong>INGENIERO AGRÓNOMO ('.$f['anioIA'].') </strong></p>
                                <p>Orientación: <strong>'.$f['orientacion'].'</strong></p>
                                <p>Título proyecto de graduación:<br> <strong>'.$f['titulo_tesis'].'</strong></p>
                                <p>Áreas de interés:<br> <strong>'.$f['area_interes'].'</strong></p>
                              </div>
                              <div class="botones">
                                <a class="boton-tesis" target="_blank"  href="https://bdigital.zamorano.edu/simple-search?location=%2F&query='.$f['primer_apellido'].'+'.$f['primer_nombre'].'&rpp=10&sort_by=score&order=desc">TESIS </a>
                                <a class="boton-update" target="_blank" href="https://goo.gl/TVWJq9">ACTUALIZA TUS DATOS</a>
                                '.$div.'
                              </div>
                            </div>';
           }


           if ($f['programa']=='0007' AND $f['deceased']=='NO') {
               $Titulo='AGRÓNOMO';
               $card_action='<div class="box-education">
                                <div class="botones">
                                  <a class="boton-update" target="_blank" href="https://goo.gl/TVWJq9">ACTUALIZA TUS DATOS</a>
                                  '.$div.'
                                </div>
                              </div>';
           }
           if ($f['programa']=='0007' AND $f['deceased']=='SI') {
               $Titulo='AGRÓNOMO';
               $card_action='';
           }

           // CONDICIÓN 4X4
           if ($f['programa']=='master' AND $f['deceased']=='NO') {
               $Titulo='INGENIERO AGRÓNOMO';
               $card_action='
                              <div class="box-education">
                              <div class="box-icono1">
                                <div class="icono1">
                                  <img class="imagen-icon1" src="img/birrete-1.svg" alt="">
                                </div>
                              </div>
                              <div class="info-education">
                                <p>Orientación: <strong>'.$f['orientacion'].'</strong></p>
                                <p>Título proyecto de graduación:<br> <strong>'.$f['titulo_tesis'].'</strong></p>
                                <p>Empresa donde realizó su pasantía:<br> <strong>'.$f['lugar_pasantia'].'</strong></p>
                                <p>Rubro de la Empresa:<br> <strong>'.$f['rubro_empresa'].'</strong></p>
                                <p>Experiencia de trabajo obtenida en su pasantía:<br> <strong>'.$f['exp_pasantia'].'</strong></p>
                                <p>Asesor de Tesis:<br> <strong>'.$f['asesor_tesis'].'</strong></p>
                                <p>Áreas de interés:<br> <strong>'.$f['area_interes'].'</strong></p>
                              </div>
                              <div class="botones">
                                <a class="boton-tesis" target="_blank"  href="https://bdigital.zamorano.edu/simple-search?location=%2F&query='.$f['primer_apellido'].'+'.$f['primer_nombre'].'&rpp=10&sort_by=score&order=desc">TESIS </a>
                                <a class="boton-update" target="_blank" href="https://goo.gl/TVWJq9">ACTUALIZA TUS DATOS</a>
                                '.$div.'
                              </div>
                              </div>';               
           }
           
           if ($f['programa']=='master' AND $f['deceased']=='SI') {
               $Titulo='INGENIERO AGRÓNOMO';
               $card_action='<div class="box-education">
                              <div class="box-icono1">
                                <div class="icono1">
                                  <img class="imagen-icon1" src="img/birrete-1.svg" alt="">
                                </div>
                              </div>
                              <div class="info-education">
                                <p>Orientación: <strong>'.$f['orientacion'].'</strong></p>
                                <p>Título proyecto de graduación:<br> <strong>'.$f['titulo_tesis'].'</strong></p>
                                <p>Empresa donde realizó su pasantía:<br> <strong>'.$f['lugar_pasantia'].'</strong></p>
                                <p>Rubro de la Empresa:<br> <strong>'.$f['rubro_empresa'].'</strong></p>
                                <p>Experiencia de trabajo obtenida en su pasantía:<br> <strong>'.$f['exp_pasantia'].'</strong></p>
                                <p>Asesor de Tesis:<br> <strong>'.$f['asesor_tesis'].'</strong></p>
                                <p>Áreas de interés:<br> <strong>'.$f['area_interes'].'</strong></p>
                              </div>
                              <div class="botones">
                                <a class="boton-tesis" target="_blank"  href="https://bdigital.zamorano.edu/simple-search?location=%2F&query='.$f['primer_apellido'].'+'.$f['primer_nombre'].'&rpp=10&sort_by=score&order=desc">TESIS</a>
                              </div>
                            </div>';
           }
           if ($f['programa']=='master') {
             if ($f['orientacion']=='MATS') {
                 $Titulo='Maestría de Agricultura Tropical Sostenible';
             } 
           }
           if(isset($_SESSION['perfiles_user']) ){
           $boton='<a href="editar-perfil.php?id='.$f['ID'].'&pais_reside='.$f['pais_reside'].'&ciudad='.$f['ciudad'].'&url_tesis='.$f['url_tesis'].'&nickname='.$f['nickname'].'&deceased='.$f['deceased'].'&date_deceased='.$f['date_deceased'].'&movil='.$f['movil'].'&telefono='.$f['telefono'].'&email='.$f['email'].'&email_2='.$f['email_2'].'&email_3='.$f['email_3'].'&direccion='.$f['direccion'].'&financiado_por='.$f['financiado_por'].'&otras_entidades='.$f['otras_entidades'].'&asesor_tesis='.$f['asesor_tesis'].'&clase='.$f['clase'].'&codigo='.$f['codigo'].'&nombres='.$f['nombres'].'&apellidos='.$f['apellidos'].'&nacionalidad='.$f['nacionalidad'].'&genero='.$f['genero'].'&programa='.$f['programa'].'&orientacion='.$f['orientacion'].'&diaGraduacion='.$f['dia_graduacion'].'&mesGraduacion='.$f['mes_graduacion'].'&estatus='.$f['estatus'].'&lugarPasantia='.$f['lugar_pasantia'].'&direccion_pasantia='.$f['direccion_pasantia'].'&rubro_empresa='.$f['rubro_empresa'].'&areaInvestigacion='.$f['area_investigacion'].'&titulo_tesis='.$f['titulo_tesis'].'&pa='.$f['pa'].'&fechaNacimiento='.$f['fecha_nacimiento'].'&anioIA='.$f['anioIA'].'&codigoIA='.$f['codigoIA'].'&exp_pasantia='.$f['exp_pasantia'].'&area_interes='.$f['area_interes'].'" class="btn-floating btn-move-up waves-effect waves-light ripple-effect red darken-2 btn-large right">
                         <i class="material-icons">edit</i>
                       </a>';
           }

          echo '<div class="box-profile-main">
                  <div class="box-profile">
                    <div class="box-info-personal">
                      <div class="box-main">
                        <div class="box-perfil">
                          <div class="box-img-perfil">
                            <img  class="img-perfil" src="'.$img.'" alt="">
                            <h4 class="nombre">'. $f['nombres'].' '.$f['apellidos'] .' '.$img_fallecido.'</h4>
                            <p class="clase">Clase '.$f['clase'].'</p>
                          </div>
                        </div>
                        <div class="info-person">
                          <div class="box-icono">
                            <div class="icono">
                              <img class="imagen-icon" src="img/ganador.svg" alt="">
                            </div>
                          </div>
                          <div>
                            <p>Título Obtenido: <strong>'.$Titulo.'</strong></p>
                            <p>Código: <strong>'.$f['codigo'].'</strong></p>
                            <p>Genero: <strong>'.$f['genero'].'</strong></p>
                            <p>País de origen: <strong>'.$f['nacionalidad'].'</strong></p>
                            <p>'.$date.'</p>
                            <p>'.$textofallecido.'</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    '.$card_action.'
                  </div>
                </div>';


         //onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
         //cambiar los nombres de los campos de busqueda
         }
     }else{
           $registros = '<h4 align="center"><p><strong>Hemos encontrado "' . $resultado->num_rows . '" coincidencias</strong></p></h4>';?>
           <?php
           echo $registros;
         }



?>



<!-- http://localhost/lista-de-graduados/Perfiles-Materialize/busqueda-avanzada.php?codigoInput=codigo&nombresInput=nombres&apellidosInput=apellidos&claseInput=1946&paisInput=honduras&generoInput=femenino&direccionInput=guayaquil&ubicacionInput=2222&cumpleanosInput=11-enero-2016# -->
