jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();
    $("#malformacion_cognitiva").hide();


// Diabetes
// -------------------------------------------
	$( "#diabetes_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".diabetes").show();
    	}});
	$( "#diabetes_no, #diabetes_s_i"  ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".diabetes").hide();
    		$("input[name*='diabetes_gestacional']").removeProp("checked");
    	}});

// Ht Art
// -------------------------------------------
	$( "#ht_art_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".ht_art").show();
    	}});
	$( "#ht_art_no" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".ht_art").hide();
    		$("input[name*='ht_art']").removeProp("checked");
    	}});

// Multiple
// -------------------------------------------
	$( "#multiple_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".multiple").show();
    	}});
	$( "#multiple_no" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".multiple").hide();
    		$("select[name*='paridad']").val("0");
    	}});

// Cort. prenatal
// -------------------------------------------
	$( "#cort_prenatal_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".cort_prenatal").show();
    		if( $("#completo_si").prop( "checked" ) ){
    			$(".completo").show();
    		}
    	}});
	$( "#cort_prenatal_no" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".cort_prenatal").hide();
    		$("#completo_si, #completo_no, #curso1, #curso2").removeProp("checked");
    		$(".completo").hide();
    	}});
	$( "#cort_prenatal_s_i" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".cort_prenatal").hide();
    		$("#completo_si, #completo_no, #curso1, #curso2").removeProp("checked");
    		$(".completo").hide();
    	}});

	$( "#completo_no" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".completo").show();
    		$("input[name*='curso']").removeProp("checked");

    	}});
	$( "#completo_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".completo").hide();
    		$("input[name*='curso']").removeProp("checked");
    	}});


// Malformación
// -------------------------------------------
	$("#malformacion_si").change(function(){
		var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".compromete").show();
    	}
	});
	
	$( "#malformacion_no, #malformacion_s_i" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{

            $("input[name*='cual_defecto']").val("");
            $("#cual_defecto").hide();
    		$(".compromete").hide();
    		$("input[name*='compromete']").removeProp("checked");
    		$(".detalle_compromete").hide();
    		$("input[class*='detalle_compromete']").removeProp("checked");
            $("textarea[name*='obs_malformaciones']").val("");

    	}});

	$("#compromete_si").change(function(){
		var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".detalle_compromete").show();
    	}
	});

	$("#compromete_no").change(function(){
		var $input = $( this );
    	if( $input.prop("checked") )
    	{

            $("input[name*='cual_defecto']").val("");
            $("#cual_defecto").hide();
    		$(".detalle_compromete").hide();
    		$("input[class*='detalle_compromete']").removeProp("checked");
            $("textarea[name*='obs_malformaciones']").val("");
            
    	}
	});

    $("#otro_defecto").change(function(){
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#cual_defecto").show();
        }
        else
        {
            $("#cual_defecto").hide();
            $("input[name*='cual_defecto']").val("");
        }
    });


// Mostrar/Cambiar de Sub-Secciones
// ===========================================
    $("#sec_malformacion").click(function(){
        $("#principal").fadeOut('fast');
        $("#malformacion_cognitiva").fadeIn('slow');
    });

    $("#sec_principal").click(function(){
        $("#malformacion_cognitiva").fadeOut('fast');
        $("#principal").fadeIn('slow');
    });
    


// cierre de archivo
});