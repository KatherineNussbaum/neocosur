<div class="ficha panel panel-default">
  	<div class="panel-body">
	  	<form>
	    	<h4>
	    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				Estado de Ficha
	    	</h4>
	    	<div id="informacion_alta">

				<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="estado_ficha" class="col-lg-6 control-label">Estado de Ficha</label>
						<div class="col-lg-6">
					       	<input type="text" name="estado_ficha" class="form-control input-sm" readonly>
					    </div>
					    <label for="estado_ficha" class="col-lg-6 control-label">Cambio de Estado</label>
						<div class="col-lg-6">
							<select name="cambiar_estado" class="form-control input-sm" id="cambiar_estado">
				               	<option value="0">Seleccione</option>
				               	<option value="1">En Revisión </option>
				            </select>
						</div>
						
					</div>

				</div>

	    	</div>

	   		<div class=" col-lg-offset-10 col-lg-2">
	          	<button type="submit" class="btn btn-success">Guardar</button>
	        </div> 

	    </form>
	</div>
</div>