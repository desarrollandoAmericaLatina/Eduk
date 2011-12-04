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
			<dd><a href="/profesor_materiales.php" class="active">Solicitud de Materiales</a></dd>
		</dl>

			<h5>Solicitud de Materiales</h5>
			<hr>

			<div style="height: 20px;" align="right">
				<button id="actionNewRequestMaterials" class="button nice right">Nueva Solicitud de Materiales</button>
			</div>

			<dl class="nice tabs vertical">
				<dd><br><h6>CE. Baldomero Lillo A-125 - 2&ordm; Medio A</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">20 de Diciembre - <small>Matem&aacute;ticas</small> <span class="close right">&rarr;</span></a></dd>

				<dd><br><h6>CE. Baldomero Lillo A-125 - 2&ordm; Medio B</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">20 de Diciembre - <small>Matem&aacute;ticas</small> <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowSummary">21 de Diciembre - <small>Matem&aacute;ticas</small>  <span class="close right">&rarr;</span></a></dd>

				<dd><br><h6>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio A</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">20 de Diciembre - <small>Matem&aacute;ticas</small> <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowSummary">24 de Diciembre - <small>Matem&aacute;ticas</small> <span class="close right">&rarr;</span></a></dd>

				<dd><br><h6>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio C</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">24 de Diciembre - <small>Matem&aacute;ticas</small> <span class="close right">&rarr;</span></a></dd>
			</dl>
		
		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/profesor.php">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php" class="active">Solicitud de Materiales</a></dd>
		</dl>
	</div>

</div>

<div id="myModal" class="reveal-modal">
    <h2>Solicitud de Materiales</h2>
     
    <form class="nice custom">
    	<label>Curso:</label>
     	<select name="curso">
			<option value="">-seleccione-</option>
			<option>CE. Baldomero Lillo A-125 - 2&ordm; Medio A</option>
			<option>CE. Baldomero Lillo A-125 - 2&ordm; Medio B</option>
			<option>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio A</option>
			<option>Liceo Sagrado Coraz&oacute;n - 1&ordm; Medio C</option>
		</select>

     	<label>Fecha:</label>
     	<input type="text" class="input-text small" name="fecha" placeholder="dd/mm/aaaa" >

     	<label>Materiales:</label>
     	<textarea name="materiales" class="large" rows="10" placeholder="Tempera, Block de Notas, ..."></textarea>

     	<input type="submit" value="Publicar &rarr;" class="button nice">

    </form>

    <a class="close-reveal-modal">&#215;</a>
</div>

<script>
$(function(){
	$("#actionNewRequestMaterials").click(function(e){
		$('#myModal').show().reveal();
	});
});
</script>
<?php include('includes/footer.php');?>