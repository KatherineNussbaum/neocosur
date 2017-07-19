<?php include 'head.php'; ?>

  	
	<div class="container">
		<!-- Inicio del Contenido -->
		<?php include 'header.php'; ?>
		 <div class="row">
	      	<div class="col-lg-12">
	        	<h1>Nuevo Centro</h1>
	      	</div>
		</div>

		<div id="tabs" class="row">
	      <div class="col-lg-12">
	        <ul class="nav nav-tabs" role="tablist">
	          <li role="presentation" class="active"><a href="#identificacion" aria-controls="profile" role="tab" data-toggle="tab">Identificación</a></li>
	          <li role="presentation"><a href="#estadisticas" aria-controls="profile" role="tab" data-toggle="tab">Estadísticas</a></li>
	          <li role="presentation"><a href="#recursos" aria-controls="messages" role="tab" data-toggle="tab">Recursos</a></li>
	          <li role="presentation" class="dinamico_fallece"><a href="#seguimiento" aria-controls="settings" role="tab" data-toggle="tab">Seguimiento</a></li>
	        </ul>
	      </div>
	      <div class="col-lg-12">
	        <div class="tab-content">
	          <div role="tabpanel" class="tab-pane active" id="identificacion">
	            <?php include 'centros/identificacion.php'; ?>
	          </div>

	          <div role="tabpanel" class="tab-pane" id="estadisticas">

	            <?php include 'centros/estadisticas.php'; ?>
	          </div>

	          <div role="tabpanel" class="tab-pane" id="recursos">
	            <?php include 'centros/recursos.php'; ?>
	          </div>

	          <div role="tabpanel" class="tab-pane" id="seguimiento">
	            <?php include 'centros/seguimiento.php'; ?>
	          </div>

	        </div>
	      </div>
	    </div>
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