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
			<dd><a href="/profesor_eventos.php">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php" class="active">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>

			<h5>Temarios de Ramos</h5>
			<hr>

			<dl class="nice tabs vertical">
				<dd><br><h6>CE. Baldomero Lillo A-125</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">Matem&aacute;ticas 1&ordm; Medio  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowSummary">Matem&aacute;ticas 2&ordm; Medio  <span class="close right">&rarr;</span></a></dd>
				<dd><br><h6>Liceo Sagrado Coraz&oacute;n</h6><br></dd>
				<dd><a href="#" class="aLinkShowSummary">Matem&aacute;ticas 1&ordm; Medio  <span class="close right">&rarr;</span></a></dd>
				<dd><a href="#" class="aLinkShowSummary">Matem&aacute;ticas 2&ordm; Medio  <span class="close right">&rarr;</span></a></dd>
			</dl>
		
		<dl class="nice mobile tabs show-on-phones">
			<dd><a href="/profesor.php">Mis Cursos</a></dd>
			<dd><a href="/profesor_eventos.php">Eventos</a></dd>
			<dd><a href="/profesor_temarios.php" class="active">Temarios de Ramos</a></dd>
			<dd><a href="/profesor_materiales.php">Solicitud de Materiales</a></dd>
		</dl>
	</div>

</div>

<div id="myModal" class="reveal-modal">
    <h2>Matem&aacute;ticas - 1&ordm; Medio</h2>
    <p class="lead">Liceo Sagrado Coraz&oacute;n</p>
     
     <ul>
     	<li>Números y Proporcionalidad
     		<ul>
     			<li>Distinción entre números racionales e irracionales. Aproximación y estimación de números irracionales. Estimaciones de cálculos, redondeos. Construcción de decimales no periódicos. Distinción entre una aproximación y un número exacto.</li>
     			<li>Análisis de la significación de las cifras en la resolución de problemas. Conocimiento sobre las limitaciones de las calculadoras en relación con truncar y aproximar decimales.</li>
     			<li>Resolución de desafíos y problemas numéricos, tales como cuadrados mágicos o cálculos orientados a la identificación de regularidades numéricas.</li>
     		</ul>
     	</li>
     	<li>Álgebra y Funciones
     		<ul>
     			<li>Sentido, notación y uso de las letras en el lenguaje algebraico. Expresiones algebraicas no fraccionarias y su operatoria. Múltiplos, factores, divisibilidad. Transformación de expresiones algebraicas por eliminación de paréntesis, por reducción de términos semejantes y por factorización.  Cálculo de productos, factorizaciones y productos notables.</li>
     			<li>Ecuación de primer grado. Resolución de ecuaciones de primer grado con una incógnita. Planteo y resolución de problemas que involucren ecuaciones de primer grado con una incógnita. Análisis de los datos, las soluciones y su pertinencia.</li>
     			<li>Representación, análisis y resolución de problemas contextualizados en situaciones como la asignación de precios por tramos de consumo, por ejemplo, de agua, luz, gas, etc. Variables dependientes e independientes. Función parte entera.  Gráfico de la función.</li>
     		</ul>
     	</li>
     	<li>Geometría
     		<ul>
     			<li>Congruencia de dos figuras planas.  Criterios de congruencia de triángulos.</li>
     			<li>Demostración de propiedades de triángulos, cuadriláteros y circunferencia, relacionadas con congruencia.</li>
     			<li>Semejanza de figuras planas. Criterios de semejanza. Dibujo a escala en diversos contextos.</li>
     		</ul>
     	</li>
     	<li>Probabilidad y Estadística
     		<ul>
     			<li>Juegos de azar sencillos; representación y análisis de los resultados; uso de tablas y gráficos.</li>
     			<li>Variable aleatoria: estudio y experimentación en casos concretos. Gráfico de frecuencia de una variable aleatoria a partir de un experimento estadístico.</li>
     			<li>Muestra al azar, considerando situaciones de la vida cotidiana; por ejemplo, ecología, salud pública, control de calidad, juegos de azar, etc. Inferencias a partir de distintos tipos de muestra.</li>
     		</ul>
     	</li>
     </ul>

    <a class="close-reveal-modal">&#215;</a>
</div>

<script>
$(function(){
	$(".aLinkShowSummary").each(function(){
		var link = $(this);
		$(link).click(function(e){
			e.preventDefault();

			$('#myModal').show().reveal();
		});
	});
});
</script>
<?php include('includes/footer.php');?>