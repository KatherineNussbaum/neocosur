jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();


// Malformación
// -------------------------------------------
	$( "#malformacion_si" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".malformaciones").show();
    	}});
	$( "#malformacion_no" ).change(function() {
    	var $input = $( this );
    	if( $input.prop("checked") )
    	{
    		$(".malformaciones").hide();
    		$("input[name*='malformaciones']").removeProp("checked");
    		$("textarea[name*='obs_malformaciones']").val("");
    	}});
});