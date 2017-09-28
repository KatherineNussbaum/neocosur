jQuery(document).ready(function(){


	

// Mostrar/Ocultar Sub-formularios
// ===========================================

// Ocultar subformularios
// -------------------------------------------
	$(".sub-form").hide();

    $("#sec_evolucion_posterior").hide();
    $("#sec_evaluacion_auditiva_normal_no").hide();
    $("#sec_digestivo").hide();
    $("#sec_renal").hide();
    $("#sec_neurologico").hide();

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

    $("#respiratorio").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#digestivo").removeClass("active btn-success");
        $("#digestivo").addClass("btn-default");

        $("#renal").removeClass("active btn-success");
        $("#renal").addClass("btn-default");

        $("#neurologico").removeClass("active btn-success");
        $("#neurologico").addClass("btn-default");

        $("#sec_respiratorio").fadeIn('slow');
        $("#sec_digestivo").fadeOut('fast');
        $("#sec_renal").fadeOut('fast');
        $("#sec_neurologico").fadeOut('fast');

    });

    $("#digestivo").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#respiratorio").removeClass("active btn-success");
        $("#respiratorio").addClass("btn-default");

        $("#renal").removeClass("active btn-success");
        $("#renal").addClass("btn-default");

        $("#neurologico").removeClass("active btn-success");
        $("#neurologico").addClass("btn-default");

        $("#sec_digestivo").fadeIn('slow');
        $("#sec_respiratorio").fadeOut('fast');
        $("#sec_renal").fadeOut('fast');
        $("#sec_neurologico").fadeOut('fast');
    });

    $("#renal").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#respiratorio").removeClass("active btn-success");
        $("#respiratorio").addClass("btn-default");

        $("#digestivo").removeClass("active btn-success");
        $("#digestivo").addClass("btn-default");

        $("#neurologico").removeClass("active btn-success");
        $("#neurologico").addClass("btn-default");

        $("#sec_renal").fadeIn('slow');
        $("#sec_respiratorio").fadeOut('fast');
        $("#sec_digestivo").fadeOut('fast');
        $("#sec_neurologico").fadeOut('fast');
    });

    $("#neurologico").click(function()
    {
        $(this).removeClass("btn-default");
        $(this).addClass("active btn-success");

        $("#respiratorio").removeClass("active btn-success");
        $("#respiratorio").addClass("btn-default");

        $("#digestivo").removeClass("active btn-success");
        $("#digestivo").addClass("btn-default");

        $("#renal").removeClass("active btn-success");
        $("#renal").addClass("btn-default");

        $("#sec_neurologico").fadeIn('slow');
        $("#sec_respiratorio").fadeOut('fast');
        $("#sec_digestivo").fadeOut('fast');
        $("#sec_renal").fadeOut('fast');
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



// Función Visual
// --------------------------------------------------------------

    $("#evaluacion_posterior_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_posterior_si").show();
        }
    });

     $("#evaluacion_posterior_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_evaluacion_posterior_si").hide();
            $("#sec_instancia_si").hide();
            $("#sec_oftalmologica_no").hide();
            $("#sec_cirugia_izquierdo_diagnostico_si").hide();
            $("#sec_cirugia_derecho_diagnostico_si").hide();
            $("#sec_requiere_cirugia_si").hide();
            $("#sec_cirugia_izquierdo_si").hide();
            $("#sec_cirugia_derecho_si").hide();

            $("input[name*='rop_izquierdo']").removeProp("checked");
            $("input[name*='plus_izquierdo']").removeProp("checked");
            $("input[name*='cirugia_izquierdo']").removeProp("checked");
            $("input[name*='rop_derecho']").removeProp("checked");
            $("input[name*='plus_derecho']").removeProp("checked");
            $("input[name*='cirugia_derecho']").removeProp("checked");
            $("input[name*='bevacizumab']").removeProp("checked");
            $("input[name*='instancia']").removeProp("checked");
            $("input[name*='cirugia_izquierdo_diagnostico']").removeProp("checked");
            $("input[name*='rop_izquierdo_diagnostico']").removeProp("checked");
            $("input[name*='cirugia_derecho_diagnostico']").removeProp("checked");
            $("input[name*='rop_derecho_diagnostico']").removeProp("checked");
            $("input[name*='oftalmologica']").removeProp("checked");
            $("input[name*='requiere_cirugia']").removeProp("checked");
            $("input[name*='ceguera_izquierdo']").removeProp("checked");
            $("input[name*='ceguera_derecho']").removeProp("checked");
            
            $("select[name*='localizacion_izquierdo']").val("");
            $("select[name*='severidad_izquierdo']").val("");
            $("select[name*='cual_izquierdo']").val("");
            $("select[name*='localizacion_derecho']").val("");
            $("select[name*='severidad_derecho']").val("");
            $("select[name*='cual_derecho']").val("");
            $("select[name*='cual_izquierdo_rop']").val("0");
            $("select[name*='cual_derecho_rop']").val("0");
            $("select[name*='requiere_cirugia_cual']").val("0");

            $("textarea[name*='observaciones']").val("");
            

        }
    });

     $("#cirugia_izquierdo_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_izquierdo_si").show();
        }
     });

     $("#cirugia_izquierdo_no, #cirugia_izquierdo_s_i").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_izquierdo_si").hide();
            $("select[name*='cual_izquierdo']").val("0");
        }
     });

     $("#cirugia_derecho_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_derecho_si").show();
        }
     });

     $("#cirugia_derecho_no, #cirugia_derecho_s_i").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_derecho_si").hide();
            $("select[name*='cual_derecho']").val("0");
        }
     });

     $("#instancia_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_instancia_si").show();
        }
     });

     $("#instancia_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_instancia_si").hide();
            $("#sec_oftalmologica_no").hide();
            $("#sec_cirugia_izquierdo_diagnostico_si").hide();
            $("#sec_cirugia_derecho_diagnostico_si").hide();

            $("input[name*='oftalmologica']").removeProp("checked");

            $("select[name*='cual_izquierdo_rop']").val("0");
            $("select[name*='cual_derecho_rop']").val("0");

            $("input[name*='cirugia_izquierdo_diagnostico']").removeProp("checked");
            $("input[name*='rop_izquierdo_diagnostico']").removeProp("checked");

            $("input[name*='cirugia_derecho_diagnostico']").removeProp("checked");
            $("input[name*='rop_derecho_diagnostico']").removeProp("checked");
        }
     });

     $("#oftalmologica_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_oftalmologica_no").show();
        }
     });

     $("#oftalmologica_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_oftalmologica_no").hide();
            $("#sec_cirugia_izquierdo_diagnostico_si").hide();
            $("#sec_cirugia_derecho_diagnostico_si").hide();

            $("select[name*='cual_izquierdo_rop']").val("0");
            $("select[name*='cual_derecho_rop']").val("0");

            $("input[name*='cirugia_izquierdo_diagnostico']").removeProp("checked");
            $("input[name*='rop_izquierdo_diagnostico']").removeProp("checked");

            $("input[name*='cirugia_derecho_diagnostico']").removeProp("checked");
            $("input[name*='rop_derecho_diagnostico']").removeProp("checked");
        }
     });

     $("#cirugia_izquierdo_diagnostico_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_izquierdo_diagnostico_si").show();
        }
     });

     $("#cirugia_izquierdo_diagnostico_no, #cirugia_izquierdo_diagnostico_s_i").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_izquierdo_diagnostico_si").hide();

            $("select[name*='cual_izquierdo_rop']").val("0");
        }
     });

     $("#cirugia_derecho_diagnostico_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_derecho_diagnostico_si").show();
        }
     });

    $("#cirugia_derecho_diagnostico_no, #cirugia_derecho_diagnostico_s_i").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cirugia_derecho_diagnostico_si").hide();
            $("select[name*='cual_derecho_rop']").val("0");
        }
    });

    $("#requiere_cirugia_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_requiere_cirugia_si").show();
        }
    });

    $("#requiere_cirugia_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_requiere_cirugia_si").hide();

            $("textarea[name*='observaciones']").val("");
            $("select[name*='requiere_cirugia_cual']").val("0");
        }
    });


