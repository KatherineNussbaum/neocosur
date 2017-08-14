<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-10">
        <h2>Mantenedor de Usuarios</h2>
      </div>

      <div class="col-lg-2">
			<div class="btn-group" role="group" aria-label="">
			  	<a class="btn btn-warning btn-sm" href="agregar_usuario.php" role="button">
			 		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Nuevo Usuario
			  	</a>
			</div>
		</div>

    </div>
    <div class="row panel panel-info">
    	<div class="col-lg-12">
    		<h4>Buscador</h4>  
    	</div>
		                          
	    
	    <div class="form-group col-lg-6">

	    	<label for="nombre" class="col-lg-5 control-label">Nombre</label>
	        <div class="col-lg-7">
	        	<input type="text" name="nombre" class="form-control input-sm">
	        </div>

	    	<label for="ap_paterno" class="col-lg-5 control-label">Apellido paterno</label>
	        <div class="col-lg-7">
	        	<input type="text" name="ap_paterno" class="form-control input-sm">
	        </div>

	        <label for="ap_materno" class="col-lg-5 control-label">Apellido materno</label>
	        <div class="col-lg-7">
	        	<input type="text" name="ap_materno" class="form-control input-sm">
	        </div>

	        <label for="usuario" class="col-lg-5 control-label">Usuario</label>
	        <div class="col-lg-7">
	        	<input type="text" name="usuario" class="form-control input-sm">
	        </div>

	    </div>

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

	        <label for="cargo" class="col-lg-5 control-label">Cargo</label>
	        <div class="col-lg-7">
	        	<select name="cargo" class="form-control input-sm">
	        		<option value="0">Seleccione</option>
	        	</select>
	        </div>

	        <label for="estado" class="col-lg-5 control-label">Estado</label>
	        <div class="col-lg-7">
	        	<select name="estado" class="form-control input-sm">
	        		<option value="1">Activos</option>
	        		<option value="2">Inactivos</option>
	        		<option value="3">Todos</option>
	        	</select>
	        </div>

	    </div>

	    <div class="clearfix visible-lg-block"></div>

	    <div class="form-group col-lg-offset-5">
	    	<button type="submit" class="btn btn-success">Buscar</button>
	    </div>

    </div>

    <div class="row ">
    	<h4>Listado de Usuarios</h4> 
			<table id="tbl_usuarios" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr style="text-align:center;">
		                <th class="col-lg-1">Id</th>
		                <th class="col-lg-1">Usuario</th>
		                <th class="col-lg-1">Nombre</th>
		                <th class="col-lg-1">Apellido Paterno</th>
		                <th class="col-lg-1">Apellido Materno</th>
		                <th class="col-lg-1">Cargo</th>
		                <th class="col-lg-1">Estado</th>
		                <th class="col-lg-1">Acciones</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr style="text-align:center;">
		                <th class="col-lg-1">Id</th>
		                <th class="col-lg-1">Usuario</th>
		                <th class="col-lg-1">Nombre</th>
		                <th class="col-lg-1">Apellido Paterno</th>
		                <th class="col-lg-1">Apellido Materno</th>
		                <th class="col-lg-1">Cargo</th>
		                <th class="col-lg-1">Estado</th>
		                <th class="col-lg-1">Acciones</th>
		            </tr>
		        </tfoot>
		        <tbody>
              		<tr id="100">
		                <td class="ficha" style="text-align: right;">100</td>
		                <td class="ficha">ktyNuss</td>
		                <td class="ficha">Katherine</td>
		                <td class="ficha">Nussbaum</td>
		                <td class="ficha">Niccoli</td>
		                <td class="ficha">Administrador</td>
		                <td class="ficha">Activo</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" onclick="editarUsuario(100)" aria-hidden="true"></span></a> </td>
		            </tr>
		           <tr id="100">
		                <td class="ficha" style="text-align: right;">100</td>
		                <td class="ficha">ktyNuss</td>
		                <td class="ficha">Katherine</td>
		                <td class="ficha">Nussbaum</td>
		                <td class="ficha">Niccoli</td>
		                <td class="ficha">Administrador</td>
		                <td class="ficha">Activo</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" onclick="editarUsuario(100)" aria-hidden="true"></span></a> </td>
		            </tr>
		            <tr id="100">
		                <td class="ficha" style="text-align: right;">100</td>
		                <td class="ficha">ktyNuss</td>
		                <td class="ficha">Katherine</td>
		                <td class="ficha">Nussbaum</td>
		                <td class="ficha">Niccoli</td>
		                <td class="ficha">Administrador</td>
		                <td class="ficha">Activo</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" onclick="editarUsuario(100)" aria-hidden="true"></span></a> </td>
		            </tr>
		            <tr id="100">
		                <td class="ficha" style="text-align: right;">100</td>
		                <td class="ficha">ktyNuss</td>
		                <td class="ficha">Katherine</td>
		                <td class="ficha">Nussbaum</td>
		                <td class="ficha">Niccoli</td>
		                <td class="ficha">Administrador</td>
		                <td class="ficha">Activo</td>
		                <td style="text-align: center;"><a class="btn btn-success btn-xs" href="#" role="button" ><span class="glyphicon glyphicon-pencil" onclick="editarUsuario(100)" aria-hidden="true"></span></a> </td>
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

  		$('#tbl_usuarios').DataTable({
	    	dom: 'Bfrtip',
	        buttons: [
	            'excelHtml5',
	            'print'
	        ]
		});

 
	   	$('#tbl_usuarios tbody').on( 'click', 'tr .ficha', function () {
	       	var id = $(this).parent().prop('id');
	       	window.location.href = "agregar_usuario.php?id=" + id;
	    } );


	    
	} );

  	function editarUsuario(id){
	    window.location.href = "agregar_usuario.php?id" + id;
	};

</script>

</body>
</html>