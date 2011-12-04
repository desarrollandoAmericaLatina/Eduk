$(function(){
	$(".aLinkShowSummary").each(function(){
		var link = $(this);
		$(link).click(function(e){
			e.preventDefault();

			$('#myModal').show().reveal();
		});
	});
});