<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-10">
        <h2>Ficha de Ingreso</h2>
      </div>
                
      <div class="col-lg-2">
       	<div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-info btn-sm">Buscador</button>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown link</a></li>
              <li><a href="#">Dropdown link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="tabs" class="row">
      <div class="col-lg-12">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#ingreso" aria-controls="profile" role="tab" data-toggle="tab">Datos del Ingreso</a></li>
          <li role="presentation"><a href="#prenatales" aria-controls="profile" role="tab" data-toggle="tab">Antecedentes Prenatales</a></li>
          <li role="presentation"><a href="#parto" aria-controls="messages" role="tab" data-toggle="tab">Antecedentes del Parto</a></li>
          <li role="presentation" class="dinamico_fallece"><a href="#neonatales" aria-controls="settings" role="tab" data-toggle="tab">Patologías Neonatales</a></li>
          <li role="presentation" class="dinamico_fallece"><a href="#evolucion" aria-controls="settings" role="tab" data-toggle="tab">Evolución y Tratamiento</a></li>
          <li role="presentation" class="dinamico_fallece"><a href="#antropometria" aria-controls="settings" role="tab" data-toggle="tab">Antropometría</a></li>
          <li role="presentation"><a href="#alta" aria-controls="settings" role="tab" data-toggle="tab">Información del Alta</a></li>
          <li role="presentation"><a href="#estado" aria-controls="settings" role="tab" data-toggle="tab">Estado de Ficha</a></li>
        </ul>
      </div>
      <div class="col-lg-12">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="ingreso">
            <?php include 'ficha_ingreso/datos_ingreso.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="prenatales">
            <?php include 'ficha_ingreso/prenatales.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="parto">
            <?php include 'ficha_ingreso/parto.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="neonatales">
            <?php include 'ficha_ingreso/neonatales.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="evolucion">
            <?php include 'ficha_ingreso/evolucion.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="antropometria">
            <?php include 'ficha_ingreso/antropometria.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="alta">
            <?php include 'ficha_ingreso/alta.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="auditiva">
            <?php include 'ficha_ingreso/auditiva.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="estado">
            <?php include 'ficha_ingreso/estado.php'; ?>
          </div>

        </div>
      </div>
    </div>
    <!-- Fin del Contenido -->  
</div>    

<?php
  include 'footer.php';
?>     
<!-- Inicio de JavaScript -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/npm.js"></script>
<script src="../js/admin/ficha_ingreso.js"></script>
<script src="../js/neocosur.js"></script>
<script>
  $( "#tabs" ).tabs();
  $('[data-toggle="tooltip"]').tooltip(); 


