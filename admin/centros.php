<?php include 'head.php'; ?>
  	
	<div class="container">
		<!-- Inicio del Contenido -->
		<?php include 'header.php'; ?>
		 <div class="row">
	      	<div class="col-lg-10">
	        	<h2>Mantenedor de Centros</h2>
	      	</div>
			<div class="col-lg-2">
				<div class="btn-group" role="group" aria-label="">
				  	<a class="btn btn-warning btn-sm" href="centro.php" role="button">
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
              		<tr id="1">
		                <td class="centro">AR12</td>
		                <td class="centro">Centro Perinatologico Hospital J.B. turraspe</td>
		                <td class="centro">Argentina</td>
		                <td class="centro">Privado</td>
		                <td class="centro">Si</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">2</td>
		                <td class="centro">2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>		                	
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true" onclick="estado(1)"></span></a>
		                </td>
		            </tr>
		            <tr id="2">
		                <td class="centro">AR12</td>
		                <td class="centro">Centro Perinatologico Hospital J.B. turraspe</td>
		                <td class="centro">Argentina</td>
		                <td class="centro">Privado</td>
		                <td class="centro">Si</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">2</td>
		                <td class="centro">2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>		                	
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true" onclick="estado(2)"></span></a>
		                </td>
		            </tr>
		            <tr id="3">
		                <td class="centro">AR12</td>
		                <td class="centro">Centro Perinatologico Hospital J.B. turraspe</td>
		                <td class="centro">Argentina</td>
		                <td class="centro">Privado</td>
		                <td class="centro">Si</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">2</td>
		                <td class="centro">2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>		                	
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true" onclick="estado(3)"></span></a>
		                </td>
		            </tr>
		            <tr id="4">
		                <td class="centro">AR12</td>
		                <td class="centro">Centro Perinatologico Hospital J.B. turraspe</td>
		                <td class="centro">Argentina</td>
		                <td class="centro">Privado</td>
		                <td class="centro">Si</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">0</td>
		                <td class="centro">2</td>
		                <td class="centro">2</td>
		                <td><a href="#">Ir a las fichas</a></td>
		                <td>		                	
		                	<a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-ok" aria-hidden="true" onclick="estado(4)"></span></a>
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
<script src="../js/data_table_button.js"></script>
<script src="../js/jjszip.min.js"></script>
<script src="../js/buttons.html5.min.js"></script>
<script src="../js/data_table_print.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

    	$('#tbl_centros').DataTable({
	    	dom: 'Bfrtip',
	        buttons: [
	            'excelHtml5',
	            'print'
	        ]
		});

		$('#tbl_centros tbody').on( 'click', 'tr .centro', function () {
	       	var id = $(this).parent().prop('id');
	       	window.location.href = "centro.php?id=" + id;
	    } );

	    

	} );
	function estado(id){
		   alert("Debe cambiar estado del centro. Id: " + id);
		};
</script>

</body>
</html>