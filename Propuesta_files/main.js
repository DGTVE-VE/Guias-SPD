
$(document).ready(function(){
	
	 $(".infografia img").click(function(){
        $("#infografia1, #infoUno, #infoDos, #queSigue, #infoTres, #infoCuatro, #infoCinco, #infoSeis, #Asignacion, #etapasEvaluacion, #infoSeisB ").slideUp("slow");
    });
    $("#btnInfoUno").click(function(){
        $("#infoUno").slideToggle("slow");
    });
	 $("#btnInfoDos").click(function(){
        $("#infoDos").slideToggle("slow");
    });
	$("#btnqueSigue").click(function(){
        $("#queSigue").slideToggle("slow");
    });
	$("#btnInfoTres").click(function(){
        $("#infoTres").slideToggle("slow");
    });
	$("#btnInfoCuatro").click(function(){
        $("#infoCuatro").slideToggle("slow");
    });
	$("#btnInfoCinco").click(function(){
        $("#infoCinco").slideToggle("slow");
    });
	$("#btnInfoSeis").click(function(){
        $("#infoSeis").slideToggle("slow");
    });
	$("#btnAsignacion").click(function(){
        $("#Asignacion").slideToggle("slow");
    });
	$("#etapasEvaluacion").click(function(){
        $("#EtapasInstrum").slideToggle("slow");
    });
	$("#evaluacion3B").click(function(){
        $("#infoSeisB").slideToggle("slow");
    });
	$("#PromocionATPMS").click(function(){
        $("#contenido1").slideToggle("slow");
    });
	$("#PromocionSupervisiónMS").click(function(){
        $("#contenido2").slideToggle("slow");
    });
	$("#PromocionDireccionMS").click(function(){
        $("#contenido3").slideToggle("slow");
    });
	$("#PromocionMS").click(function(){
        $("#contenido4").slideToggle("slow");
    });
	$("#PromocionDireccion").click(function(){
        $("#contenido5").slideToggle("slow");
    });
});

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
