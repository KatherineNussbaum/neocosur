jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();

    $("#sec_evolucion_posterior").hide();
    $("#sec_evaluacion_auditiva_normal_no").hide();

// Secciones 
// -------------------------------------------
    $("#evolucion_posterior").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#funcion_auditiva").removeClass("active btn-success");
        $("#funcion_auditiva").addClass("btn-default");

        $("#sec_funcion_auditiva").fadeOut('fast');
        $("#sec_evolucion_posterior").fadeIn('slow');

    });

    $("#funcion_auditiva").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#evolucion_posterior").removeClass("active btn-success");
        $("#evolucion_posterior").addClass("btn-default");

        $("#sec_funcion_auditiva").fadeIn('slow');
        $("#sec_evolucion_posterior").fadeOut('fast');
    });

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

// Función Auditiva - Evalución Auditiva
// -------------------------------------------

    $("#evaluacion_auditiva_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_auditiva_si").show();
        }
    });

    $("#evaluacion_auditiva_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_auditiva_si").hide();
            $("#sec_evaluacion_auditiva_normal_no").hide();
            $("#sec_audiometria_si").hide();
            $("#sec_peat_automatizados_si").hide();
            $("#sec_peat_extendidos_si").hide();
            $("#sec_hipoacusia_izquierdo").hide();
            $("#sec_hipoacusia_derecho").hide();

            $("input[name*='fecha']").val("");

            $("input[name*='evaluacion_auditiva_normal']").removeProp("checked");
            $("input[name*='audiometria']").removeProp("checked");
            $("input[name*='audiometria_normal']").removeProp("checked");
            $("input[name*='peat_automatizados']").removeProp("checked");
            $("input[name*='peat_automatizados_normal']").removeProp("checked");
            $("input[name*='peat_extendidos']").removeProp("checked");
            $("input[name*='peat_extendidos_normal']").removeProp("checked");
            $("input[name*='oido_izquierdo']").removeProp("checked");
            $("input[name*='oido_derecho']").removeProp("checked");

            $("select[name*='grado_izquierdo']").val("0");
            $("select[name*='grado_derecho']").val("0");
        }
    });

    $("#evaluacion_auditiva_normal_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_auditiva_normal_no").show();
        }
    });

    $("#evaluacion_auditiva_normal_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_auditiva_normal_no").hide();
        }
    });

    $("#audiometria_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_audiometria_si").show();
        }
    });

    $("#audiometria_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_audiometria_si").hide();
            $("input[name*='audiometria_normal']").removeProp("checked");
        }
    });

    $("#peat_automatizados_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_peat_automatizados_si").show();
        }
    });

    $("#peat_automatizados_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_peat_automatizados_si").hide();
            $("input[name*='peat_automatizados_normal']").removeProp("checked");
        }
    });

    $("#peat_extendidos_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_peat_extendidos_si").show();
        }
    });

    $("#peat_extendidos_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_peat_extendidos_si").hide();
            $("input[name*='peat_extendidos_normal']").removeProp("checked");
        }
    });

    $("#hipoacusia_izquierdo").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_izquierdo").show();
        }
    });

    $("#normal_izquierdo").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_izquierdo").hide();
            $("select[name*='grado_izquierdo']").val("0");
        }
    });

    $("#hipoacusia_derecho").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_derecho").show();
        }
    });

    $("#normal_derecho").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_derecho").hide();
            $("select[name*='grado_derecho']").val("0");
        }
    });

