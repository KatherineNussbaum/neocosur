jQuery(document).ready(function(){

	// Mostrar / Ocultar tabs Paises
	// ===========================================================

	$("#accordion_brasil, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_uruguay").hide();

	$("#btn_argentina").click(function(){
		$(this).attr("class","active");
		$("#accordion_argentina").show();
		$("#accordion_brasil, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_uruguay").hide();
		$("#accordion_brasil, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_uruguay").removeAttr("class");
	});

	$("#btn_brasil").click(function(){
		$(this).attr("class","active");
		$("#accordion_brasil").show();
		$("#accordion_argentina, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_uruguay").hide();
		$("#accordion_argentina, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_uruguay").removeAttr("class");
	});

	$("#btn_chile").click(function(){
		$(this).attr("class","active");
		$("#accordion_chile").show();
		$("#accordion_brasil, #accordion_argentina, #accordion_peru, #accordion_paraguay, #accordion_uruguay").hide();
		$("#accordion_brasil, #accordion_argentina, #accordion_peru, #accordion_paraguay, #accordion_uruguay").removeAttr("class");
	});

	$("#btn_peru").click(function(){
		$("#accordion_peru").show();
		$("#accordion_brasil, #accordion_chile, #accordion_argentina, #accordion_paraguay, #accordion_uruguay").hide();
	});

	$("#btn_paraguay").click(function(){
		$("#accordion_paraguay").show();
		$("#accordion_brasil, #accordion_chile, #accordion_peru, #accordion_argentina, #accordion_uruguay").hide();
	});

	$("#btn_uruguay").click(function(){
		$("#accordion_uruguay").show();
		$("#accordion_brasil, #accordion_chile, #accordion_peru, #accordion_paraguay, #accordion_argentina").hide();
	});


});