<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="sec_funcion_auditiva"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Función Visual</button>

      <div class="row">
        
        <div class="col-lg-12">
          <p>Programa de detección Precoz de Retinopatía del Prematuro (ROP)</p>
        </div>
        
        <div class="form-group col-lg-6">
            <label class="col-lg-6 control-label">Evaluación previa al alta</label>
            <div class="col-lg-6">
              <input type="text" name="evaluacion_previa" class="form-control input-sm" disabled="disabled">
            </div>
            
        </div>

        <div class="col-lg-6"></div>
      </div>

      <div class="row">
        <div class="form-group col-lg-6">
            <label class="col-lg-6 control-label">Evaluación posterior al alta</label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="evaluacion_posterior" value="si" id="evaluacion_posterior_si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="evaluacion_posterior" value="no" id="evaluacion_posterior_no"> No
            </label>
          </div>
      </div>

      <div id="sec_evaluacion_posterior" class="row col-lg-12">
        <table >
          <thead>
            <tr style="vertical-align: top">
              <td class="col-lg-1">Ojo</td>
              <td class="col-lg-2">ROP</td>
              <td class="col-lg-2">Localización</td>
              <td class="col-lg-2">Severidad</td>
              <td class="col-lg-2">Enf. Plus</td>
              <td class="col-lg-3">Cirugía ROP</td>
            </tr>
          </thead>
          <tbody>
            <tr style="vertical-align: top">
              <td class="col-lg-1"><label class="control-label">Izquierdo</label></td>
              <td class="col-lg-2">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="rop_izquierdo" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="rop_izquierdo" value="no"> No
                  </label>
                </div>
              </td>
              <td class="col-lg-2">
                <select class="form-control input-sm" name="localizacion_izquierdo">
                  <option value="0" ></option>
                  <option value="1">I</option>
                </select>
              </td>
              <td class="col-lg-2">
                <select class="form-control input-sm" name="severidad_izquierdo">
                  <option value="0" ></option>
                  <option value="1">Etapa 1</option>
                </select>
              </td>
              <td class="col-lg-2">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_izquierdo" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_izquierdo" value="no"> No
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_izquierdo" value="s_i"> S/I
                  </label>
                </div>
              </td>
              <td class="col-lg-3">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_izquierdo" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_izquierdo" value="no"> No
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_izquierdo" value="s_i"> S/I
                  </label>
                </div>
                <div id="cual_izquierdo" class="form-group row">
                  <label class="control-label col-lg-12">¿Cuál?</label>
                    <select class="form-control input-sm" name="cual_izquierdo">
                    <option value="0"></option>
                    <option value="1">Crioterapia</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr style="vertical-align: top">
              <td class="col-lg-1"><label class="control-label">Derecho</label></td>
              <td class="col-lg-2">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="rop_derecho" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="rop_derecho" value="no"> No
                  </label>
                </div>
              </td>
              <td class="col-lg-2">
                <select class="form-control input-sm" name="localizacion_derecho">
                  <option value="0" ></option>
                  <option value="1">I</option>
                </select>
              </td>
              <td class="col-lg-2">
                <select class="form-control input-sm" name="severidad_derecho">
                  <option value="0" ></option>
                  <option value="1">Etapa 1</option>
                </select>
              </td>
              <td class="col-lg-2">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_derecho" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_derecho" value="no"> No
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="plus_derecho" value="s_i"> S/I
                  </label>
                </div>
              </td>
              <td class="col-lg-3">
                <div class="form-group">
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_derecho" value="si"> Sí
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_derecho" value="no"> No
                  </label>
                  <label class="control-label radio-inline">
                    <input type="radio" name="cirugia_derecho" value="s_i"> S/I
                  </label>
                </div>
                <div id="cual_derecho" class="form-group row">
                  <label class="control-label col-lg-12">¿Cuál?</label>
                  <select class="form-control input-sm" name="cual_derecho">
                    <option value="0" ></option>
                    <option value="1">Crioterapia</option>
                  </select>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="row">
          <div class="col-lg-6 form-group">
            <label class="control-label col-lg-6">Bevacizumab</label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="bevacizumab" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="bevacizumab" value="no"> No
            </label>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="col-lg-12 form-group">
            <label class="control-label">Evaluación en controles</label>
          </div>
          <div class="col-lg-3 form-group">
            <label class="control-label">Instancia de Evaluación</label>
            <p>A 40 sem. EC</p>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="instancia" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="instancia" value="no"> No
            </label>
          </div>
          <div class="col-lg-3 form-group" id="sec_diagnostico">
            <label class="control-label">Diagnóstico</label>
            <p>Normal y alta oftalmológica</p>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="oftalmologica" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="oftalmologica" value="no"> No
            </label>
          </div>
          <div class="col-lg-6 form-group" id="sec_rop">
            <label class="control-label col-lg-12">ROP</label>
            
            <table>
              <thead>
                <tr>
                  <td class="col-lg-2">Ojo</td>
                  <td class="col-lg-2">ROP</td>
                  <td class="col-lg-2">Cirugía</td>
                  <td class="col-lg-6"></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-lg-2">Izquierdo</td>
                  <td class="col-lg-2">
                    
                      <div class="col-lg-12">
                        <label class="control-label radio-inline">
                          <input type="radio" name="rop_izquierdo_diagnostico" value="si"> Sí
                        </label>
                      </div>
                      <div class="col-lg-12">
                        <label class="control-label radio-inline">
                          <input type="radio" name="rop_izquierdo_diagnostico" value="no"> No
                        </label>
                      </div>
                      
                    
                  </td>
                  <td class="col-lg-2">
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="si"> Sí
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="no"> No
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="s_i"> S/I
                      </label>
                    </div>
                    
                  </td>
                  <td class="col-lg-6">
                    <div id="cual_izquierdo_rop">
                      <label class="control-label">¿Cuál</label>
                      <select class="form-control input-sm" name="cual_izquierdo_rop">
                      <option value="0" ></option>
                      <option value="1">Laser</option>
                    </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-2">Izquierdo</td>
                  <td class="col-lg-2">
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="rop_izquierdo_diagnostico" value="si"> Sí
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="rop_izquierdo_diagnostico" value="no"> No
                      </label>
                    </div>
                    
                  </td>
                  <td class="col-lg-2">
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="si"> Sí
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="no"> No
                      </label>
                    </div>
                    <div class="col-lg-12">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cirugia_izquierdo_diagnostico" value="s_i"> S/I
                      </label>
                    </div>
                    
                  </td>
                  <td class="col-lg-6">
                    <div id="cual_derecho_rop">
                      <label class="control-label">¿Cuál</label>
                      <select class="form-control input-sm" name="cual_derecho_rop">
                      <option value="0" ></option>
                      <option value="1">Laser</option>
                    </select>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 form-group">
            <label class="control-label col-lg-6">Requiere cirugía</label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="requiere_cirugia" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="requiere_cirugia" value="no"> No
            </label>
          </div>

          <div class="col-lg-6 form-group" id="requiere_cirugia">
            <select class="form-control input-sm" name="requiere_cirugia_cual">
              <option value="0"></option>
              <option>Laser</option>
            </select>
            <label class="control-label col-lg-12">Observaciones</label>
            <textarea class="form-control col-lg-12" rows="3" name="observaciones">
               
            </textarea>
            
          </div>

        </div>

        <div class="row col-lg-12">
          <div class="col-lg-6">
            <label class="control-label">Otras Patologías</label>

            <table>
              <thead>
                <tr>
                  <td class="col-lg-3"><label class="control-label">Ojo</label></td>
                  <td class="col-lg-6"><label class="control-label">Ceguera</label></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-lg-3"><label class="control-label">Izquierdo</label></td>
                  <td class="col-lg-6">
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="ceguera_izquierdo" value="si"> Sí
                    </label>
                    <label class="control-label radio-inline col-lg-2" >
                      <input type="radio" name="ceguera_izquierdo" value="no"> No
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="col-lg-3"><label class="control-label">Derecho</label></td>
                  <td class="col-lg-6">
                    <label class="control-label radio-inline col-lg-3">
                      <input type="radio" name="ceguera_derecho" value="si"> Sí
                    </label>
                    <label class="control-label radio-inline col-lg-2" >
                      <input type="radio" name="ceguera_derecho" value="no"> No
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>


          </div>
          
        </div>

      </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>