$(function(){
	$('#featured').orbit({
		captions: true,
		bullets: true,
		directionalNav: false
	});
	$(".aLinkShowNew").each(function(){
		var link = $(this);
		$(link).click(function(e){
			e.preventDefault();

			$('#myModal').show().reveal();
		});
	});
});