// Función Auditiva - Confirmación de diagnóstico Oido Izquierdo
// --------------------------------------------------------------
    $("#confirmacion_diagnostico_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_confirmacion_diagnostico_si").show();
        }
    });

    $("#confirmacion_diagnostico_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_confirmacion_diagnostico_si").hide();
            $("#sec_hipoacusia_izquierdo_confirmacion").hide();
            $("#sec_tratamiento_izquierdo_si").hide();
            $("#sec_terapia_auditiva_izquierdo_confirmacion_si").hide();

            $("input[name*='fecha_confirmacion']").val("");
            $("select[name*='grado_izquierdo_confirmacion']").val("0");
            $("textarea[name*='observaciones_oido_izquierdo']").val("");

            $("input[name*='oido_izquierdo_confirmacion']").removeProp("checked");
            $("input[name*='tipo_alteracion_izquierdo']").removeProp("checked");
            $("input[name*='tratamiento_izquierdo']").removeProp("checked");
            $("input[name*='cual_izquierdo']").removeProp("checked");
            $("input[name*='terapia_auditiva_izquierdo_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_izquierda']").removeProp("checked");


            $("#sec_hipoacusia_derecho_confirmacion").hide();
            $("#sec_tratamiento_derecho_si").hide();
            $("#sec_terapia_auditiva_derecho_confirmacion_si").hide();

            $("select[name*='grado_derecho_confirmacion']").val("0");
            $("textarea[name*='observaciones_oido_derecho']").val("");

            $("input[name*='oido_derecho_confirmacion']").removeProp("checked");
            $("input[name*='tipo_alteracion_derecho']").removeProp("checked");
            $("input[name*='tratamiento_derecho']").removeProp("checked");
            $("input[name*='cual_derecho']").removeProp("checked");
            $("input[name*='terapia_auditiva_derecho_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_derecho']").removeProp("checked");
        }
    });

    $("#hipoacusia_izquierdo_confirmacion").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_izquierdo_confirmacion").show();
        }
    });

    $("#normal_izquierdo_confirmacion").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_izquierdo_confirmacion").hide();
            $("#sec_tratamiento_izquierdo_si").hide();
            $("#sec_terapia_auditiva_izquierdo_confirmacion_si").hide();

            $("select[name*='grado_izquierdo_confirmacion']").val("0");
            $("textarea[name*='observaciones_oido_izquierdo']").val("");

            $("input[name*='tipo_alteracion_izquierdo']").removeProp("checked");
            $("input[name*='tratamiento_izquierdo']").removeProp("checked");
            $("input[name*='cual_izquierdo']").removeProp("checked");
            $("input[name*='terapia_auditiva_izquierdo_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_izquierda']").removeProp("checked");

        }
    });

    $("#tratamiento_izquierdo_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_tratamiento_izquierdo_si").show();
        }
    });

    $("#tratamiento_izquierdo_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_tratamiento_izquierdo_si").hide();
            $("#sec_terapia_auditiva_izquierdo_confirmacion_si").hide();

            $("input[name*='cual_izquierdo']").removeProp("checked");
            $("input[name*='terapia_auditiva_izquierdo_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_izquierda']").removeProp("checked");
        }
    });

    $("#terapia_auditiva_izquierdo_confirmacion_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_terapia_auditiva_izquierdo_confirmacion_si").show();
        }
    });

    $("#terapia_auditiva_izquierdo_confirmacion_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("input[name*='cual_terapia_izquierda']").removeProp("checked");
            $("#sec_terapia_auditiva_izquierdo_confirmacion_si").hide();
        }
    });


// Función Auditiva - Confirmación de diagnóstico Oido Derecho
// --------------------------------------------------------------

    $("#normal_derecho_confirmacion").click(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_derecho_confirmacion").hide();
            $("#sec_tratamiento_derecho_si").hide();
            $("#sec_terapia_auditiva_derecho_confirmacion_si").hide();

            $("select[name*='grado_derecho_confirmacion']").val("0");
            $("textarea[name*='observaciones_oido_derecho']").val("");

            $("input[name*='tipo_alteracion_derecho']").removeProp("checked");
            $("input[name*='tratamiento_derecho']").removeProp("checked");
            $("input[name*='cual_derecho']").removeProp("checked");
            $("input[name*='terapia_auditiva_derecho_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_derecho']").removeProp("checked");
        }
    });

    $("#hipoacusia_derecho_confirmacion").click(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_hipoacusia_derecho_confirmacion").show();
        }
    });

    $("#tratamiento_derecho_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_tratamiento_derecho_si").show();
        }
    });

    $("#tratamiento_derecho_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_tratamiento_derecho_si").hide();
            $("#sec_terapia_auditiva_derecho_confirmacion_si").hide();

            $("input[name*='cual_derecho']").removeProp("checked");
            $("input[name*='terapia_auditiva_derecho_confirmacion']").removeProp("checked");
            $("input[name*='cual_terapia_derecho']").removeProp("checked");;
        }
    });

    $("#terapia_auditiva_derecho_confirmacion_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_terapia_auditiva_derecho_confirmacion_si").show();
        }
    });

    $("#terapia_auditiva_derecho_confirmacion_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("input[name*='cual_terapia_derecho']").removeProp("checked");
            $("#sec_terapia_auditiva_derecho_confirmacion_si").hide();
        }
    });


// Fin de función principal
});