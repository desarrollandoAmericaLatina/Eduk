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
			<dd><a href="/index.php" class="active">Eventos</a></dd>
			<dd><a href="/temarios.php">Temarios</a></dd>
			<dd><a href="/materiales.php">Materiales</a></dd>
		</dl>

			<h5>Eventos y Noticias</h5>
			<hr>


			<div id="featured"> 
			    <img src="/images/evento1.jpg" alt="Celebraci&oacute;n de Aniversario del Colegio" />
			    <img src="/images/evento2.jpg" alt="Ceremonia de Graduaci&oacute;n de Cuartos Medios" />
			    <img src="/images/evento3.jpg" alt="Paseo de Curso" />
			</div>
			<br><br>

			<dl class="nice tabs vertical">
				<dd><a href="#" class="aLinkShowNew">10/dic - Ex&aacute;men final Matem&aacute;ticas  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">12/dic - Ex&aacute;men final Lenguaje y Comunicaci&oacute;n  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">17/dic - Cierre de notas segundo semestre  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">21/dic - Ceremonia de Graduaci&oacute;n Cuartos Medios <span class="close right">&rarr;</span></a></dd>
			</dl>
		

		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/index.php" class="active">Eventos</a></dd>
			<dd><a href="/temarios.php">Temarios</a></dd>
			<dd><a href="/materiales.php">Materiales</a></dd>
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
     <h3>Ceremonia de Graduaci&oacute;n Cuartos Medios</h3>
     <p class="lead">21 de diciembre a las 20:00 hrs en el <strong>Auditorium Escuela Militar</strong></p>
     <p>
     <img src="/images/evento2.jpg" alt="Celebraci&oacute;n de Aniversario del Colegio" class="left" style="margin-bottom: 5px;" /> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
     <a class="close-reveal-modal">&#215;</a>
</div>

<script type="text/javascript" src="/javascripts/index.js"></script>

<?php include('includes/footer.php');?>