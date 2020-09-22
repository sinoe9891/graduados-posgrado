<!DOCTYPE html>
<html>
<?php require_once('includes/session.php'); ?>

<!-- Bootstrap CSS -->

<link rel="stylesheet" type="text/css" href="css/style-profile.css">
    <link rel="stylesheet" type="text/css" href="includes/styles/back-to-top/back-to-top.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
	.container1 {
		width: 100% !important;
		display: flex;
		justify-content: center;
	}

	.container_main {
		width: 720px;
		margin: 50px 0;
		display: flex;
		height: 392px;
		box-shadow: 3px 3px #0000005c;
	}

	.titulo {
		text-align: right;
		padding: 20px 20px;
	}

	.titulo h3 {
		color: #931919;
		line-height: 1;
		font-size: 28px;
	}

	.titulo h1 {
		color: #931919;
		line-height: 1;
		font-size: 28px;
	}

	.column_one {
		width: 350px;
	}

	.column_one img {
		width: 100%;
		object-fit: cover;
		height: 392px;
	}

	.column_second {
		width: 350px;
	}


	form {
		display: flex;
		justify-content: center;
	}

	label {
		padding: 0 10px;
		text-align: right;
		display: inline-block;
		width: 80px;
	}

	#claseInput,
	#codigoInput,
	#nombresInput,
	#apellidosInput,
	#paisInput {
		border-radius: 50px !important;
		width: 150px;
		height: 25px;
		background: #cdcdcd;
	}

	#paisInput {
		border: none;
	}


	#buscar {
		background: #008341;
		color: white;
		width: 100px;
		margin-top: 20px;
	}

	input {
		width: 147px;
		border-radius: 50px;
	}

	select {
		text-align-last: right;
		text-align: right;
		-ms-text-align-last: right;
		-moz-text-align-last: right;
	}

	.input {
		display: flex;
		margin-bottom: 5px;
		width: 230px;
		display: flex;
		justify-content: center;

	}
</style>

<body>
	<main class="container">
		<div>
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
			<div class="container1">
				<div class="container_main">
					<div class="column_one">
						<img src="https://www.zamorano.edu/wp-content/uploads/2019/02/0000_zamorano-estudiantes.jpg" alt="">
					</div>
					<div class="column_second">
						<div class="titulo">
							<h3>Lista de</h3>
							<h1>Graduados</h1>
						</div>
						<div class="formulario">
							<form action="">
								<div class="">
									<div class="input">
										<label for="clase">Clase</label>
										<input type="number" class="form-control" id="claseInput" placeholder="" value="">
									</div>

									<div class="input">
										<label for="codigo">Código</label>
										<input name="codigoInput" type="text" class="form-control" id="codigoInput" placeholder="" value="">
									</div>

									<div class="input">
										<label for="nombres">Nombres</label>
										<input type="text" name="nombresInput" class="form-control" id="nombresInput" placeholder="" value="">
									</div>

									<div class="input">
										<label for="apellidos">Apellidos</label>
										<input type="text" name="apellidosInput" class="form-control" id="apellidosInput" placeholder="" value="">
									</div>

									<div class="input">
										<label for="pais">País</label>
										<select name="paisInput" id="paisInput">
											<option></option>
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
									<div class="input">
										<!-- <input type="submit" class="form-control" id="buscar" placeholder="" value="Buscar"> -->
										<button type="submit" class="form-control" id="buscar" placeholder="" value="Buscar">Buscar</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


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