// Respiratorio
// -------------------------------------------

    $("#diureticos_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_diureticos_si").show();
        }
    });

    $("#diureticos_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_diureticos_si").hide();
            $("input[name*='fecha_suspension'], input[name*='fecha_inicio']").val("");
        }
    });


// Digestivo
// -------------------------------------------

    $("#ostomia_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_ostomia_si").show();
        }
    });

    $("#ostomia_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_ostomia_si").hide();
            $("#sec_reconstitucion_si").hide();

            $("select[name*='ostomia_cual']").val("0");
            $("input[name*='reconstitucion']").removeProp("checked");
            $("input[name*='fecha_reconstitucion']").val("");
        }
    });

    $("#reconstitucion_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_reconstitucion_si").show();
        }
    });

    $("#reconstitucion_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_reconstitucion_si").hide();

            $("input[name*='fecha_reconstitucion']").val("");
        }
    });


// Renal
// -------------------------------------------

    $("#profilaxis_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_profilaxis_si").show();
        }
    });

    $("#profilaxis_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_profilaxis_si").hide();

            $("input[name*='fecha_inicio_profilaxis'], input[name*='fecha_suspension_profilaxis']").val("");
        }
    });


    $("#imagenes_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_imagenes_si").show();
        }
    });

    $("#imagenes_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_imagenes_si").hide();
            $("#sec_eco_renal").hide();
            $("#sec_cintigrafia").hide();
            $("#sec_uretrocistografia").hide();

            $("input[name*='eco_renal'], input[name*='cintigrafia'], input[name*='uretrocistografia']").removeProp("checked");
            
            $("input[name*='eco_renal_alteracion']").removeProp("checked");
            $("textarea[name*='describa_eco_renal']").val("");

            $("input[name*='cintigrafia_alteracion']").removeProp("checked");
            $("textarea[name*='describa_cintigrafia']").val("");

            $("input[name*='uretrocistografia_alteracion']").removeProp("checked");
            $("textarea[name*='describa_uretrocistografia']").val("");
        }
    });

    $("#eco_renal").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_eco_renal").show();
        }
        else
        {
            $("#sec_eco_renal").hide();
            $("input[name*='eco_renal_alteracion']").removeProp("checked");
            $("textarea[name*='describa_eco_renal']").val("");
        }
    });

    $("#cintigrafia").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_cintigrafia").show();
        }
        else
        {
            $("#sec_cintigrafia").hide();
            $("input[name*='cintigrafia_alteracion']").removeProp("checked");
            $("textarea[name*='describa_cintigrafia']").val("");
        }
    });

    $("#uretrocistografia").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_uretrocistografia").show();
        }
        else
        {
            $("#sec_uretrocistografia").hide();
            $("input[name*='uretrocistografia_alteracion']").removeProp("checked");
            $("textarea[name*='describa_uretrocistografia']").val("");
        }
    });

    $("#presion_si").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_presion_si").show();
        }
    });

    $("#presion_no").change(function(){
        var $input = $(this);
        if($input.prop("checked"))
        {
            $("#sec_presion_si").hide();
            $("input[name*='alteracion']").removeProp("checked");
        }
    });



