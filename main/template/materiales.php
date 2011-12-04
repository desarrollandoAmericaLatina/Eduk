<?php include('includes/header.php');?>

<div class="row">
	
	<div class="four columns profile">
		<br >
		<div class="hide-on-phones panel profileInfo">
			
			<p>
				<img src="images/photo.jpg" ><br >
				<strong>Jos&eacute; Eduardo R&iacute;os</strong><br >
				4&ordm; Medio A<br >
				Administraci&oacute;n de Empresa
			</p>

		</div>

		<h5 class="hide-on-phones">Otros Pupilos</h5>

		<div class="hide-on-phones panel" style="min-height: 85px;">
			<p>
				<img src="images/photo2.jpg" class="left" style="height: 75px; margin-right: 10px;">
				<strong><a href="">Andrea R&iacute;os Diaz</a></strong><br >
				2&ordm; Medio A
				<br><br><br>
				<a href="" class="close right">Revisar &rarr;</a>
			</p>
		</div>

		<div class="hide-on-phones panel" style="min-height: 85px;">
			<p>
				<img src="images/photo3.jpg" class="left" style="height: 75px; margin-right: 10px;">
				<strong><a href="">Leon R&iacute;os Diaz</a></strong><br >
				4&ordm; B&aacute;sico C
				<br><br><br>
				<a href="" class="close right">Revisar &rarr;</a>
			</p>
		</div>

		<div class="show-on-phones panel">
			
			<p>
				<img src="images/photo.jpg" class="left">
			
				<strong>Jos&eacute; Eduardo R&iacute;os</strong><br >
				4&ordm; Medio A<br >
				Administraci&oacute;n de Empresa
			</p>

		</div>

	</div>

	<div class="eight columns">
		<br >
		<dl class="nice tabs hide-on-phones">
			<dd><a href="/index.php">Eventos</a></dd>
			<dd><a href="/temarios.php">Temarios</a></dd>
			<dd><a href="/materiales.php" class="active">Materiales</a></dd>
		</dl>

			<h5>Materiales</h5>
			<hr>

			<dl class="nice tabs vertical">
				<dd><h6>Hoy</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">20/12 - Tecnolog&iacute;a - <small>Cristian Lobos</small> <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>Ma&ntilde;ana</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">21/12 - Matem&aacute;ticas - <small>Arturo Vidosola</small>  <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>Pr&oacute;ximos d&iacute;as</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">21/12 - Ciencias Sociales - <small>Ana Cortez</small>  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowSummary">24/12 - Contabilidad - <small>Mauricio Rojas</small> <span class="close right">&rarr;</span></a></dd>
			</dl>

		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/index.php">Eventos</a></dd>
			<dd><a href="/temarios.php">Temarios</a></dd>
			<dd><a href="/materiales.php" class="active">Materiales</a></dd>
		</dl>

	</div>

	<div class="row show-on-phones">
		<div class="twelve columns">
			<form class="nice custom">
				<label>Revisar a otro pupilo:</label>
				<select>
					<option value="">-seleccione-</option>
					<option>Andrea R&iacute;os Diaz</option>
					<option>Le&oacute;n R&iacute;os Diaz</option>
				</select>
			</form>
		</div>
	</div>

</div>

<div id="myModal" class="reveal-modal">
    <h2>Solicitud de Materiales</h2>
    <p class="lead">Tecnolog&iacute;a - 20 de diciembre</p>
     
    <dl class="nice tabs vertical">
		<dd><a>Regla</a></dd>
		<dd><a>Papel Lustre</a></dd>
		<dd><a>Pegamento</a></dd>
		<dd><a>Tempera</a></dd>
	</dl>

    <a class="close-reveal-modal">&#215;</a>
</div>

<script type="text/javascript" src="/javascripts/materiales.js"></script>

<?php include('includes/footer.php');?>