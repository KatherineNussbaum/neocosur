jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();

    $("#sec_evolucion_posterior").hide();


// Función Auditiva - Pesquisa antes del alta
// -------------------------------------------
    $("#pesquisa_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_pesquisa_si").show();
            $("#pesquisa_alta_1, #pesquisa_alta_2, #pesquisa_alta_3").hide();
        }
    });

    $("#pesquisa_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("input[name*='pesquisa_alta_1']").removeProp("checked");
            $("input[name*='pesquisa_alta_2']").removeProp("checked");
            $("input[name*='pesquisa_alta_3']").removeProp("checked");

            $("#check_pesquisa_alta_1,#check_pesquisa_alta_2, #check_pesquisa_alta_3").removeProp("checked");

            $("#pesquisa_alta_1, #pesquisa_alta_2, #pesquisa_alta_3").hide();
            $("#sec_pesquisa_si").hide();
        }
    });


    $("#check_pesquisa_alta_1").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#pesquisa_alta_1").show();
        }
        else
        {
            $("#pesquisa_alta_1").hide();
            $("input[name*='pesquisa_alta_1']").removeProp("checked");

        }
    });

    $("#check_pesquisa_alta_2").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#pesquisa_alta_2").show();
        }
        else
        {
            $("#pesquisa_alta_2").hide();
            $("input[name*='pesquisa_alta_2']").removeProp("checked");

        }
    });

    $("#check_pesquisa_alta_3").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#pesquisa_alta_3").show();
        }
        else
        {
            $("#pesquisa_alta_3").hide();
            $("input[name*='pesquisa_alta_3']").removeProp("checked");

        }
    });



// Fin de función principal
});