// Neurológica
// --------------------------------------------------------------

    $("#hic_si").change(function(){
        if( $("#hic_si").prop("checked") )
        {
            $("#sec_hic_si").show();
        }
    });

    $("#hic_no").change(function(){
        if( $("#hic_no").prop("checked") )
        {
            $("#sec_hic_si").hide();
            $("select[name*='hic_grado']").val("0");
        }
    });

    $("#hic_s_i").change(function(){
        if( $("#hic_s_i").prop("checked") )
        {
            $("#sec_hic_si").hide();
            $("select[name*='hic_grado']").val("0");
        }
    });

    $("#hidrocefalia_si").change(function(){
        if( $("#hidrocefalia_si").prop("checked") )
        {
            $("#sec_hidrocefalia_si").show();
        }
    });

    $("#hidrocefalia_no").change(function(){
        if( $("#hidrocefalia_no").prop("checked") )
        {
            $("#sec_hidrocefalia_si").hide();
            $("input[name*='valvula']").removeProp("checked");
        }
    });

    $("#convulsiones_si").change(function(){
        if( $("#convulsiones_si").prop("checked") )
        {
            $("#sec_convulsiones_si").show();
        }
    });

    $("#convulsiones_no").change(function(){
        if( $("#convulsiones_no").prop("checked") )
        {
            $("#sec_convulsiones_si").hide();
            $("input[name*='tratamiento']").removeProp("checked");
            $("input[name*='fecha_tratamiento']").val("");
        }
    });


