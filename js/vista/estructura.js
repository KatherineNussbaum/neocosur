jQuery(document).ready(function(){

	// Mostrar / Ocultar tabs Paises
	// ===========================================================
	$("#btn_directivo").addClass("active");
	$("#cientifico, #base, #otros").hide();
	
	$("#btn_directivo").click(function(){
		$("#btn_cientifico, #btn_base, #btn_otros").removeClass("active");
		$(this).addClass("active");
		$("#directivo").show();
		$("#cientifico, #base, #otros").hide();
	});

	$("#btn_cientifico").click(function(){
		$("#btn_directivo, #btn_base, #btn_otros").removeClass("active");
		$(this).addClass("active");
		$("#cientifico").show();
		$("#directivo, #base, #otros").hide();
	});

	$("#btn_base").click(function(){
		$("#btn_directivo, #btn_cientifico, #btn_otros").removeClass("active");
		$(this).addClass("active");
		$("#base").show();
		$("#directivo, #cientifico, #otros").hide();
	});

	$("#btn_otros").click(function(){
		$("#btn_cientifico, #btn_base, #btn_directivo").removeClass("active");
		$(this).addClass("active");
		$("#otros").show();
		$("#cientifico, #base, #directivo").hide();
	});


});