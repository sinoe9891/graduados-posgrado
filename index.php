  <!DOCTYPE html>
  <html>
  <?php require_once('includes/session.php'); ?>
  <?php require_once('includes/header.php'); ?>

  <body>
  	<?php require_once('includes/nav.php'); ?>
  	<main class="container">

  		<div class="row">
  			<div align="center" class="col s12 m12 l12">
  				<h3>LISTADO DE GRADUADOS</h3>
  				<h6><strong><?php if (isset($_SESSION['perfiles_user'])) {
									echo "Busqueda avanzada: Usuario: " . $_SESSION['perfiles_user'];
								} ?></strong></h6>
  				<h6 id="error">Selecciona el dato que necesitas.</h6>
  				<h6>Si no encuentras tus datos completos, probablemente necesitas actualizarlos.</br> Puedes hacerlo <a href="https://goo.gl/TVWJq9">aquí</a></h6>
  			</div>
  		</div>
  		<form name="form1" method="GET" id="cdr">
  			<div class="row">
  				<div class="col s12 m6 l2">
  					<div class="row">
  						<p>
  							<input type="checkbox" class="filled-in" id="clase" />
  							<label for="clase">Clase</label>
  						</p>
  					</div>
  					<div class="input-field row">
  						<input name="claseInput" hidden disabled required value="<?php if (isset($_GET['claseInput'])) {
																						echo $_GET['claseInput'];
																					} ?>" id="claseInput" type="number" class="validate">
  						<label for="claseInput">Clase</label>
  					</div>
  				</div>
  				<div class="col s12 m6 l2">
  					<div class="row">
  						<p>
  							<input type="checkbox" class="filled-in" id="codigo" />
  							<label for="codigo">Código</label>
  						</p>
  					</div>
  					<div class="input-field row">
  						<input name="codigoInput" hidden disabled required value="<?php if (isset($_GET['codigoInput'])) {
																						echo $_GET['codigoInput'];
																					} ?>" id="codigoInput" type="text" class="validate">
  						<label for="codigoInput">Código</label>
  					</div>
  				</div>
  				<div class="col s12 m6 l3">
  					<div class="row">
  						<p>
  							<input type="checkbox" class="filled-in" id="nombres" />
  							<label for="nombres">Nombres</label>
  						</p>
  					</div>
  					<div class="input-field row">
  						<input name="nombresInput" hidden disabled required value="<?php if (isset($_GET['nombresInput'])) {
																							echo $_GET['nombresInput'];
																						} ?>" id="nombresInput" type="text" class="validate">
  						<label for="NombresInput">Nombres</label>
  					</div>
  				</div>
  				<div class="col s12 m6 l3">
  					<div class="row">
  						<p>
  							<input type="checkbox" class="filled-in" id="apellidos" />
  							<label for="apellidos">Apellidos</label>
  						</p>
  					</div>
  					<div class="input-field row">
  						<input name="apellidosInput" hidden disabled required value="<?php if (isset($_GET['apellidosInput'])) {
																							echo $_GET['apellidosInput'];
																						} ?>" id="apellidosInput" type="text" class="validate">
  						<label for="apellidosInput">Apellidos</label>
  					</div>
  				</div>
  				<div class="col s12 m6 l2">
  					<div class="row">
  						<p>
  							<input type="checkbox" class="filled-in" id="pais" />
  							<label for="pais">País</label>
  						</p>
  					</div>
  					<div class="input-field row">
  						<select name="paisInput" id="paisInput">
  							<option value="">Selecciona un país</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Bolivia') {
												echo "selected";
											}
										} ?> value="Bolivia">Bolivia</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Colombia') {
												echo "selected";
											}
										} ?> value="Colombia">Colombia</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Ecuador') {
												echo "selected";
											}
										} ?> value="Ecuador">Ecuador</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Guatemala') {
												echo "selected";
											}
										} ?> value="Guatemala">Guatemala</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Honduras') {
												echo "selected";
											}
										} ?> value="Honduras">Honduras</option>
  							<option <?php if (isset($_GET['paisInput'])) {
											if ($_GET['paisInput'] == 'Nicaragua') {
												echo "selected";
											}
										} ?> value="Nicaragua">Nicaragua</option>
  						</select>
  					</div>
  				</div>

  				<div class="row">
  					<div class="col s12 m6 l2">
  						<button type="submit" hidden></button>
  						<p>
  							<a href="javascript: void(0);" class="wav-es-effect waves-light btn-large ripple-effect " id="boton">Buscar</a>
  						</p>
  					</div>
  				</div>
  			</div>
  		</form>

		<!-- Resultado de Búsqueda -->
  		<?php
			if (!empty($_GET)) {
				require_once('includes/busqueda.php');
			}
			?>
  		</div>
  		</div>



  	</main>
  	<script type="text/javascript">
  		window.addEventListener("load", function() {
  			var check = document.getElementById('codigo').checked;
  			if (document.getElementById('codigoInput').value != "") {
  				document.getElementById('codigo').checked = true;
  				document.getElementById('codigoInput').disabled = false;
  				document.getElementById('codigoInput').hidden = false;
  			} else if (check) {
  				document.getElementById('codigoInput').disabled = false;
  				document.getElementById('codigoInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('codigoInput').disabled = true;
  				document.getElementById('codigoInput').hidden = true;
  			}

  			var check = document.getElementById('nombres').checked;
  			if (document.getElementById('nombresInput').value != "") {
  				document.getElementById('nombres').checked = true;
  				document.getElementById('nombresInput').disabled = false;
  				document.getElementById('nombresInput').hidden = false;
  			} else if (check) {
  				document.getElementById('nombresInput').disabled = false;
  				document.getElementById('nombresInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('nombresInput').disabled = true;
  				document.getElementById('nombresInput').hidden = true;
  			}

  			var check = document.getElementById('apellidos').checked;
  			if (document.getElementById('apellidosInput').value != "") {
  				document.getElementById('apellidos').checked = true;
  				document.getElementById('apellidosInput').disabled = false;
  				document.getElementById('apellidosInput').hidden = false;
  			} else if (check) {
  				document.getElementById('apellidosInput').disabled = false;
  				document.getElementById('apellidosInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('apellidosInput').disabled = true;
  				document.getElementById('apellidosInput').hidden = true;
  			}

  			var check = document.getElementById('pais').checked;
  			if (document.getElementById('paisInput').value != "") {
  				document.getElementById('pais').checked = true;
  				document.getElementById('paisInput').disabled = false;
  				document.getElementById('paisInput').hidden = false;
  			} else if (check) {
  				document.getElementById('paisInput').disabled = false;
  				document.getElementById('paisInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('paisInput').disabled = true;
  				document.getElementById('paisInput').hidden = true;
  			}

  			var check = document.getElementById('clase').checked;
  			if (document.getElementById('claseInput').value != "") {
  				document.getElementById('clase').checked = true;
  				document.getElementById('claseInput').disabled = false;
  				document.getElementById('claseInput').hidden = false;
  			} else if (check) {
  				document.getElementById('claseInput').disabled = false;
  				document.getElementById('claseInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('claseInput').disabled = true;
  				document.getElementById('claseInput').hidden = true;
  			}

  		});



  		document.getElementById('codigo').addEventListener("click", function() {
  			var check = document.getElementById('codigo').checked;
  			if (check) {
  				document.getElementById('codigoInput').disabled = false;
  				document.getElementById('codigoInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('codigoInput').disabled = true;
  				document.getElementById('codigoInput').hidden = true;
  			}

  		});

  		document.getElementById('nombres').addEventListener("click", function() {
  			var check = document.getElementById('nombres').checked;
  			if (check) {
  				document.getElementById('nombresInput').disabled = false;
  				document.getElementById('nombresInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('nombresInput').disabled = true;
  				document.getElementById('nombresInput').hidden = true;
  			}

  		});

  		document.getElementById('apellidos').addEventListener("click", function() {
  			var check = document.getElementById('apellidos').checked;
  			if (check) {
  				document.getElementById('apellidosInput').disabled = false;
  				document.getElementById('apellidosInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('apellidosInput').disabled = true;
  				document.getElementById('apellidosInput').hidden = true;
  			}

  		});

  		document.getElementById('clase').addEventListener("click", function() {
  			var check = document.getElementById('clase').checked;
  			if (check) {
  				document.getElementById('claseInput').disabled = false;
  				document.getElementById('claseInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('claseInput').disabled = true;
  				document.getElementById('claseInput').hidden = true;
  			}

  		});
  		document.getElementById('pais').addEventListener("click", function() {
  			var check = document.getElementById('pais').checked;
  			if (check) {
  				document.getElementById('paisInput').disabled = false;
  				document.getElementById('paisInput').hidden = false;
  			} else if (!check) {
  				document.getElementById('paisInput').disabled = true;
  				document.getElementById('paisInput').hidden = true;
  			}

  		});

  		document.getElementById('boton').addEventListener('click', function() {
  			console.log(document.getElementById('codigo').checked + ' - ' + document.getElementById('nombres').checked + ' - ' + document.getElementById('apellidos').checked + ' - ' + document.getElementById('clase').checked + ' - ' + document.getElementById('pais').checked);


  			if (document.getElementById('codigo').checked == true || document.getElementById('nombres').checked == true || document.getElementById('apellidos').checked == true || document.getElementById('clase').checked == true || document.getElementById('pais').checked == true) {
  				// document.getElementById('cdr').submit();
  				$('#cdr').find('[type="submit"]').trigger('click');
  			} else {
  				document.getElementById('error').innerHTML = "<h6 id='error'>Selecciona una opción y completa los datos que necesitas.</h6>"
  			}

  		});
  	</script>
  	<a href="#0" class="cd-top js-cd-top">Top</a>
  	<script src="includes/styles/back-to-top/back-to-top.js"></script>
  	<?php require_once('includes/footer.php'); ?>
  </body>

  </html>




  <!--

  `ID`, `codigo`, `nombres`, `apellidos`, `nacionalidad`, `genero`, `programa`  `orientacion`  `dia_graduacion`, `mes_graduacion`, `estatus`, `lugar_pasantia`, `exp_pasantia`, `area_investigacion`, `asesor_tesis`, `url_pasantia`, `titulo`, `pa`, `fecha_nacimiento`, `financiado_por`, `direccion`, `email`, `telefono`, `movil`, -->