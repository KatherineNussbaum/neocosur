<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-10">
        <h1>Ficha de Ingreso</h1>
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
          <li role="presentation"><a href="#neonatales" aria-controls="settings" role="tab" data-toggle="tab">Patologías Neonatales</a></li>
          <li role="presentation"><a href="#antroprometria" aria-controls="settings" role="tab" data-toggle="tab">Antropometría</a></li>
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
<script src="../js/admin/ficha_ingreso.js"></script>
<script>
  $( "#tabs" ).tabs();
</script>

</body>
</html>

