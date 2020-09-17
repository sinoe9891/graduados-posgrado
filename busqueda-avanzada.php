<!DOCTYPE html>
<html>
  <?php require_once('includes/session.php');
    if (isset($_SESSION)) {
     require_once('includes/security.php');
    if (security($_SERVER['PHP_SELF'])) {
      // print_r('accesoPrivado');

    require_once('includes/header.php');
  ?>
    <body >
      <?php require_once('includes/nav.php'); ?>



        <main class="container">

          <div class="row">
            <div align="center" class="col s12 m12 l12">
              <h3>LISTADO DE GRADUADOS</h3>
              <h6><strong><?php if(isset($_SESSION['perfiles_user']) ){echo "Busqueda avanzada: Usuario: ".$_SESSION['perfiles_user'];}?></strong></h6>
              <h6 id="error">Selecciona el dato que necesitas.</h6>
            </div>
          </div>

          <div align="center" class="">
            <form  name="form1" method="GET"  id="cdr" >

              <div class="row">
                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="clase"  />
                      <label for="clase">Clase</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="claseInput" hidden disabled required value="<?php if(isset($_GET['claseInput'])){ echo $_GET['claseInput'];}?>" id="claseInput" type="number" class="validate">
                    <label for="claseInput">Clase</label>
                  </div>
                </div>
                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="codigo" />
                      <label for="codigo">Código</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="codigoInput" hidden disabled required value="<?php if(isset($_GET['codigoInput'])){ echo $_GET['codigoInput'];}?>" id="codigoInput" type="text" class="validate">
                    <label for="codigoInput">Código</label>
                  </div>
                </div>

                </div>
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="row">
                      <p>
                        <input type="checkbox" class="filled-in" id="nombres"  />
                        <label for="nombres">Nombres</label>
                      </p>
                    </div>
                    <div class="input-field row">
                      <input name="nombresInput" hidden disabled required value="<?php if(isset($_GET['nombresInput'])){ echo $_GET['nombresInput'];}?>" id="nombresInput" type="text" class="validate">
                      <label for="NombresInput">Nombres</label>
                    </div>
                  </div>
                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="apellidos"  />
                      <label for="apellidos">Apellidos</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <input name="apellidosInput" hidden disabled required value="<?php if(isset($_GET['apellidosInput'])){ echo $_GET['apellidosInput'];}?>" id="apellidosInput" type="text" class="validate">
                    <label for="apellidosInput">Apellidos</label>
                  </div>
                </div>

                </div>
                <div class="row">

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="carrera"  />
                      <label for="carrera">Carrera</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="carreraInput" name="carreraInput" hidden disabled >
                    <option value="">Selecciona una carrera</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0007'){echo "selected";}} ?> value="0007">AGRONOMO</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0077'){echo "selected";}} ?> value="0077">AGRONOMO - PIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='0707'){echo "selected";}} ?> value="0707">AGRONOMO - PPIA</option>
                    <option disabled>-- 4X4 --</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07771'){echo "selected";}} ?> value="07771">INGENIERIA AGRONÓMICA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07772'){echo "selected";}} ?> value="07772">INGENIERO EN AGROINDUSTRIA ALIMENTARIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07773'){echo "selected";}} ?> value="07773">INGENIERO EN ADMINISTRACION DE AGRONEGOCIOS</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='07774'){echo "selected";}} ?> value="07774">INGENIERO EN AMBIENTE Y DESARROLLO</option>
                    <option disabled>-- Clases 2002 / 2012</option>

                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077721'){echo "selected";}} ?> value="077721">AGROINDUSTRIA</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077731'){echo "selected";}} ?> value="077731">GESTION DE AGRONEGOCIOS</option>
                    <option <?php if(isset($_GET['carreraInput'])){if($_GET['carreraInput']=='077741'){echo "selected";}} ?> value="077741">DESARROLLO SOCIOECONOMICO Y AMBIENTE</option>
                  </select>

                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="pais"  />
                      <label for="pais">País</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select name="paisInput" id="paisInput"  >
                        <option value="">Selecciona un país</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Alemania'){echo "selected";}} ?>  value="Alemania">Alemania</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Argentina'){echo "selected";}} ?>  value="Argentina">Argentina</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Austria'){echo "selected";}} ?>  value="Austria">Austria</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bélgica'){echo "selected";}} ?>  value="Bélgica">Bélgica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Belice'){echo "selected";}} ?>  value="Belice">Belice</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Brasil'){echo "selected";}} ?>  value="Brasil">Brasil</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Bolivia'){echo "selected";}} ?>  value="Bolivia">Bolivia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Canadá'){echo "selected";}} ?>  value="Canadá">Canadá</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Chile'){echo "selected";}} ?>  value="Chile">Chile</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Colombia'){echo "selected";}} ?>  value="Colombia">Colombia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Costa Rica'){echo "selected";}} ?>  value="Costa Rica">Costa Rica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Cuba'){echo "selected";}} ?>  value="Cuba">Cuba</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Ecuador'){echo "selected";}} ?>  value="Ecuador">Ecuador</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='El Salvador'){echo "selected";}} ?>  value="El Salvador">El Salvador</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='España'){echo "selected";}} ?>  value="España">España</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Estados Unidos'){echo "selected";}} ?>  value="Estados Unidos">Estados Unidos</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Guatemala'){echo "selected";}} ?>  value="Guatemala">Guatemala</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Haití'){echo "selected";}} ?>  value="Haití">Haití</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Honduras'){echo "selected";}} ?>  value="Honduras">Honduras</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Israel'){echo "selected";}} ?>  value="Israel">Israel</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Italia'){echo "selected";}} ?>  value="Italia">Italia</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Jamaica'){echo "selected";}} ?>  value="Jamaica">Jamaica</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='México'){echo "selected";}} ?>  value="México">México</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Nicaragua'){echo "selected";}} ?>  value="Nicaragua">Nicaragua</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Panamá'){echo "selected";}} ?>  value="Panamá">Panamá</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Paraguay'){echo "selected";}} ?>  value="Paraguay">Paraguay</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Perú'){echo "selected";}} ?>  value="Perú">Perú</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='República Dominicana'){echo "selected";}} ?>  value="República Dominicana">República Dominicana</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Uruguay'){echo "selected";}} ?>  value="Uruguay">Uruguay</option>
                        <option <?php if(isset($_GET['paisInput'])){if($_GET['paisInput']=='Venezuela'){echo "selected";}} ?>  value="Venezuela">Venezuela</option>
                      </select>



                  </div>
                </div>


                </div>
                <div class="row">


                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="genero"  />
                      <label for="genero">Genero</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="generoInput" name="generoInput" hidden disabled >
                    <option value="">Selecciona un genero</option>
                    <option <?php if(isset($_GET['generoInput'])){if($_GET['generoInput']=='F'){echo "selected";}} ?> value="F">FEMENINO</option>
                    <option <?php if(isset($_GET['generoInput'])){if($_GET['generoInput']=='M'){echo "selected";}} ?> value="M">MASCULINO</option>

                  </select>
                  </div>
                </div>

                <div class="col s12 m6 l6">
                  <div class="row">
                    <p>
                      <input type="checkbox" class="filled-in" id="cumpleanos"  />
                      <label for="cumpleanos">Cumpleaños</label>
                    </p>
                  </div>
                  <div class="input-field row">
                    <select id="cumpleanosInput" name="cumpleanosInput" hidden disabled >
                      <option value="">Selecciona un mes</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='01'){echo "selected";}} ?> value="01">ENERO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='02'){echo "selected";}} ?> value="02">FEBRERO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='03'){echo "selected";}} ?> value="03">MARZO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='04'){echo "selected";}} ?> value="04">ABRIL</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='05'){echo "selected";}} ?> value="05">MAYO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='06'){echo "selected";}} ?> value="06">JUNIO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='07'){echo "selected";}} ?> value="07">JULIO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='08'){echo "selected";}} ?> value="08">AGOSTO</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='09'){echo "selected";}} ?> value="09">SEPTIEMBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='10'){echo "selected";}} ?> value="10">OCTUBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='11'){echo "selected";}} ?> value="11">NOVIEMBRE</option>
                      <option <?php if(isset($_GET['cumpleanosInput'])){if($_GET['cumpleanosInput']=='12'){echo "selected";}} ?> value="12">DICIEMBRE</option>
                  </select>

                  </div>
                  <!-- <div class="input-field row">
                    <input name="cumpleanosInput" hidden disabled required value="<?php if(isset($_GET['cumpleanosInput'])){ echo $_GET['cumpleanosInput'];}?>" id="cumpleanosInput" type="date" class="validate">
                    <label for="cumpleanosInput">Cumpleaños</label>
                  </div> -->
                </div>


              </div>

              <div class="row">
                <button type="submit" hidden></button>
                 <p>
                  <a href="javascript: void(0);" class="wav-es-effect waves-light btn-large ripple-effect " id="boton">Buscar</a>
                </p>
              </div>

            </form>
          </div>

            <?php
            if (!empty($_GET)) {
              require_once('includes/busqueda-avanzada.php');
            }

              ?>
          </div>
          </div>
         </div>



        </main>
        <script type="text/javascript">

          window.addEventListener("load", function(){
             var check = document.getElementById('codigo').checked;
              if (document.getElementById('codigoInput').value!="") {
                document.getElementById('codigo').checked=true;
                document.getElementById('codigoInput').disabled=false;
                document.getElementById('codigoInput').hidden=false;
              }else if (check) {document.getElementById('codigoInput').disabled=false;
                          document.getElementById('codigoInput').hidden=false;
              }else if(!check){document.getElementById('codigoInput').disabled=true;
                               document.getElementById('codigoInput').hidden=true;
              }

              var check = document.getElementById('nombres').checked;
              if (document.getElementById('nombresInput').value!="") {
                document.getElementById('nombres').checked=true;
                document.getElementById('nombresInput').disabled=false;
                document.getElementById('nombresInput').hidden=false;
              }else if (check) {document.getElementById('nombresInput').disabled=false;
                          document.getElementById('nombresInput').hidden=false;
              }else if(!check){document.getElementById('nombresInput').disabled=true;
                               document.getElementById('nombresInput').hidden=true;
              }

              var check = document.getElementById('apellidos').checked;
              if (document.getElementById('apellidosInput').value!="") {
                document.getElementById('apellidos').checked=true;
                document.getElementById('apellidosInput').disabled=false;
                document.getElementById('apellidosInput').hidden=false;
              }else if (check) {document.getElementById('apellidosInput').disabled=false;
                          document.getElementById('apellidosInput').hidden=false;
              }else if(!check){document.getElementById('apellidosInput').disabled=true;
                               document.getElementById('apellidosInput').hidden=true;
              }

              var check = document.getElementById('clase').checked;
              if (document.getElementById('claseInput').value!="") {
                document.getElementById('clase').checked=true;
                document.getElementById('claseInput').disabled=false;
                document.getElementById('claseInput').hidden=false;
              }else if (check) {document.getElementById('claseInput').disabled=false;
                          document.getElementById('claseInput').hidden=false;
              }else if(!check){document.getElementById('claseInput').disabled=true;
                               document.getElementById('claseInput').hidden=true;
              }

              var check = document.getElementById('carrera').checked;
              if (document.getElementById('carreraInput').value!="") {
                document.getElementById('carrera').checked=true;
                document.getElementById('carreraInput').disabled=false;
                document.getElementById('carreraInput').hidden=false;
              }else if (check) {document.getElementById('carreraInput').disabled=false;
                          document.getElementById('carreraInput').hidden=false;
              }else if(!check){document.getElementById('carreraInput').disabled=true;
                               document.getElementById('carreraInput').hidden=true;
              }

              var check = document.getElementById('pais').checked;
              if (document.getElementById('paisInput').value!="") {
                document.getElementById('pais').checked=true;
                document.getElementById('paisInput').disabled=false;
                document.getElementById('paisInput').hidden=false;
              }else if (check) {document.getElementById('paisInput').disabled=false;
                          document.getElementById('paisInput').hidden=false;
              }else if(!check){document.getElementById('paisInput').disabled=true;
                               document.getElementById('paisInput').hidden=true;
              }

              var check = document.getElementById('genero').checked;
              if (document.getElementById('generoInput').value!="") {
                document.getElementById('genero').checked=true;
                document.getElementById('generoInput').disabled=false;
                document.getElementById('generoInput').hidden=false;
              }else if (check) {document.getElementById('generoInput').disabled=false;
                          document.getElementById('generoInput').hidden=false;
              }else if(!check){document.getElementById('generoInput').disabled=true;
                               document.getElementById('generoInput').hidden=true;
              }



              var check = document.getElementById('cumpleanos').checked;
              if (document.getElementById('cumpleanosInput').value!="") {
                document.getElementById('cumpleanos').checked=true;
                document.getElementById('cumpleanosInput').disabled=false;
                document.getElementById('cumpleanosInput').hidden=false;
              }else if (check) {document.getElementById('cumpleanosInput').disabled=false;
                          document.getElementById('cumpleanosInput').hidden=false;
              }else if(!check){document.getElementById('cumpleanosInput').disabled=true;
                               document.getElementById('cumpleanosInput').hidden=true;
              }

          });



          document.getElementById('codigo').addEventListener("click", function(){
             var check = document.getElementById('codigo').checked;
              if (check) {document.getElementById('codigoInput').disabled=false;
                          document.getElementById('codigoInput').hidden=false;
              }else if(!check){document.getElementById('codigoInput').disabled=true;
                               document.getElementById('codigoInput').hidden=true;
              }

          });

          document.getElementById('nombres').addEventListener("click", function(){
             var check = document.getElementById('nombres').checked;
              if (check) {document.getElementById('nombresInput').disabled=false;
                          document.getElementById('nombresInput').hidden=false;
              }else if(!check){document.getElementById('nombresInput').disabled=true;
                               document.getElementById('nombresInput').hidden=true;
              }

          });

          document.getElementById('apellidos').addEventListener("click", function(){
             var check = document.getElementById('apellidos').checked;
              if (check) {document.getElementById('apellidosInput').disabled=false;
                          document.getElementById('apellidosInput').hidden=false;
              }else if(!check){document.getElementById('apellidosInput').disabled=true;
                               document.getElementById('apellidosInput').hidden=true;
              }

          });

          document.getElementById('clase').addEventListener("click", function(){
             var check = document.getElementById('clase').checked;
              if (check) {document.getElementById('claseInput').disabled=false;
                          document.getElementById('claseInput').hidden=false;
              }else if(!check){document.getElementById('claseInput').disabled=true;
                               document.getElementById('claseInput').hidden=true;
              }

          });

          document.getElementById('carrera').addEventListener("click", function(){
             var check = document.getElementById('carrera').checked;
              if (check) {document.getElementById('carreraInput').disabled=false;
                          document.getElementById('carreraInput').hidden=false;
              }else if(!check){document.getElementById('carreraInput').disabled=true;
                               document.getElementById('carreraInput').hidden=true;
              }

          });

          document.getElementById('pais').addEventListener("click", function(){
             var check = document.getElementById('pais').checked;
              if (check) {document.getElementById('paisInput').disabled=false;
                          document.getElementById('paisInput').hidden=false;
              }else if(!check){document.getElementById('paisInput').disabled=true;
                               document.getElementById('paisInput').hidden=true;
              }

          });

          document.getElementById('genero').addEventListener("click", function(){
             var check = document.getElementById('genero').checked;
              if (check) {document.getElementById('generoInput').disabled=false;
                          document.getElementById('generoInput').hidden=false;
              }else if(!check){document.getElementById('generoInput').disabled=true;
                               document.getElementById('generoInput').hidden=true;
              }

          });


          document.getElementById('cumpleanos').addEventListener("click", function(){
             var check = document.getElementById('cumpleanos').checked;
              if (check) {document.getElementById('cumpleanosInput').disabled=false;
                          document.getElementById('cumpleanosInput').hidden=false;
              }else if(!check){document.getElementById('cumpleanosInput').disabled=true;
                               document.getElementById('cumpleanosInput').hidden=true;
              }

          });


          document.getElementById('boton').addEventListener('click', function(){
            console.log(document.getElementById('codigo').checked +' - '+document.getElementById('nombres').checked +' - '+document.getElementById('apellidos').checked +' - '+document.getElementById('clase').checked +' - '+document.getElementById('carrera').checked +' - '+document.getElementById('pais').checked +' - '+document.getElementById('genero').checked +' - '+document.getElementById('cumpleanos').checked);


              if (document.getElementById('codigo').checked==true || document.getElementById('nombres').checked==true || document.getElementById('apellidos').checked==true || document.getElementById('clase').checked==true || document.getElementById('carrera').checked==true || document.getElementById('pais').checked==true || document.getElementById('genero').checked==true ||  document.getElementById('cumpleanos').checked==true ){
                // document.getElementById('cdr').submit();
                $('#cdr').find('[type="submit"]').trigger('click');
              }else{
                document.getElementById('error').innerHTML="<h6 id='error'>Selecciona el dato que desees y completa los datos necesarios.</h6>"
              }

          });


        </script>

          <?php require_once('includes/footer.php'); ?>
    </body>
<?php
  }
}
 ?>
</html>




<!--

`ID`, `codigo`, `nombres`, `apellidos`, `nacionalidad`, `genero`, `programa`  `orientacion`  `dia_graduacion`, `mes_graduacion`, `estatus`, `lugar_pasantia`, `exp_pasantia`, `area_investigacion`, `asesor_tesis`, `url_pasantia`, `titulo`, `pa`, `fecha_nacimiento`, `financiado_por`, `direccion`, `email`, `telefono`, `movil`, -->
