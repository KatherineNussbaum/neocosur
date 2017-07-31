<div class="ficha panel panel-default">
  	<div class="panel-body">
	  	<form>
	  		<button class="btn btn-success active subtitulo" type="button" id="sec_informacion_alta"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Información del Alta </button>

	  		<button class="btn btn-default subtitulo" type="button" id="sec_fallece"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Fallecimiento </button>

	    	<div id="informacion_alta">
	    		<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="fecha_alta" class="col-lg-6 control-label">Fecha alta o fallece</label>
						<div class="col-lg-6">
							<input type="date" name="fecha_alta" id="fecha_alta" class="form-control input-sm">
						</div>
					</div>

				</div>

				<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="destino" class="col-lg-6 control-label">Destino</label>
						<div class="col-lg-6">
	            			<select name="destino" class="form-control input-sm detalle_surfactante" id="destino">
				               	<option value="0">Seleccione</option>
				               	<option value="domicilio">Domicilio</option>
				               	<option value="interno">Traspaldo Interno</option>
				               	<option value="hospital">Otro Hospital</option>
				               	<option value="fallece">Fallece</option>
				            </select> 
				        </div>
					</div>

					<div class="sub-form form-group col-lg-6 detalle_destino_domicilio">
						<label for="oxigen_domicilio" class="col-lg-6 control-label">Oxígeno domiciliario al alta</label>
				        <label for="oxigen_domicilio" class="control-label radio-inline col-lg-2">
				          	<input type="radio" name="oxigen_domicilio" value="si"> Sí
				        </label>
				        <label for="oxigen_domicilio" class="control-label radio-inline col-lg-2" >
				           	<input type="radio" name="oxigen_domicilio" value="no"> No
				        </label>
					</div>

				</div>
	    	</div>
	    	
	    	<div id="fallecimiento">

	    		<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="fallece_horas" class="col-lg-6 control-label">Si fallece < 1 día</label>
						<div class="input-group col-lg-3">
	            			<input type="number" min="0" max="23" step="1" name="fallece_horas" class="form-control input-sm" aria-describedby="basic-addon2">
	            			<span class="input-group-addon" id="basic-addon2">días</span>
	          			</div>
					</div>
				</div>

				<div class="col-lg-12">

					<div class="form-group col-lg-6">
						<label for="autopsia" class="col-lg-6 control-label">Autopsia</label>
				        <label for="autopsia" class="control-label radio-inline col-lg-2">
				          	<input type="radio" name="autopsia" value="si" id="autopsia_si"> Sí
				        </label>
				        <label for="autopsia" class="control-label radio-inline col-lg-2" >
				           	<input type="radio" name="autopsia" value="no" id="autopsia_no"> No
				        </label>
					</div>

					<div class="form-group col-lg-6 sub-form resultado_autopsia">
						<label for="resultado_autopsia" class="col-lg-6 control-label">Resultado autopsia</label>
				        <div>
		                  <textarea class="form-control" name="resultado_autopsia" rows="3"></textarea>
		              </div>
					</div>

				</div>

				<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="situacion_muerte" class="col-lg-6 control-label">Situación de muerte</label>
						<div class="col-lg-6">
	            			<select name="situacion_muerte" class="form-control input-sm detalle_surfactante " id="situacion_muerte">
				               	<option value="0">Seleccione</option>
				               	<option value="1">Retiro soporte vital</option>
				            </select> 
				        </div>
					</div>

	    		</div>

	    		<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="observaciones_situacion_muerte" class="col-lg-6 control-label">Observaciones Situación de muerte</label>
						<div>
		                	<textarea class="form-control" name="observaciones_situacion_muerte" rows="3"></textarea>
		              </div>
					</div>

	    		</div>

	    		<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
			         	<label for="cuasa_muerte" class="col-lg-5 control-label">Causa probable de muerte</label>
			          	<div class="checkbox">
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="" class="">
				              Marlformaciones congénitas que comprometen la vida
				            </label>
				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="" class="">
				              Anomalías cromosómicas
				            </label>

				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="" class="" id="paro_cardiorespiratorio">
				              Paro cardiorespiratorio no traumático
				            </label>

				            <label for="" class="control-label txt_izq col-lg-12 margin-left">
				              <input type="checkbox" value="" class="" id="otra_causa_muerte">
				              Otra
				            </label>
			            

			          	</div>            
			        </div>

			        <div class="form-group col-lg-6 ">
			        	<div class="causa_paro sub-form">
			        		<label for="causa_paro" class="col-lg-5 control-label">Causa del paro</label>
				            <div class="checkbox">
				            	<label for="" class="control-label txt_izq col-lg-12 margin-left">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Infecciosa
					            </label>
					            <label for="" class="control-label txt_izq col-lg-12 margin-left">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Respiratoria
					            </label>
					            <label for="" class="control-label txt_izq col-lg-12 margin-left">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Cardíaca
					            </label>
					            <label for="" class="control-label txt_izq col-lg-12 margin-left">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Sistema nervioso central
					            </label>
					            <label for="" class="control-label txt_izq col-lg-12 margin-left">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Hemorrágica
					            </label>
					            <label for="" class="control-label txt_izq col-lg-12 margin-left ">
					              	<input type="checkbox" value="" class="causa_paro">
					              		Accidental (lesiones no intencionales)
					            </label>
				        	</div>
			            
				        </div>

				        <div class="form-group sub-form detalle_otra_causa_muerte">
			            	<label for="causa_paro" class="col-lg-5 control-label">Si es otra la causa, cúal?</label>
			            	<div class="col-lg-7">
					          	<input type="text" name="detalle_otra_causa_muerte" class="form-control input-sm ">
					        </div>
			            </div>

			        </div>

	    		</div>

	    		<div class="col-lg-12">

			    	<div class="form-group col-lg-6">
						<label for="observaciones_causa_probable_muerte" class="control-label">Observaciones causa probable de muerte</label>
						<div>
		                	<textarea class="form-control" name="observaciones_causa_probable_muerte" rows="3"></textarea>
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