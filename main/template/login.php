<?php include('includes/header.php');?>

<div class="row show-on-phones">
	<div class="six columns">
		<br />

		<div>
			<dl class="nice contained tabs">
			  <dd><a href="#tabLoginAlumnoPhone" class="active">Alumno</a></dd>
			  <dd><a href="#tabLoginApoderadoPhone">Apoderado</a></dd>
			</dl>
		</div>

		<ul class="nice tabs-content contained">
		  <li id="tabLoginAlumnoPhoneTab" class="active">

		  	<form class="nice custom" action="/login.html" id="frmLoginAlumnoPhone">
		  		<input type="hidden" name="tipo_usuario" value="alumno">
		  		
		  		<h5>Ingreso de Alumno</h5>

		  		<div class="alert-box error" style="display: none;">
					La TNE o la conbinaci&oacute;n email/contrase&ntilde;a ingresada no es valida, vuelve a intentarlo!
				</div>

				<label>TNE o Email del Alumno:</label>
				<input type="text" name="username" id="username-default-phone" class="input-text oversize" placeholder="Pasa tu TNE o ingresa tu email" autocomplete="off" style="width: 100%;">

				<div id="dvLoginAlumnoContrasenaPhone">
					<label>Contrase&ntilde;a:</label>
					<input type="password" name="password" class="input-text oversize" style="width: 100%;" >
				</div>

				<input type="submit" value="Entrar &raquo;" class="button nice">
			</form>

		  </li>
		  <li id="tabLoginApoderadoPhoneTab">

		  	<form class="nice custom" action="/login.html" id="frmLoginApoderadoPhone">
		  		<input type="hidden" name="tipo_usuario" value="apoderado">

		  		<h5>Ingreso de Apoderado</h5>
		  		
		  		<div class="alert-box error" style="display: none;">
					Usuario y/o contrase&ntilde;a incorrecta!
				</div>

				<label>Nombre de Usuario:</label>
				<input type="text" name="username" class="input-text oversize" style="width: 100%;">

				<label>Contrase&ntilde;a:</label>
				<input type="password" name="password" class="input-text oversize" style="width: 100%;" >

				<input type="submit" value="Entrar &raquo;" class="button nice">
			</form>

		  </li>
		</ul>
	</div>
</div>
<div class="row hide-on-phones">
	<div class="six columns centered">
		<br ><br ><br >

		<div>
			<dl class="nice contained tabs">
				<dd><a href="#tabLoginAlumno" class="active">Alumno</a></dd>
				<dd><a href="#tabLoginApoderado">Apoderado</a></dd>
				<dd><a href="#tabLoginDocente">Docente</a></dd>
			</dl>
		</div>

		<ul class="nice tabs-content contained">
		  <li id="tabLoginAlumnoTab" class="active">

		  	<form class="nice custom" action="/login.html" id="frmLoginAlumno">
		  		<input type="hidden" name="tipo_usuario" value="alumno">
		  		
		  		<h5>Ingreso de Alumno</h5>

		  		<div class="alert-box error" style="display: none;">
					La TNE o la conbinaci&oacute;n email/contrase&ntilde;a ingresada no es valida, vuelve a intentarlo!
				</div>

				<label>TNE o Email del Alumno:</label>
				<input type="text" name="username" autocomplete="off" id="username-default" class="input-text oversize" placeholder="Pasa tu TNE o ingresa tu email" style="width: 100%;">

				<div id="dvLoginAlumnoContrasena">
					<label>Contrase&ntilde;a:</label>
					<input type="password" name="password" class="input-text oversize" style="width: 100%;" >
				</div>

				<input type="submit" value="Entrar &raquo;" class="button nice large">
			</form>


		  </li>
		  <li id="tabLoginApoderadoTab">

		  	<form class="nice custom" action="/login.html" id="frmLoginApoderado">
		  		<input type="hidden" name="tipo_usuario" value="apoderado">

		  		<h5>Ingreso de Apoderado</h5>
		  		
				<div class="alert-box error" style="display: none;">
					Usuario y/o contrase&ntilde;a incorrecta!
				</div>

				<label>Nombre de Usuario:</label>
				<input type="text" name="username" class="input-text oversize" style="width: 100%;">

				<label>Contrase&ntilde;a:</label>
				<input type="password" name="password" class="input-text oversize" style="width: 100%;" >

				<input type="submit" value="Entrar &raquo;" class="button nice large">
			</form>

		  </li>
		  <li id="tabLoginDocenteTab">

		  	<form class="nice custom" action="/login.html" id="frmLoginDocente">
		  		<input type="hidden" name="tipo_usuario" value="docente">

		  		<h5>Ingreso de Docente</h5>
		  		
		  		<div class="alert-box error" style="display: none;">
					Usuario y/o contrase&ntilde;a incorrecta!
				</div>

				<label>Nombre de Usuario:</label>
				<input type="text" name="username" class="input-text oversize" style="width: 100%;">

				<label>Contrase&ntilde;a:</label>
				<input type="password" name="password" class="input-text oversize" style="width: 100%;" >

				<input type="submit" value="Entrar &raquo;" class="button nice large">
			</form>

		  </li>
		</ul>

		<br ><br ><br ><br ><br ><br ><br ><br >
	</div>
</div>

<script type="text/javascript" src="/javascripts/login.js"></script>

<?php include('includes/footer.php');?>