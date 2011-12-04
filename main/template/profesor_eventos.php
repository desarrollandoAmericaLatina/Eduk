<?php include('includes/header.php');?>

<div class="row">
	<div class="four columns profile">
		<br >
		<div class="hide-on-phones panel profileInfo">
			
			<p>
				<img src="images/teacher.png" ><br >
				<strong>Arturo Vildosola</strong><br >
				Profesor de Matem&aacute;ticas<br >
				Enseñanza Media
			</p>

		</div>
		<div class="show-on-phones panel">
			
			<p>
				<img src="images/teacher.png" class="left">
			
				<strong>Arturo Vildosola</strong><br >
				Profesor de Matem&aacute;ticas<br >
				Enseñanza Media
			</p>

		</div>

	</div>
	
	<div class="eight columns panel">
		<dl class="nice tabs hide-on-phones">
			<dd><a href="/profesor.php">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php" class="active">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>

			<h5>Eventos y Noticias</h5>
			<hr>

			<div style="height: 20px;" align="right">
				<button id="actionNewEvent" class="button nice right">Publicar nuevo evento</button>
			</div>

			<dl class="nice tabs vertical">
				<dd><br><h6>CE. Baldomero Lillo A-125 - 2&ordm; Medio A</h6><br></dd>
				<dd><a href="#" class="aLinkShowNew">10/dic - Ex&aacute;men final Matem&aacute;ticas  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">12/dic - Ex&aacute;men final Lenguaje y Comunicaci&oacute;n  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">17/dic - Cierre de notas segundo semestre  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">21/dic - Ceremonia de Graduaci&oacute;n Cuartos Medios <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>CE. Baldomero Lillo A-125 - 2&ordm; Medio B</h6><br></dd>
				<dd><a href="#" class="aLinkShowNew">10/dic - Ex&aacute;men final Matem&aacute;ticas  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">12/dic - Ex&aacute;men final Lenguaje y Comunicaci&oacute;n  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">17/dic - Cierre de notas segundo semestre  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">21/dic - Ceremonia de Graduaci&oacute;n Cuartos Medios <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio A</h6><br></dd>
				<dd><a href="#" class="aLinkShowNew">10/dic - Ex&aacute;men final Matem&aacute;ticas  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">12/dic - Ex&aacute;men final Lenguaje y Comunicaci&oacute;n  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">17/dic - Cierre de notas segundo semestre  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">21/dic - Ceremonia de Graduaci&oacute;n Cuartos Medios <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio C</h6><br></dd>
				<dd><a href="#" class="aLinkShowNew">10/dic - Ex&aacute;men final Matem&aacute;ticas  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">12/dic - Ex&aacute;men final Lenguaje y Comunicaci&oacute;n  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">17/dic - Cierre de notas segundo semestre  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowNew">21/dic - Ceremonia de Graduaci&oacute;n Cuartos Medios <span class="close right">&rarr;</span></a></dd>
			</dl>
		
		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/profesor.php">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php" class="active">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>
	</div>

</div>

<div id="modalNewEvent" class="reveal-modal">
    <h2>Publicar un evento</h2>
     
    <form class="nice custom">
    	<label>Curso:</label>
     	<select name="curso">
			<option value="">-seleccione-</option>
			<option>CE. Baldomero Lillo A-125 - 2&ordm; Medio A</option>
			<option>CE. Baldomero Lillo A-125 - 2&ordm; Medio B</option>
			<option>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio A</option>
			<option>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio C</option>
		</select>

     	<label>Fecha y Hora:</label>
     	<input type="text" class="input-text small" name="fecha" placeholder="dd/mm/aaaa hh:mm" >

     	<label>Titulo:</label>
     	<input type="text" class="input-text large" name="titulo" placeholder="Prueba coeficiente 2" >

     	<label>Descripci&oacute;n</label>
     	<textarea name="descripcion" class="large" rows="10" placeholder="Detalle del evento..."></textarea>

     	<input type="submit" value="Publicar &rarr;" class="button nice">

     </form>

     <a class="close-reveal-modal">&#215;</a>
</div>
<div id="modalEventDetails" class="reveal-modal">
     <h3>Ceremonia de Graduaci&oacute;n Cuartos Medios</h3>
     <p class="lead">Liceo Sagrado Coraz&oacute;n - 21/dic a las 20:00 hrs en el <strong>Auditorium Escuela Militar</strong></p>
     <p>
     <img src="/images/evento2.jpg" alt="Celebraci&oacute;n de Aniversario del Colegio" class="left" style="margin-bottom: 5px;" /> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
     <a class="close-reveal-modal">&#215;</a>
</div>

<script>
$(function(){
	$("#actionNewEvent").click(function(){
		$('#modalNewEvent').show().reveal();
	});
	$(".aLinkShowNew").each(function(){
		var link = $(this);
		$(link).click(function(e){
			e.preventDefault();

			$('#modalEventDetails').show().reveal();
		});
	});
});
</script>
<?php include('includes/footer.php');?>