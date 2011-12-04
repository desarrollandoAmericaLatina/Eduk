$(function(){
	$("#username-default").focus();
	$("#username-default-phone").focus();

	$("form").each(function(){
		$(this).submit(function(e){
			e.preventDefault();
			
			/*$(".alert-box", $(this)).show();
			$("input[type='text']", $(this)).val('');*/
			if($('input[name="tipo_usuario"]', $(this)).val()=='apoderado'){
				window.location = '/pupilos.php';
			}else{
				window.location = '/index.php';
			}
		});
	});

	$("#username-default-phone").keyup(function(e){
		if($(this).val()!='' && buscaEmail($(this).val())){
			$("#dvLoginAlumnoContrasenaPhone").show();
		}else{
			$("#dvLoginAlumnoContrasenaPhone").hide();
		}
	});

	$("#username-default").keyup(function(e){
		if(buscaEmail($(this).val())){
			$("#dvLoginAlumnoContrasena").show();
		}else{
			$("#dvLoginAlumnoContrasena").hide();
		}
	});

	function buscaEmail(texto){
		for(i=0;i<texto.length;i++){
			if(texto.charAt(i)=="@" && i != (texto.length-1) && (i != 0))
				return true;
		}
		return false;
	}
});