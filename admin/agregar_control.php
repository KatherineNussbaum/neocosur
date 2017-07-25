<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      	<div class="col-lg-10">
        	<h1>Nuevo Control de Seguimiento</h1>
      	</div>

    </div>

    <div id="tabs" class="row">
      <div class="col-lg-12">
        <ul class="nav nav-tabs" role="tablist">

          <li role="presentation" class="active">
            <a href="#ingreso" aria-controls="profile" role="tab" data-toggle="tab">Datos del Ingreso</a>
          </li>
          <li role="presentation" class="active">
            <a href="#control" aria-controls="profile" role="tab" data-toggle="tab">Datos del Control</a>
          </li>
          <li role="presentation" class="active">
            <a href="#connatales" aria-controls="profile" role="tab" data-toggle="tab">Antecedentes Connatales</a>
          </li>
          <li role="presentation" class="active">
            <a href="#familiares" aria-controls="profile" role="tab" data-toggle="tab">Antecedentes Familiares Control Actual</a>
          </li>
          <li role="presentation" class="active">
            <a href="#antropometria" aria-controls="profile" role="tab" data-toggle="tab">Antropometría</a>
          </li>
          <li role="presentation" class="active">
            <a href="#alimentacion" aria-controls="profile" role="tab" data-toggle="tab">Alimentación</a>
          </li>
          <li role="presentation" class="active">
            <a href="#auditiva" aria-controls="profile" role="tab" data-toggle="tab">Función Auditiva</a>
          </li>
          <li role="presentation" class="active">
            <a href="#visual" aria-controls="profile" role="tab" data-toggle="tab">Función Visual</a>
          </li>
          <li role="presentation" class="active">
            <a href="#otros" aria-controls="profile" role="tab" data-toggle="tab">Compromiso de Otros Sistemas</a>
          </li>
          <li role="presentation" class="active">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">Evaluación del Neurodesarrollo</a>
          </li>
          <li role="presentation" class="active">
            <a href="#vacunas" aria-controls="profile" role="tab" data-toggle="tab">Vacunas</a>
          </li>
          <li role="presentation" class="active">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">Hospitalizaciones del Periodo</a>
          </li>
          <li role="presentation" class="active">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">Diagnóstico en esta Evaluación</a>
          </li>
          <li role="presentation" class="active">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">Pérdida del Paciente</a>
          </li>
          <li role="presentation" class="active">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">Datos de Ficha</a>
          </li>



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
</script>

</body>
</html>
