<?php include 'head.php'; ?>

  	
	<div class="container">
		<!-- Inicio del Contenido -->
		<?php include 'header.php'; ?>
		 <div class="row">
	      	<div class="col-lg-12">
	        	<h2>Alertas</h2>
	      	</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h4>Tabla Resumen de Casos Ingresados</h4>
				<div class="row col-lg-6">
					<table class="table table-striped table-bordered col-lg-12">
						<thead>
							<tr style="text-align: center;" class="success">
								<td class="col-lg-5"><h5><b>Fichas</b></h5></td>
								<td class="col-lg-5"><h5><b>Cantidad</b></h5></td>
							</tr>
						</thead>
						<tbody>
							<tr style="text-align: center;">
								<td><label class="control-label">Caso Nuevo</label></td>
								<td >163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">Datos Incompletos</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">Digitación completa</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">Caso Cerrado</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">En revisión</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">Eliminado</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;">
								<td><label class="control-label">Caso Reabierto</label></td>
								<td>163</td>
							</tr>
							<tr style="text-align: center;" class="info">
								<td><label class="control-label">Total ingresados</label></td>
								<td>163</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row col-lg-5 col-lg-offset-1">
					<div class="alert alert-info" role="alert">
  						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
  						Existen <b>31 fichas</b> de ingreso en estado Datos incompleto por caducar
  					</div>

  					<div class="alert alert-success" role="alert">
  						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
  						<b>34 Fichas</b> de Centro han sido actualizadas y requieren validación
  					</div>

  					<div class="alert alert-info" role="alert">
  						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
  						<b>1 Fichas</b> de Centro ya están validadas para el período actual
  					</div>

  					<div class="alert alert-success" role="alert">
  						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
  						<b>22293 Fichas</b> de Ingreso han sido digitadas completamente
  					</div>

  					<div class="alert alert-info" role="alert">
  						<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> 
  						Se han reabierto <b>220 Fichas</b>
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
  
</script>

</body>
</html>