jQuery(document).ready(function(){

  if( $( "#diabetes_si" ).prop("checked") )
  {
    $(".diabetes").show();
  };

  if( $( "#ht_art_si" ).prop("checked") )
  {
    $(".ht_art").show();
  };

  if( $( "#multiple_si" ).prop("checked") )
  {
    $(".multiple").show();
  };

  if( $( "#cort_prenatal_si" ).prop("checked") )
  {
    $(".cort_prenatal").show();

    if( $("#completo_si").prop( "checked" ) )
    {
      $(".completo").show();
    };
  };

  if( $( "#completo_no" ).prop("checked") )
  {
    $(".completo").show();
  };

  if( $("#malformacion_si").prop("checked") )
  {
    $(".compromete").show();
  };

  if( $("#compromete_si").prop("checked") )
  {
    $(".detalle_compromete").show();
  };

  if( $("#sistema_nervioso").prop("checked") )
  {
    $("#detalle_sistema_nervioso").show();
  };

  if( $("#cardiacos").prop("checked") )
  {
    $("#detalle_defectos_cardiacos").show();
  };

  if( $("#defectos_gastrointestinal").prop("checked") )
  {
    $("#detalle_defectos_gastrointestinal").show();
  };

  if( $("#detalle_compromete").prop("checked") )
  {
    $("#detalle_defectos_genitourinarios").show();
  };

  if( $("#cromosomica").prop("checked") )
  {
    $("#detalle_defectos_cromosomicas").show();
  };

  if( $("#otro_defecto").prop("checked") )
  {
    $("#cual_defecto").show();
    $("#detalle_defectos_otros").show();
  };

  if(  $("#fallece_sala_si").prop("checked") )
  {
    $(".dinamico_fallece").hide();
    $('#patologias_neonatales .sub-form').hide();
    $('#evolucion_tratamiento .sub-form').hide();
    $('#antropometria .sub-form').hide();
  };

  if(  $( "#hic_si" ).prop("checked") )
  {
    $(".hic_grado").show();
  };

  if( $("#alveolar_si").prop("checked") )
  {
    $(".cual_alveolar").show();
  };
      
  if( $( "#ductus_si" ).prop("checked") )
  {
    $(".ductus").show();
  };

  if( $( "#previa_alta_si" ).prop("checked") )
  {
    $(".tabla_previa_alta").show();
  };
      
  if( $( "#cirugia_izq_si" ).prop("checked") )
  {
    $("#detalle_cirugia_izq").show();
  };

  if($( "#cirugia_der_si" ).prop("checked") )
  {
    $("#detalle_cirugia_der").show();
  };

  if( $( "#sepsis_precoz_si" ).prop("checked") )
  {
    $("#detalle_sepsis_precoz").show();
  };

  if( $( "#sepsis_tardia_si" ).prop("checked") )
  {
    $("#detalle_sepsis_tardia").show();
  };

  if($( "#vm_convencional_si" ).prop("checked") )
  {
    $(".duracion_vm").show();
  };

  if( $( "#vm_alta_frecuencia_si" ).prop("checked") )
  {
    $(".duracion_vm_alta").show();
  };

  if( $( "#uso_oxigeno_si" ).prop("checked") )
  {
    $(".duracion_oxigeno").show();
  };

  if( $( "#cpap_si" ).prop("checked") )
  {
    $(".duracion_cpap").show();
  };

  if( $( "#vnni_si" ).prop("checked") )
  {
    $(".duracion_vnni").show();
  };

  if( $( "#surfactante_si" ).prop("checked") )
  {
    $(".detalle_surfactante").show();
  };

  if( $( "#indometacina_si" ).prop("checked") )
  {
    $(".detalle_indometacina").show();
  };

  if( $( "#tratamiento_apnea_si" ).prop("checked") )
  {
    $(".detalle_tratamiento_apnea").show();
  };

  if( $( "#arteria_si" ).prop("checked") )
  {
    $(".detalle_arteria").show();
  };

  if( $( "#vena_si" ).prop("checked") )
  {
    $(".detalle_vena").show();
  };

  if( $( "#venoso_central_si" ).prop("checked") )
  {
    $(".detalle_venoso_central").show();
  };

  if( $( "#percutaneo_si" ).prop("checked") )
  {
    $(".detalle_percutaneo").show();
  };

  if( $( ".detalle_cirugia" ).val()== "otro")
  {            
    $(parent).find(".detalle_cirugia_otro").show();
  };

  if( $( "#leche_si" ).prop("checked") )
  {
    $(".detalle_leche").show();
  };

  if( $( "#destino" ).val() == "domicilio" )
  {
    $(".detalle_destino_domicilio").show();
    $("#sec_fallece").hide();
  }
  else if ( $( "#destino" ).val() == 'fallece')
  {
    $("#sec_fallece").show();
    $(".detalle_destino_domicilio").hide();
  };

  if( $( "#autopsia_si" ).prop("checked") )
  {
    $(".resultado_autopsia").show();
  };

  if( $( "#paro_cardiorespiratorio" ).prop("checked") )
  {
    $(".causa_paro").show();
  };

  if( $( "#otra_causa_muerte" ).prop("checked") )
  {
    $(".detalle_otra_causa_muerte").show();
  };

  if( $( "#seleccion_responsable" ).val() == "otro" )
  {
    $("#responsable").val("");
    $("#responsable").removeProp("readonly");
  };

  if( $( "#doppler_fetal_si" ).prop("checked") )
  {
    $(".doppler_fetal").show();
  };

});

</script>

</body>
</html>

