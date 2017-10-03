<div class="ficha panel panel-default">
  	<div class="panel-body">
    	<form>
     		<button class="btn btn-success active subtitulo" type="button" id="perdida"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Perdidad del Paciente</button>

     		<div class="row" id="sec_perdida">
     			<div class="row">
     				<div class="col-lg-6 form-group">
     					<label class="control-label col-lg-4">Fallece durante el seguimiento</label>
     					<div class="col-lg-8">
     						<label class="control-label radio-inline col-lg-2">
				                <input type="radio" name="fallece" value="si" id="fallece_si"> Sí
				            </label>
				            <label class="control-label radio-inline col-lg-2" >
				                <input type="radio" name="fallece" value="no" id="fallece_no"> No
				            </label>
     					</div>
     				</div>
     				<div id="sec_fallece_si" class="sub-form col-lg-6">
     					<div class="form-group">
     						<label class="control-label col-lg-4">Lugar donde fallece</label>
     						<div class="col-lg-8">
     							<select class="form-control input-sm" name="fallece_si_lugar" >
     								<option value="0"></option>
     								<option value="1">Opción</option>
     							</select>
     						</div>
     					</div>

     					<div class="form-group">
     						<label class="control-label col-lg-4">Fecha</label>
     						<div class="col-lg-8">
     							<input type="date" name="fecha_fallecimiento" class="form-control input-sm">
     						</div>
     					</div>
     					<div class="form-group">
     						<label class="control-label col-lg-4">Edad al momento de fallecer</label>
     						<div class="col-lg-8">
     							<div class="col-lg-5 input-group linea">
		                            <input type="number" min="0" step="1" name="edad_fallecimiento_anios" class="form-control input-sm" aria-describedby="basic-addon2">
		                            <span class="input-group-addon" id="basic-addon2">años</span>
		                         </div>
		                         <div class="col-lg-5 input-group linea">
		                            <input type="number" min="0" max="11" step="1" name="edad_fallecimiento_meses" class="form-control input-sm" aria-describedby="basic-addon2">
		                            <span class="input-group-addon" id="basic-addon2">meses</span>
		                        </div>
		                        <div class="col-lg-12">
		                        	<p>(EC hasta 2 años)</p>
		                        </div>
     						</div>
     					</div>
     					<div class="form-group">
     						<label class="control-label col-lg-4">Observaciones</label>
     						<div class="col-lg-8">
     							<textarea class="form-control col-lg-12" rows="3" name="fallecimiento_observaciones" ></textarea>
     						</div>
     					</div>
     				</div>
     			</div>

     			<div class="row">
     				<div class="col-lg-6 form-group">
     					<label class="control-label col-lg-4">Pérdida del Paciente</label>
     					<div class="col-lg-8">
     						<label class="control-label radio-inline col-lg-2">
				                <input type="radio" name="perdida" value="si" id="perdida_si"> Sí
				            </label>
				            <label class="control-label radio-inline col-lg-2" >
				                <input type="radio" name="perdida" value="no" id="perdida_no"> No
				            </label>
     					</div>
     				</div>
     				<div id="sec_perdida_si" class="col-lg-6 sub-form">
     					<div class="form-group">
     						<label class="control-label col-lg-4">Causa</label>
     						<div class="col-lg-8">
     							<select class="form-control input-sm" name="perdida_causa" >
     								<option value="0"></option>
     								<option value="1">Opción</option>
     							</select>
     						</div>
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

     