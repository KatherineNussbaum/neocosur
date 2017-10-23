<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      	<div class="col-lg-10">
        	<h2>Datos en Excel</h2>
      	</div>

      	
    </div>
    <div id="tabs" class="row">
      	<div class="col-lg-12">
	        <ul class="nav nav-tabs" role="tablist">
		        <li role="presentation" class="active">
		          	<a href="#ingresos" aria-controls="profile" role="tab" data-toggle="tab">Ficha de Ingreso</a>
		        </li>
		        <li role="presentation" class="active">
		          	<a href="#controles" aria-controls="profile" role="tab" data-toggle="tab">Ficha de Control</a>
		        </li>
		        <li role="presentation" class="active">
		        	<a href="#centros" aria-controls="profile" role="tab" data-toggle="tab">Centros</a>
		        </li>
	          	<li role="presentation" class="active">
	            	<a href="#usuarios" aria-controls="profile" role="tab" data-toggle="tab">Usuarios</a>
	          	</li>
	        </ul>
      	</div>

	    <div class="col-lg-12">
	        <div class="tab-content">
	    	    <div role="tabpanel" class="tab-pane active" id="ingresos">
	        		<?php include 'descarga/ingresos.php'; ?>
	         	</div>

	          	<div role="tabpanel" class="tab-pane" id="controles">
	            	<?php include 'descarga/controles.php'; ?>
	          	</div>

	          	<div role="tabpanel" class="tab-pane" id="centros">
	            	<?php include 'descarga/centros.php'; ?>
	          	</div>

	          	<div role="tabpanel" class="tab-pane" id="usuarios">
	            	<?php include 'descarga/usuarios.php'; ?>
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
<!-- <script src="../js/npm.js" ></script> -->
<script src="../js/admin/seguimiento.js"></script>
<script src="../js/neocosur.js"></script>
<script>
	$( "#tabs" ).tabs();
  	$('[data-toggle="tooltip"]').tooltip();

</script>

</body>
</html>