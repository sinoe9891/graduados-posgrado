<!DOCTYPE html>
<html>
<?php require_once('includes/session.php'); ?>

<!-- Bootstrap CSS -->

<link rel="stylesheet" type="text/css" href="css/style-profile.css">
<link rel="stylesheet" type="text/css" href="includes/styles/back-to-top/back-to-top.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<style>

</style>

<body>
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="#">
			<img src="https://www.zamorano.edu/wp-content/uploads/2018/10/zamorano_logo_blanco-02.png" alt="">
		</a>
	</nav>

	<main class="container">
		<div>
			<div class="row">
				<div align="center" class="col s12 m12 l12">
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
										<input type="number" class="form-control" id="claseInput" placeholder="" value="" min="2020" max="2020">
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
fecha_nacimiento`, `financiado_por`, `direccion`, `email`, `telefono`, `movil`, -->