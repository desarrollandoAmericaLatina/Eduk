<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Educa - Coordinando la educaci&oacute;n</title>
	<meta name="description" content="..." />
	<meta name="keywords" content="..." />
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="stylesheets/foundation.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/app.css">
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="stylesheets/ie.css">
	<![endif]-->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="javascripts/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="row">
			<div class="twelve columns">
				<a href=""><img src="images/logo.png" alt="" title=""></a>
			</div>
		</div>
	</header>
	<section>
		<div class="row">
			<div class="six columns">
				<br ><br ><br >

				<dl class="nice contained tabs">
				  <dd><a href="#tabLoginAlumno" class="active">Alumno</a></dd>
				  <dd><a href="#tabLoginApoderado">Apo</a></dd>
				  <dd><a href="#tabLoginProfesor">Profe</a></dd>
				  <dd><a href="#tabLoginAdministracion">Admin</a></dd>
				</dl>

				<ul class="nice tabs-content contained">
				  <li id="tabLoginAlumnoTab" class="active">

				  	<form class="nice custom" action="/login">
				  		<input type="hidden" name="tipo_usuario" value="alumno">
				  		
				  		<h5>Ingreso de Alumno</h5>

				  		<div class="alert-box error" style="display: none;">
							Usuario y/o contrase&ntilde;a incorrecta!
							<a href="" class="close">&times;</a>
						</div>
						<label>TNE o Rut del Alumno:</label>
						<input type="text" class="input-text oversize" placeholder="Pasa tu TNE o ingresa tu rut" style="width: 100%;">

						<input type="submit" value="Entrar &raquo;" class="button nice">
					</form>


				  </li>
				  <li id="tabLoginApoderadoTab">

				  	<form class="nice custom" action="/login">
				  		<input type="hidden" name="tipo_usuario" value="apoderado">

				  		<h5>Ingreso de Apoderado</h5>
				  		<br >
						<label>Nombre de Usuario:</label>
						<input type="text" class="input-text oversize" style="width: 100%;">

						<label>Contrase&ntilde;a:</label>
						<input type="password" class="input-text oversize" style="width: 100%;" >

						<input type="submit" value="Entrar &raquo;" class="button nice large">
					</form>

				  </li>
				  <li id="tabLoginProfesorTab">

				  	<form class="nice custom" action="/login">
				  		<input type="hidden" name="tipo_usuario" value="profesor">

				  		<h5>Ingreso de Profesor</h5>
				  		<br >
						<label>Nombre de Usuario:</label>
						<input type="text" class="input-text oversize" style="width: 100%;">

						<label>Contrase&ntilde;a:</label>
						<input type="password" class="input-text oversize" style="width: 100%;" >

						<input type="submit" value="Entrar &raquo;" class="button nice large">
					</form>

				  </li>
				  <li id="tabLoginAdministracionTab">

				  	<form class="nice custom" action="/login">
				  		<input type="hidden" name="tipo_usuario" value="administracion">

				  		<h5>Ingreso de Administrador</h5>
				  		<br >
						<label>Nombre de Usuario:</label>
						<input type="text" class="input-text oversize" style="width: 100%;">

						<label>Contrase&ntilde;a:</label>
						<input type="password" class="input-text oversize" style="width: 100%;" >

						<input type="submit" value="Entrar &raquo;" class="button nice large">
					</form>

				  </li>
				</ul>

				<div class="dvLogin">
					
				</div>

			</div>
		</div>
	</section>

	<footer>
		<div class="row">
			<div class="twelve columns" align="center">
				<p><strong>Educa</strong> - Coordinando la educaci&oacute;n</p>
				<p>
					<a href="">Politicas de Privacidad</a> | 
					<a href="">Condiciones de Uso</a> | 
					<a href="">Contacto</a>
				</p>
			</div>
		</div>
	</footer>

	<!-- Included JS Files -->
	<script type="text/javascript" src="javascripts/foundation.js"></script>
	<script type="text/javascript" src="javascripts/app.js"></script>
</body>
</html>