<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      	<div class="col-lg-10">
        	<h2>Nuevo Control de Seguimiento</h2>
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
          <li role="presentation"><a href="#alta" aria-controls="settings" role="tab" data-toggle="tab">Alimentación</a></li>
          <li role="presentation"><a href="#estado" aria-controls="settings" role="tab" data-toggle="tab">Estado de Ficha</a></li>
        </ul>
      </div>

      <div class="col-lg-12">
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="ingreso">
            <?php include 'seguimiento/datos_ingreso.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="control">
            <?php include 'seguimiento/control.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="connatales">
            <?php include 'seguimiento/connatales.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="familiares">
            <?php include 'seguimiento/familiares.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="antropometria">
            <?php include 'seguimiento/antropometria.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="alimentacion">
            <?php include 'seguimiento/alimentacion.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="auditiva">
            <?php include 'seguimiento/funcion_auditiva.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="visual">
            <?php include 'seguimiento/funcion_visual.php'; ?>
          </div>

          <div role="tabpanel" class="tab-pane" id="otros">
            <?php include 'seguimiento/otros_sistemas.php'; ?>
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
