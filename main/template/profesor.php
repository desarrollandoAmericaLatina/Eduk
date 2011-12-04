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
			<dd><a href="/profesor.php" class="active">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>

			<h5>Mis Cursos</h5>
			<hr>

			<dl class="nice tabs vertical">
				<dd><br><h6>CE. Baldomero Lillo A-125</h6><br></dd>
				<dd><a class="aLinkShowSummary">
					1&ordm; Medio A
					<span class="right actionRequestMaterials" style="cursor: pointer;" title="Solicitud de Materiales"><img src="/images/icon_disk.png">&nbsp;</span>
					<span class="right actionNewEvent" style="cursor: pointer;" title="Publicar un Evento"><img src="/images/icon_microphone.png">&nbsp;</span>
					<span class="right actionViewTemario" style="cursor: pointer;" title="Ver Temario de Ramo"><img src="/images/icon_pencil.png">&nbsp;</span>
				</a></dd>
				<dd><a href="#" class="aLinkShowSummary">
					1&ordm; Medio B
					<span class="right actionRequestMaterials" style="cursor: pointer;" title="Solicitud de Materiales"><img src="/images/icon_disk.png">&nbsp;</span>
					<span class="right actionNewEvent" style="cursor: pointer;" title="Publicar un Evento"><img src="/images/icon_microphone.png">&nbsp;</span>
					<span class="right actionViewTemario" style="cursor: pointer;" title="Ver Temario de Ramo"><img src="/images/icon_pencil.png">&nbsp;</span>
				</a></dd>
				<dd><br><h6>Liceo Sagrado Coraz&oacute;n</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">
					2&ordm; Medio A
					<span class="right actionRequestMaterials" style="cursor: pointer;" title="Solicitud de Materiales"><img src="/images/icon_disk.png">&nbsp;</span>
					<span class="right actionNewEvent" style="cursor: pointer;" title="Publicar un Evento"><img src="/images/icon_microphone.png">&nbsp;</span>
					<span class="right actionViewTemario" style="cursor: pointer;" title="Ver Temario de Ramo"><img src="/images/icon_pencil.png">&nbsp;</span>
				</a></dd>
				<dd><a href="#" class="aLinkShowSummary">
					2&ordm; Medio C
					<span class="right actionRequestMaterials" style="cursor: pointer;" title="Solicitud de Materiales"><img src="/images/icon_disk.png">&nbsp;</span>
					<span class="right actionNewEvent" style="cursor: pointer;" title="Publicar un Evento"><img src="/images/icon_microphone.png">&nbsp;</span>
					<span class="right actionViewTemario" style="cursor: pointer;" title="Ver Temario de Ramo"><img src="/images/icon_pencil.png">&nbsp;</span>
				</a></dd>
			</dl>
		
		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/profesor.php" class="active">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>
	</div>

</div>

<div id="modalNewEvent" class="reveal-modal">
     <h2>Publicar un evento</h2>
     <p class="lead">Liceo Sagrado Coraz&oacute;n - 2&ordm; Medio A</p>
     
     <form class="nice">
     	
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
<div id="modalNewMaterial" class="reveal-modal">
     <h2>Solicitud de Materiales</h2>
     <p class="lead">Liceo Sagrado Coraz&oacute;n - 2&ordm; Medio A</p>
     
     <form class="nice">
     	
     	<label>Fecha:</label>
     	<input type="text" class="input-text small" name="fecha" placeholder="dd/mm/aaaa" >

     	<label>Materiales:</label>
     	<textarea name="descripcion" class="large" rows="10" placeholder="Tempera, Block de Notas, ..."></textarea>

     	<input type="submit" value="Solicitar &rarr;" class="button nice">

     </form>

     <a class="close-reveal-modal">&#215;</a>
</div>
<script>
$(function(){
	$(".actionNewEvent").each(function(){
		$(this).click(function(){
			$('#modalNewEvent').show().reveal();
		});
	});
	$(".actionViewTemario").each(function(){
		$(this).click(function(){
			window.location = '/profesor_temario.php';
		});
	});
	$(".actionRequestMaterials").each(function(){
		$(this).click(function(){
			$("#modalNewMaterial").show().reveal();
		});
	});
});
</script>
<?php include('includes/footer.php');?>