<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="sec_funcion_auditiva"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Función Auditiva</button>

      <button class="btn btn-default subtitulo" type="button" id="sec_oftalmologica"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Evolución Posterior</button>

      <div id="funcion_auditiva">
        <div class="col-lg-3">
          <div class="form-group ">
            <label for="" class="col-lg-12 control-label">Pesquisa antes del alta</label>
            <label for="" class="control-label radio-inline col-lg-offset-2 col-lg-2">
            <input type="radio" name="pesquisa" value="si" id="pesquisa_si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="pesquisa" value="no" id="pesquisa_no"> No
            </label>
          </div>
        </div>
                                   
        <div class="col-lg-9 form-group">
          <label for="" class="col-lg-12 control-label">Evaluación al alta</label>

          <div class="checkbox">
            <label class="control-label txt_izq col-lg-6">
              <input name="pesquisa_alta" type="checkbox" value="">
              Potenciales Evocados del Tronco Cerebral (PEAT) Automatizados
            </label>

            <div id="pesquisa_alta_1" class="col-lg-6">
              <label class="col-lg-4 control-label">¿Normal?</label>

              <label for="" class="control-label radio-inline col-lg-3">
              <input type="radio" name="pesquisa" value="si" id="pesquisa_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-3" >
                <input type="radio" name="pesquisa" value="no" id="pesquisa_no"> No
              </label>
            </div>

            <label class="control-label txt_izq col-lg-6">
              <input name="pesquisa_alta" type="checkbox" value="">
              Potenciales Evocados del Tronco Cerebral (PEAT) Extendidos
            </label>

            <div id="pesquisa_alta_2" class="col-lg-6">
              <label for="" class="col-lg-4 control-label">¿Normal?</label>

              <label for="" class="control-label radio-inline col-lg-3">
              <input type="radio" name="pesquisa" value="si" id="pesquisa_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-3" >
                <input type="radio" name="pesquisa" value="no" id="pesquisa_no"> No
              </label>
            </div>

            <label class="control-label txt_izq col-lg-6">
              <input name="pesquisa_alta" type="checkbox" value="">
              Emisiones Otoacústicas
            </label>

            <div id="pesquisa_alta_3" class="col-lg-6">
              <label for="" class="col-lg-4 control-label">¿Normal?</label>

              <label for="" class="control-label radio-inline col-lg-3">
              <input type="radio" name="pesquisa" value="si" id="pesquisa_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-3" >
                <input type="radio" name="pesquisa" value="no" id="pesquisa_no"> No
              </label>
            </div>

          </div>

        </div>
      </div>
    
      <div id="evolucion_posterior">
        <div class="col-lg-3">
          <div class="form-group">
            <label for="" class="col-lg-12 control-label">Evaluación Auditiva</label>
            <label for="" class="control-label radio-inline col-lg-offset-2 col-lg-2">
            <input type="radio" name="evaluacion_auditiva" value="si" id="evaluacion_auditiva_si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="evaluacion_auditiva" value="no" id="evaluacion_auditiva_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="form-group">
            <label for="" class="col-lg-3 control-label">Fecha</label>
            <div class="col-lg-3">
              <input type="date" name="fecha" class="form-control input-sm">
            </div>
          </div>

          <div class="form-group col-lg-6">
            <label class="col-lg-4 control-label">Normal</label>
            <label class="control-label radio-inline col-lg-3">
            <input type="radio" name="evaluacion_auditiva_normal" value="si" id="evaluacion_auditiva_normal_si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-3">
              <input type="radio" name="evaluacion_auditiva_normal" value="no" id="evaluacion_auditiva_normal_no"> No
            </label>
          </div>

          <div id="sec_evaluacion_auditiva_normal_no">


            <div class="form-group">
              <label class="control-label col-lg-3">Audiometría</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="audiometria" value="si">
                  Sí
                </label>
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="audiometria" value="no">
                  No
                </label>
              </div>
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-4 control-label">Normal</label>
              <label class="control-label radio-inline col-lg-3">
              <input type="radio" name="audiometria_normal" value="si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-3">
                <input type="radio" name="audiometria_normal" value="no"> No
              </label>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">PEAT automatizados</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="peat_automatizados" value="si">
                  Sí
                </label>
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="peat_automatizados" value="no">
                  No
                </label>
              </div>
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-4 control-label">Normal</label>
              <label class="control-label radio-inline col-lg-3">
              <input type="radio" name="peat_automatizados_normal" value="si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-3">
                <input type="radio" name="peat_automatizados_normal" value="no"> No
              </label>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">PEAT extendidos</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="peat_extendidos" value="si">
                  Sí
                </label>
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="peat_extendidos" value="no">
                  No
                </label>
              </div>
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-4 control-label">Normal</label>
              <label class="control-label radio-inline col-lg-3">
              <input type="radio" name="peat_extendidos_normal" value="si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-3">
                <input type="radio" name="peat_extendidos_normal" value="no"> No
              </label>
            </div>


            <div class="form-group ">
              <label class="control-label col-lg-3">Oído Izquierdo</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline">
                  <input type="radio" name="oido_izquierdo" value="normal"> Normal
                </label>

                <label class="control-label radio-inline">
                  <input type="radio" name="oido_izquierdo" value="hipoacusia" id="hipoacusia_izquierdo"> Hipoacusia
                </label>
              </div>      
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-3 control-label">Grado</label>
              <div class="col-lg-9">
                <select class="form-control input-sm col-lg-8" name="grado_izquierdo">
                  <option value="0"></option>
                  <option value="1">Leve</option>
                </select>
              </div>
            </div>

            <div class="form-group ">
              <label class="control-label col-lg-3">Oído Derecho</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline">
                  <input type="radio" name="oido_derecho" value="normal"> Normal
                </label>

                <label class="control-label radio-inline">
                  <input type="radio" name="oido_derecho" value="hipoacusia" id="hipoacusia_derecho"> Hipoacusia
                </label>
              </div>      
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-3 control-label">Grado</label>
              <div class="col-lg-9">
                <select class="form-control input-sm col-lg-8" name="grado_derecho">
                  <option value="0"></option>
                  <option value="1">Leve</option>
                </select>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="form-group">
            <label for="" class="col-lg-12 control-label">Confirmación de diagnóstico</label>
            <label for="" class="control-label radio-inline col-lg-offset-2 col-lg-2">
            <input type="radio" name="confirmacion_diagnostico" value="si" id="confirmacion_diagnostico_si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="confirmacion_diagnostico" value="no" id="confirmacion_diagnostico_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-9">

          <div id="sec_confirmacion_diagnostico">

            <div class="form-group row col-lg-12">
              <label for="" class="col-lg-3 control-label">Fecha</label>
              <div class="col-lg-3">
                <input type="date" name="fecha_confirmacion" class="form-control input-sm">
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-lg-3">Oído Izquierdo</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline">
                  <input type="radio" name="oido_izquierdo_confirmacion" value="normal"> Normal
                </label>

                <label class="control-label radio-inline">
                  <input type="radio" name="oido_izquierdo_confirmacion" value="hipoacusia" id="hipoacusia_izquierdo_confirmacion"> Hipoacusia
                </label>
              </div>      
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-3 control-label">Grado</label>
              <div class="col-lg-9">
                <select class="form-control input-sm col-lg-8" name="grado_izquierdo_confirmacion">
                  <option value="0"></option>
                  <option value="1">Leve</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-12">Tipo de alteración</label>

              <div class="checkbox">
                <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                  <input name="tipo_alteracion" type="checkbox" value="">
                  Neurosensorial
                </label>

                <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                  <input name="tipo_alteracion" type="checkbox" value="">
                  De Conducción
                </label>

              </div>

              <div class="form-group col-lg-12">
                <label class="col-lg-8 control-label">Necesidad de Tratamiento</label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="peat_extendidos_normal" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="peat_extendidos_normal" value="no"> No
                </label>
              </div>

              <div class="form-group col-lg-10 col-lg-offset-2">
                <label class="control-label col-lg-8">¿Cuál(es)?</label>
                <div class="checkbox">
                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual" type="checkbox" value="">
                    Implementación de audífonos
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual" type="checkbox" value="">
                    Implante coclear
                  </label>

                </div>
              </div>

              <div class="form-group col-lg-12">
                <label class="col-lg-8 control-label">Terapia auditiva</label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="terapia_auditiva" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="terapia_auditiva" value="no"> No
                </label>
              </div>

              <div class="form-group col-lg-10 col-lg-offset-2">
                <label class="control-label col-lg-8">¿Cuál(es)?</label>
                <div class="checkbox">
                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_izquierda" type="checkbox" value="">
                    Verbal
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_izquierda" type="checkbox" value="">
                    Seña
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_izquierda" type="checkbox" value="">
                    Otro
                  </label>

                </div>
              </div>

              <div class="form-group col-lg-12">
                <label class="control-label col-lg-12">Observaciones</label>
                <textarea class="form-control col-lg-12" rows="3" name="observaciones_oido_izquierdo"></textarea>
              </div>

            </div>

            <div class="form-group ">
              <label class="control-label col-lg-3">Oído Derecho</label>
              <div class="col-lg-3">
                <label class="control-label radio-inline">
                  <input type="radio" name="oido_derecho_confirmacion" value="normal"> Normal
                </label>

                <label class="control-label radio-inline">
                  <input type="radio" name="oido_derecho_confirmacion" value="hipoacusia" id="hipoacusia_derecho_confirmacion"> Hipoacusia
                </label>
              </div>      
            </div>

            <div class="form-group col-lg-6">
              <label class="col-lg-3 control-label">Grado</label>
              <div class="col-lg-9">
                <select class="form-control input-sm col-lg-8" name="grado_derecho_confirmacion">
                  <option value="0"></option>
                  <option value="1">Leve</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-12">Tipo de alteración</label>

              <div class="checkbox">
                <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                  <input name="tipo_alteracion_derecho" type="checkbox" value="">
                  Neurosensorial
                </label>

                <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                  <input name="tipo_alteracion_derecho" type="checkbox" value="">
                  De Conducción
                </label>

              </div>

              <div class="form-group col-lg-12">
                <label class="col-lg-8 control-label">Necesidad de Tratamiento</label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="peat_extendidos_normal_derecho" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="peat_extendidos_normal_derecho" value="no"> No
                </label>
              </div>

              <div class="form-group col-lg-10 col-lg-offset-2">
                <label class="control-label col-lg-8">¿Cuál(es)?</label>
                <div class="checkbox">
                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_derecho" type="checkbox" value="">
                    Implementación de audífonos
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_derecho" type="checkbox" value="">
                    Implante coclear
                  </label>

                </div>
              </div>

              <div class="form-group col-lg-12">
                <label class="col-lg-8 control-label">Terapia auditiva</label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="terapia_auditiva_derecho" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-1">
                  <input type="radio" name="terapia_auditiva_derecho" value="no"> No
                </label>
              </div>

              <div class="form-group col-lg-10 col-lg-offset-2">
                <label class="control-label col-lg-8">¿Cuál(es)?</label>
                <div class="checkbox">
                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_derecho" type="checkbox" value="">
                    Verbal
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_derecho" type="checkbox" value="">
                    Seña
                  </label>

                  <label class="control-label txt_izq col-lg-12 col-lg-offset-1">
                    <input name="cual_terapia_derecho" type="checkbox" value="">
                    Otro
                  </label>

                </div>
              </div>

              <div class="form-group col-lg-12">
                <label class="control-label col-lg-12">Observaciones</label>
                <textarea class="form-control col-lg-12" rows="3" name="observaciones_oido_derecho"></textarea>
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