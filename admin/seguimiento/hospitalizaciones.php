<div class="ficha panel panel-default">
  	<div class="panel-body">
    	<form>
     		<button class="btn btn-success active subtitulo" type="button" id="hospitalizaciones"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Hospitalizaciones del Período</button>

     		<div class="row" id="sec_hospitalizaciones">
     			<div class="col-lg-12">
     				<table class="table table-bordered" id="tabla_hospitalizacion">
     					<thead>
     						<tr>
     							<td class="col-lg-1">Hosp.</td>
     							<td class="col-lg-4">Diagnóstico</td>
     							<td class="col-lg-2">Fecha</td>
     							<td class="col-lg-1">Día</td>
     							<td class="col-lg-3">
                    Edad al momento de hospitalización
                    <br>(EC hasta 2 años)
                  </td>
     							<td class="col-lg-1"></td>
     						</tr>
     					</thead>
     					<tbody>
     						<tr class="fila_oculta">
     							<td></td>
     							<td>
                    <select class="form-control input-sm diagnostico_hospitalizacion" name="diagnostico_hospitalizacion[]" >
                      <option value="0">Seleccione</option>
                      <option value="respiratorio" selected="selected">Respiratorio</option>
                      <option value="2">Digestivo</option>
                      <option value="3">Infeccioso no Respiratorio</option>
                      <option value="4">Hernioplastia Inguinal</option>
                      <option value="otro">Otro</option>
                    </select>

                    <div class="sub-form respiratorio_diagnostico_hospitalizacion">
                      <div class="row">
                        <div class="form-group">
                          <label class="col-lg-7 control-label">Requiere O<sub>2</sub></label>
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="hospitalizacion_o2[]" value="si" checked="checked"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="hospitalizacion_o2[]" value="no"> No
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group">
                          <label class="col-lg-7 control-label">Requiere Ventilación mecánica no invasiva</label>
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="hospitalizacion_ventilacion_noin[]" value="si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="hospitalizacion_ventilacion_noin[]" value="no"> No
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group">
                          <label class="col-lg-7 control-label">Requiere Ventilación mecánica invasiva</label>
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="hospitalizacion_ventilacion_in[]" value="si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="hospitalizacion_ventilacion_in[]" value="no"> No
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-lg-5 control-label">Seleccione</label>
                        <div class="col-lg-7">
                          <select class="form-control input-sm" name="hospitalizacion_ventilacion_in_seleccion[]">
                            <option value="0">Seleccione</option>
                            <option value="1">Opción</option>
                          </select>
                          </div>
                      </div>

                      <div class="row">
                        <div class="form-group">
                          <label class="col-lg-7 control-label">Requiere O<sub>2</sub> domicilario</label>
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="hospitalizacion_domicilario[]" value="si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="hospitalizacion_domicilario[]" value="no"> No
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-lg-5 control-label">Seleccione</label>
                        <div class="col-lg-7">
                          <select class="form-control input-sm" name="hospitalizacion_ventilacion_in_seleccion[]">
                            <option value="0">Seleccione</option>
                            <option value="1">Opción</option>
                          </select>
                          </div>
                      </div>
                    </div>

                    <div class="sub-form otro_diagnostico_hospitalizacion">
                      <div class="row col-lg-12">
                        <div class="form-group">
                          <label class="col-lg-7 control-label">Si es otro ¿cuál?</label>
                          <input type="text" name="hospitalizacion_otro[]" class="form-control input-sm">
                        </div>
                      </div>
                    </div>
     							</td>
     							<td>
     								<input type="date" name="fecha_hospitalizacion[]" class="form-control input-sm">
     							</td>
                  <td>
                    <input type="number" max="99" min="0" name="dias_hospitalizacion[]" class="form-control input-sm"></td>

                  <td>
                    <div class="input-group col-lg-12">
                      <input type="number" min="0" step="1" name="anios_hospitalizacion[]" class="form-control input-sm col-lg-5">
                      <div class="input-group-addon input-sm">años</div>

                      <input type="number" min="0" max="11" step="1" name="meses_hospitalizacion[]" class="form-control input-sm col-lg-5">
                      <div class="input-group-addon input-sm">meses</div>
                    </div>
                  </td>

                  <td>
                    <button type="button" class="btn btn-danger btn-xs eliminar">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                  </td>

     						</tr>
     					</tbody>
     				</table>

            <div class=" row col-lg-offset-9 col-lg-2">
              <button type="button" class="btn btn-info" id="agregar_tabla_hospitalizacion">Agregar Hospitalización</button>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="col-lg-5 control-label">Observaciones</label>
                  <div>
                    <textarea class="form-control" name="observaciones_hospitalizaciones" rows="5"></textarea>
                    </div>
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

     