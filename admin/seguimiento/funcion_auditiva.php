<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="funcion_auditiva"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Función Auditiva</button>

      <button class="btn btn-default subtitulo" type="button" id="evolucion_posterior"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Evolución Posterior</button>

      <div class="row">
        <div class="row">
          <div id="sec_funcion_auditiva">
            <div class="col-lg-5">
              <div class="form-group">
                <label for="" class="col-lg-12 control-label">Pesquisa antes del alta</label>
                <label class="control-label radio-inline col-lg-offset-1 col-lg-2">
                <input type="radio" name="pesquisa" value="si" id="pesquisa_si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="pesquisa" value="no" id="pesquisa_no"> No
                </label>
              </div>
            </div>

            <div class="col-lg-7 form-group sub-form" id="sec_pesquisa_si">

              <label class="col-lg-12 control-label">Evaluación al alta</label>

              <div class="row">
                <div class="checkbox col-lg-12">
                  <label class="control-label txt_izq col-lg-12">
                    <input name="check_pesquisa_alta_1" type="checkbox" value="" id="check_pesquisa_alta_1">
                    Potenciales Evocados del Tronco Cerebral (PEAT) Automatizados
                  </label>
                  <div class="col-lg-8">
                    <div id="pesquisa_alta_1">
                      <label class="col-lg-4 control-label">¿Normal?</label>

                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_1" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_1" value="no"> No
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="checkbox col-lg-12">
                  <label class="control-label txt_izq col-lg-12">
                    <input name="check_pesquisa_alta_2" type="checkbox" value="" id="check_pesquisa_alta_2">
                    Potenciales Evocados del Tronco Cerebral (PEAT) Extendidos
                  </label>
                  <div class="col-lg-8">
                    <div id="pesquisa_alta_2">
                      <label class="col-lg-4 control-label">¿Normal?</label>

                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_2" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_2" value="no"> No
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="checkbox col-lg-12">
                  <label class="control-label txt_izq col-lg-12">
                    <input name="check_pesquisa_alta_3" type="checkbox" value="" id="check_pesquisa_alta_3">
                    Emisiones Otoacústicas
                  </label>
                  <div class="col-lg-8">
                    <div id="pesquisa_alta_3">
                      <label class="col-lg-4 control-label">¿Normal?</label>

                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_3" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="pesquisa_alta_3" value="no"> No
                      </label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>     
    
        <div class="row">

          <div id="sec_evolucion_posterior">

            <div class="col-lg-3">
                <div class="form-group">
                  <label class="col-lg-12 control-label">Evaluación Auditiva</label>
                  <label class="control-label radio-inline col-lg-offset-2 col-lg-2">
                    <input type="radio" name="evaluacion_auditiva" value="si" id="evaluacion_auditiva_si"> Sí
                  </label>
                  <label class="control-label radio-inline col-lg-2" >
                    <input type="radio" name="evaluacion_auditiva" value="no" id="evaluacion_auditiva_no"> No
                  </label>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="sec_evaluacion_auditiva_si" class="sub-form row">
                  <div class="form-group col-lg-6">
                    <label class="control-label col-lg-3">Fecha</label>
                    <div class="col-lg-6">
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
                </div>
            </div>
            
            <div class="col-lg-9 col-lg-offset-3">

                <div id="sec_evaluacion_auditiva_normal_no" >
                
                  <div class="row">
                      <div class="form-group col-lg-6">
                        <label class="control-label col-lg-6">Audiometría</label>
                        <div class="col-lg-6">
                          <label class="control-label radio-inline col-lg-5">
                            <input type="radio" name="audiometria" value="si" id="audiometria_si">
                            Sí
                          </label>
                          <label class="control-label radio-inline col-lg-5">
                            <input type="radio" name="audiometria" value="no" id="audiometria_no">
                            No
                          </label>
                        </div>
                      </div>

                      <div class="form-group col-lg-6 sub-form" id="sec_audiometria_si">
                        <label class="col-lg-4 control-label">Normal</label>
                        <label class="control-label radio-inline col-lg-3">
                          <input type="radio" name="audiometria_normal" value="si"> Sí
                        </label>
                        <label class="control-label radio-inline col-lg-3">
                          <input type="radio" name="audiometria_normal" value="no"> No
                        </label>
                      </div>
                  </div>
                 
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label class="control-label col-lg-6">PEAT automatizados</label>
                      <div class="col-lg-6">
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="peat_automatizados" value="si" id="peat_automatizados_si">
                          Sí
                        </label>
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="peat_automatizados" value="no" id="peat_automatizados_no">
                          No
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 sub-form" id="sec_peat_automatizados_si">
                      <label class="col-lg-4 control-label">Normal</label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="peat_automatizados_normal" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="peat_automatizados_normal" value="no"> No
                      </label>
                    </div>
                  </div>

                  <div class="row">
                    
                    <div class="form-group col-lg-6">
                      <label class="control-label col-lg-6">PEAT extendidos</label>
                      <div class="col-lg-6">
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="peat_extendidos" value="si" id="peat_extendidos_si">
                          Sí
                        </label>
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="peat_extendidos" value="no" id="peat_extendidos_no">
                          No
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 sub-form" id="sec_peat_extendidos_si">
                      <label class="col-lg-4 control-label">Normal</label>
                      <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="peat_extendidos_normal" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="peat_extendidos_normal" value="no"> No
                      </label>
                    </div>

                  </div>
          
                  <div class="row">

                    <div class="form-group col-lg-6">
                      <label class="control-label col-lg-6">Oído Izquierdo</label>
                      <div class="col-lg-6">
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="oido_izquierdo" value="normal" id="normal_izquierdo"> Normal
                        </label>

                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="oido_izquierdo" value="hipoacusia" id="hipoacusia_izquierdo"> Hipoacusia
                        </label>
                      </div>      
                    </div>

                    <div class="form-group col-lg-6 sub-form" id="sec_hipoacusia_izquierdo">
                      <label class="col-lg-3 control-label">Grado</label>
                      <div class="col-lg-9">
                        <select class="form-control input-sm col-lg-8" name="grado_izquierdo">
                          <option value="0"></option>
                          <option value="1">Leve</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6 ">
                      <label class="control-label col-lg-6">Oído Derecho</label>
                      <div class="col-lg-6">
                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="oido_derecho" value="normal" id="normal_derecho"> Normal
                        </label>

                        <label class="control-label radio-inline col-lg-5">
                          <input type="radio" name="oido_derecho" value="hipoacusia" id="hipoacusia_derecho"> Hipoacusia
                        </label>
                      </div>      
                    </div>

                    <div class="form-group col-lg-6 sub-form" id="sec_hipoacusia_derecho">
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
            </div>

            <div class="col-lg-3">
              <div class="form-group">
                <label class="col-lg-12 control-label">Confirmación de diagnóstico</label>
                <label class="control-label radio-inline col-lg-offset-2 col-lg-2">
                  <input type="radio" name="confirmacion_diagnostico" value="si" id="confirmacion_diagnostico_si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="confirmacion_diagnostico" value="no" id="confirmacion_diagnostico_no"> No
                </label>
              </div>
            </div>

            <div class="col-lg-9">

              <div id="sec_confirmacion_diagnostico_si" class="sub-form row">
                <div class="form-group col-lg-6">
                  <label class="control-label col-lg-3">Fecha</label>
                  <div class="col-lg-6">
                    <input type="date" name="fecha_confirmacion" class="form-control input-sm">
                  </div>
                </div>

                <div class="form-group col-lg-6">
                  <label class="col-lg-4 control-label">Oído Izquierdo</label>
                  <label class="control-label radio-inline col-lg-3">
                    <input type="radio" name="oido_izquierdo_confirmacion" value="normal" id="normal_izquierdo_confirmacion"> Normal
                  </label>

                  <label class="control-label radio-inline col-lg-3">
                    <input type="radio" name="oido_izquierdo_confirmacion" value="hipoacusia" id="hipoacusia_izquierdo_confirmacion"> Hipoacusia
                  </label>     
                </div>

                <div id="sec_hipoacusia_izquierdo_confirmacion" class="sub-form">
                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="col-lg-4 control-label">Grado</label>
                    <div class="col-lg-7">
                      <select class="form-control input-sm col-lg-8" name="grado_izquierdo_confirmacion">
                        <option value="0"></option>
                        <option value="1">Leve</option>
                      </select>
                    </div>
                  </div>
              
                  <div class="col-lg-6 col-lg-offset-6">
                    <label class="control-label col-lg-4">Tipo de alteración</label>
                    <div class="checkbox col-lg-8">
                      <label class="control-label txt_izq col-lg-12">
                        <input name="tipo_alteracion_izquierdo" type="checkbox" value="">
                        Neurosensorial
                      </label>

                      <label class="control-label txt_izq col-lg-12">
                        <input name="tipo_alteracion_izquierdo" type="checkbox" value="">
                        De Conducción
                      </label>
                    </div>
                  </div>

                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="col-lg-4 control-label">Necesidad de Tratamiento</label>
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="tratamiento_izquierdo" value="si" id="tratamiento_izquierdo_si"> Sí
                    </label>
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="tratamiento_izquierdo" value="no" id="tratamiento_izquierdo_no"> No
                    </label>
                  </div>

                  <div id="sec_tratamiento_izquierdo_si" class="sub-form">
                    <div class="col-lg-6 col-lg-offset-6">
                      <label class="control-label col-lg-4">¿Cuál(es)?</label>
                      <div class="checkbox col-lg-8">
                        <label class="control-label txt_izq col-lg-12">
                          <input name="cual_izquierdo" type="checkbox" value="">
                          Implementación de audífonos
                        </label>

                        <label class="control-label txt_izq col-lg-12">
                          <input name="cual_izquierdo" type="checkbox" value="">
                          Implante coclear
                        </label>
                      </div>
                    </div>                    

                    <div class="col-lg-6 col-lg-offset-6">
                      <label class="control-label col-lg-4">Terapia auditiva</label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="terapia_auditiva_izquierdo_confirmacion" value="si" id="terapia_auditiva_izquierdo_confirmacion_si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-1">
                        <input type="radio" name="terapia_auditiva_izquierdo_confirmacion" value="no" id="terapia_auditiva_izquierdo_confirmacion_no"> No
                      </label>
                    </div>              

                    <div id="sec_terapia_auditiva_izquierdo_confirmacion_si" class="sub-form">
                      <div class="col-lg-6 col-lg-offset-6">
                        <label class="col-lg-4 control-label">¿Cuál(es)?</label>
                        <div class="checkbox col-lg-8">
                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_izquierda" type="checkbox" value="">
                            Verbal
                          </label>
                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_izquierda" type="checkbox" value="">
                            Seña
                          </label>
                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_izquierda" type="checkbox" value="">
                            Otro
                          </label>
                        </div>
                      </div>
                    </div>      
                  </div>
                
                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="control-label col-lg-12">Observaciones</label>
                    <textarea class="form-control col-lg-12" rows="3" name="observaciones_oido_izquierdo"></textarea>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="form-group col-lg-6 col-lg-offset-6">
                  <label class="col-lg-4 control-label">Oído Derecho</label>
                  <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="oido_derecho_confirmacion" value="normal" id="normal_derecho_confirmacion"> Normal
                  </label>

                  <label class="control-label radio-inline">
                    <input type="radio" name="oido_derecho_confirmacion" value="hipoacusia" id="hipoacusia_derecho_confirmacion"> Hipoacusia
                  </label>
                </div>      
                
                <div id="sec_hipoacusia_derecho_confirmacion" class="sub-form">
                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="col-lg-4 control-label">Grado</label>
                    <div class="col-lg-7">
                      <select class="form-control input-sm col-lg-8" name="grado_derecho_confirmacion">
                        <option value="0"></option>
                        <option value="1">Leve</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6 col-lg-offset-6">
                    <label class="control-label col-lg-4">Tipo de alteración</label>
                    <div class="checkbox col-lg-8">
                      <label class="control-label txt_izq col-lg-12">
                        <input name="tipo_alteracion_derecho" type="checkbox" value="">
                        Neurosensorial
                      </label>

                      <label class="control-label txt_izq col-lg-12">
                        <input name="tipo_alteracion_derecho" type="checkbox" value="">
                        De Conducción
                      </label>
                    </div>
                  </div>

                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="col-lg-4 control-label">Necesidad de Tratamiento</label>
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="tratamiento_derecho" value="si" id="tratamiento_derecho_si"> Sí
                    </label>
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="tratamiento_derecho" value="no" id="tratamiento_derecho_no"> No
                    </label>
                  </div>

                  <div id="sec_tratamiento_derecho_si" class="sub-form">
                    <div class="col-lg-6 col-lg-offset-6">
                      <label class="control-label col-lg-4">¿Cuál(es)?</label>
                      <div class="checkbox col-lg-8">
                        <label class="control-label txt_izq col-lg-12">
                          <input name="cual_derecho" type="checkbox" value="">
                          Implementación de audífonos
                        </label>

                        <label class="control-label txt_izq col-lg-12">
                          <input name="cual_derecho" type="checkbox" value="">
                          Implante coclear
                        </label>
                      </div>
                    </div>                    

                    <div class="col-lg-6 col-lg-offset-6">
                      <label class="control-label col-lg-4">Terapia auditiva</label>
                      <label class="control-label radio-inline col-lg-3">
                        <input type="radio" name="terapia_auditiva_derecho_confirmacion" value="si" id="terapia_auditiva_derecho_confirmacion_si"> Sí
                      </label>
                      <label class="control-label radio-inline col-lg-1">
                        <input type="radio" name="terapia_auditiva_derecho_confirmacion" value="no" id="terapia_auditiva_derecho_confirmacion_no"> No
                      </label>
                    </div>              

                    <div id="sec_terapia_auditiva_derecho_confirmacion_si" class="sub-form">
                      <div class="col-lg-6 col-lg-offset-6">
                        <label class="control-label col-lg-4">¿Cuál(es)?</label>
                        <div class="checkbox col-lg-8">
                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_derecho" type="checkbox" value="">
                            Verbal
                          </label>

                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_derecho" type="checkbox" value="">
                            Seña
                          </label>

                          <label class="control-label txt_izq col-lg-12">
                            <input name="cual_terapia_derecho" type="checkbox" value="">
                            Otro
                          </label>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-lg-6 col-lg-offset-6">
                    <label class="control-label col-lg-12">Observaciones</label>
                    <textarea class="form-control col-lg-12" rows="3" name="observaciones_oido_derecho"></textarea>
                  </div>

                </div>
                
              </div>
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