<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="respiratorio"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Respiratorio</button>

      <button class="btn btn-default subtitulo" type="button" id="digestivo"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Digestivo </button>

      <button class="btn btn-default subtitulo" type="button" id="renal"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Renal </button>

      <button class="btn btn-default subtitulo" type="button" id="neurologico"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Neurológico </button>

      <div class="row" id="sec_respiratorio">

        <div class="col-lg-12 form-group">
          <label class="control-label">Requerimientos previos</label> 
        </div>
        
        <div class="form-group col-lg-6">

          <label class="col-lg-5 control-label">O<sub>2</sub> a las 36 sem. EC <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si utilizó 0<sub>2</sub> a las 36 semanas de EC, independiente del tiempo que lo requirió."></span></label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="o2_36_sem" value="si" disabled="disabled"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="o2_36_sem" value="no" disabled="disabled"> No
            </label>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">O<sub>2</sub> al alta</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="o2_alta" value="si" disabled="disabled"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="o2_alta" value="no" disabled="disabled"> No
            </label>
          </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-6" id="sec_diureticos">
          <label class="control-label col-lg-5">Diuréticos</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="diureticos" value="si" id="diureticos_si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="diureticos" value="no" id="diureticos_no"> No
            </label>
          </div>
        </div>

        <div id="sec_diureticos_si" class="sub-form">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="control-label col-lg-5">Fecha inicio</label>
              <div class="col-lg-7">
                <input type="date" name="fecha_inicio" class="form-control input-sm">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-lg-5">Fecha suspensión</label>
              <div class="col-lg-7">
                <input type="date" name="fecha_suspension" class="form-control input-sm">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 form-group">
          <label class="control-label">Requerimiento en control actual</label> 
        </div>

        <div class="form-group col-lg-6">

          <label class="col-lg-5 control-label">O<sub>2</sub></label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="o2" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="o2" value="no"> No
            </label>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Broncodilatadores</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="broncodilatadores" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="broncodilatadores" value="no"> No
            </label>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Corticoides inhalatorios</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="corticoides" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="corticoides" value="no"> No
            </label>
          </div>
        </div>

      </div>

      <div class="row" id="sec_digestivo">
        
        <div class="form-group col-lg-6">
          <label class="control-label col-lg-5">Ostomía</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="ostomia" value="si" id="ostomia_si"> Sí
            </label>

            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="ostomia" value="no" id="ostomia_no"> No
            </label>
            
          </div>
        </div>

        <div id="sec_ostomia_si" class="col-lg-6 sub-form">

            <div class="form-group row">
              <label class="control-label col-lg-5">¿Cuál?</label>
              <div class="col-lg-7">
                <select class="form-control input-sm" name="ostomia_cual">
                  <option value="0" ></option>
                  <option value="1">Gastrostomia</option>
                </select>
              </div>
            </div>

            <div class="form-group row" >
              <label class="control-label col-lg-5">Reconstitución del tránsito</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="reconstitucion" value="si" id="reconstitucion_si"> Sí
                </label>

                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="reconstitucion" value="no" id="reconstitucion_no"> No
                </label>
              </div>
            </div>

            <div id="sec_reconstitucion_si" class="row sub-form">
              <div class="form-group">
                <label class="control-label col-lg-5">Fecha</label>
                <div class="col-lg-7">
                  <input type="date" name="fecha_reconstitucion" class="form-control">
                </div>
              </div>
            </div>
            
        </div>

      </div>


      <div class="row" id="sec_renal">

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Requiere Profilaxis Antibiótica</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="profilaxis" value="si" id="profilaxis_si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="profilaxis" value="no" id="profilaxis_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-6 sub-form" id="sec_profilaxis_si">
          <div class="form-group row">
            <label class="col-lg-5 control-label">Fecha de inicio</label>
            <div class="col-lg-7">
              <input type="date" name="fecha_inicio_profilaxis" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-lg-5 control-label">Fecha de suspensión</label>
            <div class="col-lg-7">
              <input type="date" name="fecha_suspension_profilaxis" class="form-control">
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-lg-6" >
          <label class="col-lg-5 control-label">Estudio imágenes </label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="imagenes" value="si" id="imagenes_si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="imagenes" value="no" id="imagenes_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-6 sub-form form-group" id="sec_imagenes_si">

          <table>
            <thead>
              <tr style="vertical-align: top; text-align: center;">
                <td class="col-lg-3"><label class="control-label">Estudio</label></td>
                <td class="col-lg-6"><label class="control-label">Alteración</label></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="vertical-align: top">
                  <label class="control-label">
                    <input type="checkbox" name="eco_renal" id="eco_renal"> Eco renal
                  </label>
                </td>
                <td style="vertical-align: top"> 
                  <div id="sec_eco_renal" class="sub-form">
                    <div class="col-lg-12 form-group">
                      <label class="control-label radio-inline">
                        <input type="radio" name="eco_renal_alteracion" value="si" id="eco_renal_alteracion_si"> Sí
                      </label>
                      <label class="control-label radio-inline" >
                        <input type="radio" name="eco_renal_alteracion" value="no" id="eco_renal_alteracion_no"> No
                      </label>
                    </div>

                    <div id="sec_eco_renal_alteracion_si" class="form-group">
                      <label class="control-label col-lg-12">Describa</label>
                      <textarea class="form-control col-lg-12" rows="3" name="describa_eco_renal"></textarea>
                    </div>
                    
            
                  </div>
                </td>
              </tr>

              <tr>
                <td style="vertical-align: top">
                  <label class="control-label">
                    <input type="checkbox" name="cintigrafia" id="cintigrafia"> Cintigrafía
                  </label>
                </td>
                <td style="vertical-align: top">
                  <div id="sec_cintigrafia" class="sub-form" >
                    <div class="col-lg-12 form-group">
                      <label class="control-label radio-inline">
                        <input type="radio" name="cintigrafia_alteracion" value="si" id="cintigrafian_alteracion_si"> Sí
                      </label>
                      <label class="control-label radio-inline" >
                        <input type="radio" name="cintigrafia_alteracion" value="no" id="cintigrafia_alteracion_no"> No
                      </label>
                    </div>

                    <div id="sec_cintigrafia_alteracion_si" class="form-group">
                      <label class="control-label col-lg-12">Describa</label>
                      <textarea class="form-control col-lg-12" rows="3" name="describa_cintigrafia"></textarea>
                    </div>
                  </div>
                </td>
              </tr>

              <tr>
                <td style="vertical-align: top" class="form-group">
                  <label class="control-label">
                    <input type="checkbox" name="uretrocistografia" id="uretrocistografia"> Uretrocistografía
                  </label>
                </td>
                <td style="vertical-align: top">
                  <div id="sec_uretrocistografia" class="sub-form">
                    <div class="col-lg-12 form-group">
                      <label class="control-label radio-inline">
                        <input type="radio" name="uretrocistografia_alteracion" value="si" id="uretrocistografia_alteracion_si"> Sí
                      </label>
                      <label class="control-label radio-inline" >
                        <input type="radio" name="uretrocistografia_alteracion" value="no" id="uretrocistografia_alteracion_no"> No
                      </label>
                    </div>

                    <div id="sec_uretrocistografia_alteracion_si" class="form-group">
                      <label class="control-label col-lg-12">Describa</label>
                      <textarea class="form-control col-lg-12" rows="3" name="describa_uretrocistografia"></textarea>
                    </div>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>

        </div>

        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Control de presión arterial</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="presion" value="si" id="presion_si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="presion" value="no" id="presion_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-6 sub-form" id="sec_presion_si">
          <label class="col-lg-5 control-label">Alteración en algún evento</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="alteracion" value="si" > Sí
            </label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="alteracion" value="no" > No
            </label>
          </div>

          <div class="col-lg-12 form-group">
            <p><label class="control-label">Visualizar curvas IPHA</label> 
            <a href="docs/BPLimitsChart.pdf" target="_blank">PBLOOD PRESSURE LIMITS CHARTS</a></p>
          </div>
        </div>

      </div>

      <div class="row" id="sec_neurologico">
        <div class="col-lg-12 form-group">
          <label class="control-label">Resumen Situación Neurológica a las 40 semanas</label>
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-5">HIC (Grado)</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="hic" value="si" id="hic_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="hic" value="no" id="hic_no"> No
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="hic" value="s_i" id="hic_s_i" > S/I
              </label>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <div id="sec_hic_si" class="sub-form">
              <label class="control-label col-lg-5">Grado</label>
              <div class="col-lg-7"> 
                <select name="hic_grado" class="form-control col-lg-8 input-sm">
                  <option value="0"></option>
                  <option value="1">Opción</option>
                </select>
              </div>
            </div>          
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-5">Leucomalacia</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="leucomalacia" value="si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="leucomalacia" value="no"> No
              </label>
            </div>
          </div>

          <div class="form-group col-lg-6">
                    
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-5">Hidrocefalia</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="hidrocefalia" value="si" id="hidrocefalia_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="hidrocefalia" value="no" id="hidrocefalia_no"> No
              </label>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <div id="sec_hidrocefalia_si" class="sub-form">
              <label class="control-label col-lg-5">Válvula derivativa</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="valvula" value="si"> Sí
                </label>
                <label for="" class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="valvula" value="no"> No
                </label>
              </div>
            </div> 
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-5">Convulsiones
post-alta</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="convulsiones" value="si" id="convulsiones_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="convulsiones" value="no" id="convulsiones_no"> No
              </label>
            </div>
          </div>

          <div class="form-group col-lg-6">
            <div id="sec_convulsiones_si" class="sub-form">
              <label class="control-label col-lg-5">¿Requiere tratamiento?</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="tratamiento" value="si"> Sí
                </label>
                <label for="" class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="tratamiento" value="no"> No
                </label>
              </div>
              <div class="clearfix"></div>
              <label class="control-label col-lg-5">Fecha de suspensión tratamiento anterior</label>
              <div class="col-lg-7">
                <input type="date" name="fecha_tratamiento" class="form-control input-sm col-lg-8">
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