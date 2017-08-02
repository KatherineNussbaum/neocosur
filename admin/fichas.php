<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      	<div class="col-lg-10">
        	<h2>Mantenedor de Fichas</h2>
      	</div>

      	<div class="col-lg-2">
			<div class="btn-group" role="group" aria-label="">
			  	<a class="btn btn-warning btn-sm" href="ficha_ingreso.php" role="button">
			  		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Nueva Ficha
			  	</a>
			</div>
		</div>

    </div>
    <div class="row panel panel-info">
    	<div class="col-lg-12">
    		<h4>Buscador</h4>  
    	</div>
		                          
	    
	    <div class="form-group col-lg-6">

	    	<label for="ap_paterno" class="col-lg-5 control-label">Apellido paterno</label>
	        <div class="col-lg-7">
	        	<input type="text" name="ap_paterno" class="form-control input-sm">
	        </div>

	        <label for="ap_materno" class="col-lg-5 control-label">Apellido materno</label>
	        <div class="col-lg-7">
	        	<input type="text" name="ap_materno" class="form-control input-sm">
	        </div>

	    </div>

	    <div class="form-group col-lg-6">

	    	<label for="identificador" class="col-lg-5 control-label">Identificador Neocosur</label>
	        <div class="col-lg-7">
	        	<input type="number" min="0" step="1" name="identificador" class="form-control input-sm">
	        </div>

	        <label for="num_ficha" class="col-lg-5 control-label">N° Ficha médica</label>
	        <div class="col-lg-7">
	        	<input type="number" min="0" step="1" name="num_ficha" class="form-control input-sm">
	        </div>

	    </div>

	    <div class="clearfix visible-lg-block"></div>

	    <div class="form-group col-lg-6">
			
			<label for="peso_desde" class="col-lg-5 control-label">Peso al nacer</label>
          	<div class="col-lg-3 input-group linea">
            	<input type="number" min="1" step="1" name="peso_desde" class="form-control input-sm" aria-describedby="basic-addon2">
            	<span class="input-group-addon" id="basic-addon2">desde</span>
          	</div>
          	<div class="col-lg-3 input-group linea">
            	<input type="number" min="1" step="1" name="peso_hasta" class="form-control input-sm" aria-describedby="basic-addon2">
            	<span class="input-group-addon" id="basic-addon2">hasta</span>
          	</div>

          	<label for="nacimiento_desde" class="col-lg-5 control-label">Fecha de nacimiento</label>
          	<div class="col-lg-3 input-group linea">
            	<input type="number" min="1" step="1" name="nacimiento_desde" class="form-control input-sm" aria-describedby="basic-addon2">
            	<span class="input-group-addon" id="basic-addon2">desde</span>
          	</div>
          	<div class="col-lg-3 input-group linea">
            	<input type="number" min="1" step="1" name="nacimiento_hasta" class="form-control input-sm" aria-describedby="basic-addon2">
            	<span class="input-group-addon" id="basic-addon2">hasta</span>
          	</div>

        </div>

        <div class="form-group col-lg-6">

	    	<label for="periodo" class="col-lg-5 control-label">Período</label>
	        <div class="col-lg-7">
	        	<select name="periodo" class="form-control input-sm">
	        		<option value="0">Seleccione</option>
	        	</select>
	        </div>

	    </div>

	    <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">

	    	<label for="pais" class="col-lg-5 control-label">País Centro</label>
	        <div class="col-lg-7">
	        	<select name="pais" class="form-control input-sm">
	        		<option value="0">Seleccione</option>
	        	</select>
	        </div>

	        <label for="centro" class="col-lg-5 control-label">Centro de origen</label>
	        <div class="col-lg-7">
	        	<select name="centro" class="form-control input-sm">
	        		<option value="0">Seleccione</option>
	        	</select>
	        </div>

	    </div>

	    <div class="form-group col-lg-6">

	    	<label for="estado" class="col-lg-5 control-label">Estado Ficha</label>
	        <div class="col-lg-7">
	        	<select name="estado" class="form-control input-sm">
	        		<option value="0">Seleccione</option>
	        	</select>
	        </div>

	    </div>

	    <div class="form-group col-lg-offset-5">
	    	<button type="submit" class="btn btn-success">Buscar</button>
	    </div>

    </div>

    <div class="row ">
    	<h4>Listado Fichas</h4> 
			<table id="tbl_fichas" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr style="text-align:center;">
		                <th class="col-lg-1">Identificador Neocosur</th>
		                <th class="col-lg-1">Nombre</th>
		                <th class="col-lg-1">País</th>
		                <th class="col-lg-1">Fecha nacimiento</th>
		                <th class="col-lg-1">Peso al nacer</th>
		                <th class="col-lg-1">Apgar 1</th>
		                <th class="col-lg-1">Apgar 5</th>
		                <th class="col-lg-1">N° Ficha médica</th>
		                <th class="col-lg-1">Fallece Sala</th>
		                <th class="col-lg-1">Estado</th>
		                <th class="col-lg-1">N° Controles</th>
		                <th class="col-lg-1">Agregar Control</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr style="text-align:center;">
		                <th>Identificador Neocosur</th>
		                <th>Nombre</th>
		                <th>País</th>
		                <th>Fecha nacimiento</th>
		                <th>Peso al nacer</th>
		                <th>Apgar 1</th>
		                <th>Apgar 5</th>
		                <th>N° Ficha médica</th>
		                <th>Fallece Sala</th>
		                <th>Estado</th>
		                <th>N° Controles</th>
		                <th>Agregar Control</th>
		            </tr>
		        </tfoot>
		        <tbody>
              		<tr id="100">
		                <td class="ficha" style="text-align: right;">100</td>
		                <td class="ficha">N- LOZA N</td>
		                <td class="ficha">Argentina</td>
		                <td class="ficha" style="text-align: center;">29/10/2012</td>
		                <td class="ficha" style="text-align: right;">1180</td>
		                <td class="ficha" style="text-align: center;">3</td>
		                <td class="ficha" style="text-align: center;">5</td>
		                <td class="ficha" style="text-align: center;">8</td>
		                <td class="ficha" style="text-align: center;">No</td>
		                <td class="ficha">Caso Cerrado</td>
		                <td class="ficha" style="text-align: center;">-</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-plus" onclick="agregarControl(100)" aria-hidden="true"></span></a> </td>
		            </tr>
		            <tr id="200">
		                <td style="text-align: right;">100</td>
		                <td>N- LOZA N</td>
		                <td>Argentina</td>
		                <td style="text-align: center;">29/10/2012</td>
		                <td style="text-align: right;">1180</td>
		                <td style="text-align: center;">3</td>
		                <td style="text-align: center;">5</td>
		                <td style="text-align: center;">8</td>
		                <td style="text-align: center;">No</td>
		                <td>Caso Cerrado</td>
		                <td style="text-align: center;">-</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> </td>
		            </tr>
		            <tr id="300">
		                <td style="text-align: right;">100</td>
		                <td>N- LOZA N</td>
		                <td>Argentina</td>
		                <td style="text-align: center;">29/10/2012</td>
		                <td style="text-align: right;">1180</td>
		                <td style="text-align: center;">3</td>
		                <td style="text-align: center;">5</td>
		                <td style="text-align: center;">8</td>
		                <td style="text-align: center;">No</td>
		                <td>Caso Cerrado</td>
		                <td style="text-align: center;">-</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> </td>
		            </tr>
		            <tr id="400">
		                <td style="text-align: right;">100</td>
		                <td>N- LOZA N</td>
		                <td>Argentina</td>
		                <td style="text-align: center;">29/10/2012</td>
		                <td style="text-align: right;">1180</td>
		                <td style="text-align: center;">3</td>
		                <td style="text-align: center;">5</td>
		                <td style="text-align: center;">8</td>
		                <td style="text-align: center;">No</td>
		                <td>Caso Cerrado</td>
		                <td style="text-align: center;">-</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> </td>
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
<script src="../js/admin/ficha_ingreso.js"></script>
<script src="../js/data_table.min.js"></script>
<script src="../js/data_table_button.js"></script>
<script src="../js/jjszip.min.js"></script>
<script src="../js/buttons.html5.min.js"></script>
<script src="../js/data_table_print.js"></script>
<script src="../js/neocosur.js"></script>
<script>
  	$(document).ready(function() {

  		$('#tbl_fichas').DataTable({
	    	dom: 'Bfrtip',
	        buttons: [
	            'excelHtml5',
	            'print'
	        ]
		});

 
	   	$('#tbl_fichas tbody').on( 'click', 'tr .ficha', function () {
	       	var id = $(this).parent().prop('id');
	       	window.location.href = "ficha_ingreso.php?id=" + id;
	    } );


	    
	} );

  	function agregarControl(id){
	    window.location.href = "agregar_control.php?id" + id;
	};

</script>

</body>
</html>