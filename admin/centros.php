<?php include 'head.php'; ?>

  	
	<div class="container">
		<!-- Inicio del Contenido -->
		<?php include 'header.php'; ?>
		 <div class="row">
	      	<div class="col-lg-7">
	        	<h1>Centros</h1>
	      	</div>
			<div class="col-lg-5">
				<div class="btn-group" role="group" aria-label="">
				  	<button type="button" class="btn btn-primary btn-sm">
				  		<span class="glyphicon glyphicon-print" aria-hidden="true"></span> 
				  		Imprimir Listado
				  	</button>
				  	<button type="button" class="btn btn-success btn-sm">
				  		<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> 
				  		Descargar en Excel</button>
				  	<a class="btn btn-warning btn-sm" href="nuevo_centro.php" role="button">
				  		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Nuevo Centro
				  	</a>
				</div>
			</div>
		</div>

		<div class="row">
			<table id="tbl_centros" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Código Centro</th>
		                <th>Nombre</th>
		                <th>País</th>
		                <th>Servicio</th>
		                <th>Seguimiento</th>
		                <th>Caso nuevo</th>
		                <th>Datos incompletos</th>
		                <th>Por vencer</th>
		                <th>En revisión</th>
		                <th>Caso cerrado</th>
		                <th>Eliminado</th>
		                <th>Total</th>
		                <th>Fichas</th>
		                <th>Acciones</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>Código Centro</th>
		                <th>Nombre</th>
		                <th>País</th>
		                <th>Servicio</th>
		                <th>Seguimiento</th>
		                <th>Caso nuevo</th>
		                <th>Datos incompletos</th>
		                <th>Por vencer</th>
		                <th>En revisión</th>
		                <th>Caso cerrado</th>
		                <th>Eliminado</th>
		                <th>Total</th>
		                <th>Fichas</th>
		                <th>Acciones</th>
		            </tr>
		        </tfoot>
		        <tbody>
		            <tr>
		                <td>AR12</td>
		                <td>Centro Perinatologico Hospital J.B. turraspe</td>
		                <td>Argentina</td>
		                <td>Privado</td>
		                <td>Si</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>2</td>
		                <td>2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>
		                	<a class="btn btn-warning btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
		                </td>
		            </tr>
		            <tr>
		                <td>AR12</td>
		                <td>Centro Perinatologico Hospital J.B. turraspe</td>
		                <td>Argentina</td>
		                <td>Privado</td>
		                <td>Si</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>2</td>
		                <td>2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>
		                	<a class="btn btn-warning btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
		                </td>
		            </tr>
		            <tr>
		                <td>AR12</td>
		                <td>Centro Perinatologico Hospital J.B. turraspe</td>
		                <td>Argentina</td>
		                <td>Privado</td>
		                <td>Si</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>2</td>
		                <td>2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>
		                	<a class="btn btn-warning btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
		                </td>
		            </tr>
		            <tr>
		                <td>AR12</td>
		                <td>Centro Perinatologico Hospital J.B. turraspe</td>
		                <td>Argentina</td>
		                <td>Privado</td>
		                <td>Si</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>0</td>
		                <td>2</td>
		                <td>2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>
		                	<a class="btn btn-warning btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
		                </td>
		            </tr>
		           
		        </tbody>
		    </table>
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
<script src="../js/data_table.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	$('#tbl_centros').DataTable();
	} );
</script>

</body>
</html>