<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-10">
        <h1>Control de Seguimiento</h1>
      </div>

    </div>

    <div id="tabs" class="row">
      <div class="col-lg-12">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#ingreso" aria-controls="profile" role="tab" data-toggle="tab">
              Datos del Ingreso
            </a>
          </li>
          <li role="presentation">
            <a href="#control" aria-controls="profile" role="tab" data-toggle="tab">
              Datos del Control
            </a>
          </li>
          <li role="presentation">
            <a href="#connatales" aria-controls="profile" role="tab" data-toggle="tab">
              Antecedentes Connatales
            </a>
          </li>
          <li role="presentation">
            <a href="#familiares" aria-controls="profile" role="tab" data-toggle="tab">
              Antecedentes Familiares Control Actual
            </a>
          </li>
          <li role="presentation">
            <a href="#antropometria" aria-controls="profile" role="tab" data-toggle="tab">
              Antropometría
            </a>
          </li>
          <li role="presentation">
            <a href="#alimentacion" aria-controls="profile" role="tab" data-toggle="tab">
              Alimentación
            </a>
          </li>
          <li role="presentation">
            <a href="#auditiva" aria-controls="profile" role="tab" data-toggle="tab">
              Función Auditiva
            </a>
          </li>
          <li role="presentation">
            <a href="#visual" aria-controls="profile" role="tab" data-toggle="tab">
              Función Visual
            </a>
          </li>
          <li role="presentation">
            <a href="#compromiso" aria-controls="profile" role="tab" data-toggle="tab">
              Compromiso de Otros Sistemas
            </a>
          </li>
          <li role="presentation">
            <a href="#evaluacion" aria-controls="profile" role="tab" data-toggle="tab">
              Evaluación del Neurodesarrollo
            </a>
          </li>
          <li role="presentation">
            <a href="#vacunas" aria-controls="profile" role="tab" data-toggle="tab">
              Vacunas
            </a>
          </li>
          <li role="presentationes">
            <a href="#hospitalizacion" aria-controls="profile" role="tab" data-toggle="tab">
              Hospitalizaciones del Período
            </a>
          </li>
          <li role="presentation">
            <a href="#perdida" aria-controls="profile" role="tab" data-toggle="tab">
              Pérdida del Paciente
            </a>
          </li>
          <li role="presentation">
            <a href="#ficha" aria-controls="profile" role="tab" data-toggle="tab">
              Datos de Ficha
            </a>
          </li>
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

          <div role="tabpanel" class="tab-pane" id="neonatales">
          </div>

          <div role="tabpanel" class="tab-pane" id="antroprometria">
          </div>

          <div role="tabpanel" class="tab-pane" id="alta">
          </div>

          <div role="tabpanel" class="tab-pane" id="estado">
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

<script>
  $( "#tabs" ).tabs();
</script>

</body>
</html>

