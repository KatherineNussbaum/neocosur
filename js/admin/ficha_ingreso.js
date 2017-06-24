jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();
    $("#malformacion_cognitiva").hide();
    $("#oftalmologica").hide();
    $("#sepsis").hide();


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


// HIC (Grado)
// -------------------------------------------
    $( "#hic_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".hic_grado").show();
        }});
    $( "#hic_no" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".hic_grado").hide();
            $("select[name*='grado']").val('0');
        }});


// Rup. Alveolar
// -------------------------------------------
    $( "#alveolar_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".cual_alveolar").show();
        }});
    $( "#alveolar_no, #alveolar_s_i" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".cual_alveolar").hide();
            $("input[class*='detalle_alveolar']").removeProp("checked");
        }});


// Ductus
// -------------------------------------------
    $( "#ductus_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".ductus").show();
        }});
    $( "#ductus_no, #ductus_s_i" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".ductus").hide();
            $("input[class*='detalle_ductus']").removeProp("checked");
        }});

// Evaluación previa al alta
// -------------------------------------------
    $( "#previa_alta_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".tabla_previa_alta").show();
        }});

    $( "#previa_alta_no" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $(".tabla_previa_alta").hide();
            $("#detalle_cirugia_izq").hide();
            $("#detalle_cirugia_der").hide();
            $("input[class*='detalle_tabla_previa_alta']").removeProp("checked");
            $("select[class*='detalle_tabla_previa_alta']").val('0');
        }});

// Cirugia ojos
// -------------------------------------------
    $( "#cirugia_izq_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_cirugia_izq").show();
        }});

    $( "#cirugia_izq_no, #cirugia_izq_s_i" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_cirugia_izq").hide();
            $("select[id*='cual_cirugia_izq']").val('0');
        }});


    $( "#cirugia_der_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_cirugia_der").show();
        }});

    $( "#cirugia_der_no, #cirugia_der_s_i" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_cirugia_der").hide();
            $("select[id*='cual_cirugia_der']").val('0');
        }});

// Sepsis Precoz
// -------------------------------------------
    $( "#sepsis_precoz_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_sepsis_precoz").show();
        }});

    $( "#sepsis_precoz_no" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_sepsis_precoz").hide();
            $("input[class*='detalle_sepsis_precoz']").removeProp("checked");
            $("select[class*='detalle_sepsis_precoz']").val('0');
        }});

// Sepsis Tardía
// -------------------------------------------
    $( "#sepsis_tardia_si" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_sepsis_tardia").show();
        }});

    $( "#sepsis_tardia_no" ).change(function() {
        var $input = $( this );
        if( $input.prop("checked") )
        {
            $("#detalle_sepsis_tardia").hide();
            $("input[class*='detalle_sepsis_tardia']").val('');
            $("select[class*='detalle_sepsis_tardia']").val('0');
        }});

    $( "#detalle_sepsis_tardia_germen" ).change(function() {
        var $input = $( this );
        if( $input.val() == "otro" )
        {
            $(".detalle_sepsis_tardia_otro").show();
        }
        else
        {
            $(".detalle_sepsis_tardia_otro").hide();
            $("input[class*='detalle_sepsis_tardia_otro']").val('');
        }
    });

    $( "#detalle_lrc_germen" ).change(function() {
        var $input = $( this );
        if( $input.val() == "otro" )
        {
            $(".detalle_lrc_otro").show();
        }
        else
        {
            $(".detalle_lrc_otro").hide();
            $("input[class*='detalle_lrc_otro']").val('');
        }
    });




// Mostrar/Cambiar de Sub-Secciones
// ===========================================
    $("#sec_malformacion").click(function(){
        $( this ).css( {"color" : "#000" });
        $("#sec_principal").css( {"color" : "#999" });

        $("#principal").fadeOut('fast');
        $("#malformacion_cognitiva").fadeIn('slow');
    });

    $("#sec_principal").click(function(){
        $( this ).css( {"color" : "#000" });
        $("#sec_malformacion").css( {"color" : "#999" });

        $("#malformacion_cognitiva").fadeOut('fast');
        $("#principal").fadeIn('slow');
    });
    
    $("#sec_principal_neonatales").click(function(){
        $( this ).css( {"color" : "#000" });
        $("#sec_oftalmologica, #sec_sepsis").css( {"color" : "#999" });

        $("#oftalmologica, #sepsis").fadeOut('fast');
        $("#principal_neonatales").fadeIn('slow');
    });

    $("#sec_oftalmologica").click(function(){
        $( this ).css( {"color" : "#000" });
        $("#sec_sepsis, #sec_principal_neonatales").css( {"color" : "#999" });

        $("#principal_neonatales, #sepsis").fadeOut('fast');
        $("#oftalmologica").fadeIn('slow');
    });

    $("#sec_sepsis").click(function(){
        $( this ).css( {"color" : "#000" });
        $("#sec_oftalmologica, #sec_principal_neonatales").css( {"color" : "#999" });

        $("#principal_neonatales, #oftalmologica").fadeOut('fast');
        $("#sepsis").fadeIn('slow');
    });



// cierre de archivo
});