// Evaluación del Neurodesarrollo
// --------------------------------------------------------------

    $("#hic_40semanas_si").change(function(){
        if( $("#hic_40semanas_si").prop("checked") )
        {
            $("#sec_hic_40semanas_si").show();
        }
    });

    $("#hic_40semanas_no").change(function(){
        if( $("#hic_40semanas_no").prop("checked") )
        {
            $("#sec_hic_40semanas_si").hide();
            $("select[name*='hic_40semanas_grado']").val("");
        }
    });

    $("#rop_40semanas_si").change(function(){
        if( $("#rop_40semanas_si").prop("checked") )
        {
            $("#sec_rop_40semanas_si").show();
        }
    });

    $("#rop_40semanas_no").change(function(){
        if( $("#rop_40semanas_no").prop("checked") )
        {
            $("#sec_rop_40semanas_si").hide();
            $("select[name*='rop_40semanas_grado']").val("");
        }
    });

    $("#2anios_vision_no").change(function(){
        if( $("#2anios_vision_no").prop("checked") )
        {
            $("#sec_2anios_vision_no").show();
        }
    });

    $("#2anios_vision_si").change(function(){
        if( $("#2anios_vision_si").prop("checked") )
        {
            $("#sec_2anios_vision_no").hide();
            $("input[class*='vision_normal_no']").removeProp("checked");
        }
    });


    $("#2anios_audiocion_no").change(function(){
        if( $("#2anios_audiocion_no").prop("checked") )
        {
            $("#sec_2anios_audiocion_no").show();
        }
    });

    $("#2anios_audiocion_si").change(function(){
        if( $("#2anios_audiocion_si").prop("checked") )
        {
            $("#sec_2anios_audiocion_no").hide();
            $("input[name*='2anios_audiocion_no']").removeProp("checked");
        }
    });

    $("#2anios_paralisis_si").change(function(){
        if( $("#2anios_paralisis_si").prop("checked") )
        {
            $("#sec_2anios_paralisis_si").show();
        }
    });

    $("#2anios_paralisis_no").change(function(){
        if( $("#2anios_paralisis_no").prop("checked") )
        {
            $("#sec_2anios_paralisis_si").hide();
            $("input[name*='2anios_paralisis_si']").removeProp("checked");
        }
    });

    $("#2anios_otros_si").change(function(){
        if( $("#2anios_otros_si").prop("checked") )
        {
            $("#sec_2anios_otros_si").show();
        }
    });

    $("#2anios_otros_no").change(function(){
        if( $("#2anios_otros_no").prop("checked") )
        {
            $("#sec_2anios_otros_si").hide();
            $("input[class*='2anios_otros_si']").removeProp("checked");
        }
    });

    $("#2anios_psicomotor_examen_no").change(function(){
        if( $("#2anios_psicomotor_examen_no").prop("checked") )
        {
            $("#sec_2anios_psicomotor_examen_no").show();
        }
    });

    $("#2anios_psicomotor_examen_si").change(function(){
        if( $("#2anios_psicomotor_examen_si").prop("checked") )
        {
            $("#sec_2anios_psicomotor_examen_no").hide();
            $("input[class*='2anios_motora']").removeProp("checked");
        }
    });




// Fin de función principal
});