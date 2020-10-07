<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h3 class="white-text">Comprometidos a Alimentar al Mundo</h3>
				<p class="grey-text text-lighten-4"></p>
			</div>

			<div class="col l3 s12">
				<h3>Enlaces Rápidos</h3>
				<ul>
					<?php if (!isset($_SESSION['perfiles_user'])) { ?>
						<li><a class="grey-text text-lighten-3" href="acceso.php">Log in</a></li>
					<?php } elseif (isset($_SESSION['perfiles_user'])) { ?>

						<li><a class="grey-text text-lighten-3" href="includes/logout.php">Log out: <?php echo "Usuario: " . $_SESSION['perfiles_user']; ?></a></li>
						<li><a class="grey-text text-lighten-3" href="busqueda-avanzada.php">Busqueda avanzada</a></li>


					<?php } ?>
					<li><a class="white-text" href="https://www.zamorano.edu/mapa-del-sitio/">Mapa del Sitio</a></li>
					<li><a class="white-text" target="_blank" href="https://www.zamorano.edu/alisonbixby/">Escuela Alison Bixby Stone School</a></li>
					<li><a class="white-text" href="https://www.zamorano.edu/donar-en-linea/">Donar en Línea</a></li>
					<li><a class="white-text" href="https://estudiantes.zamorano.edu/">Portal Estudiantil</a></li>
					<li><a class="white-text" href="https://empleados.zamorano.edu/">Portal Empleados</a></li>
					<li><a class="white-text" href="https://www.zamorano.edu/category/oportunidades_laborales/">Oportunidades Laborales</a></li>
				</ul>

			</div>

			<div class="col l3 s12 grey-text text-lighten-4">
				<div class="logo_footer">
					<img class="aligncenter" src="https://www.zamorano.edu/wp-content/uploads/2015/03/Logo-Zamorano-04-1.png" alt="" height="79" width="112">
				</div>
				<p></p>
				<strong>HONDURAS</strong>
				<p>PO Box 93, Km 30 road from Tegucigalpa to Danli,
					Yeguare Valley, Municipality of San Antonio de Oriente. Francisco Morazan, Honduras, C.A.
					Tel. (504) 2287-2000,
					Fax: (504) 2776-6240
					Email: zamorano@zamorano.edu</p>
				<hr>
				<strong>UNITED STATES</strong>
				<p>1701 Pennsylvania Ave., NW, Suite 300
					Washington, DC 20006
					Tel: (202) 461-2242
					Fax: (202) 580-6559
					Email: wdc@zamorano.edu</p>

			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="copyright">
				<p>© <?php echo date('Y'); ?> Universidad Zamorano. All Rights Reserved. <strong><a href="https://www.zamorano.edu/terminos-y-condiciones/">Términos y Condiciones</a></strong></p>
			</div>
		</div>
	</div>

	</div>
</footer>