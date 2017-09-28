<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="40semanas"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> 40 semanas</button>

      <button class="btn btn-default subtitulo" type="button" id="2anios"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> 2 años </button>



      <div class="row" id="sec_40semanas">

        <div class="col-lg-12 form-group">
          <label class="control-label">Resumen Situación Neurológica 40 semanas de EC</label> 
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">HIC</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="hic_40semanas" value="si" id="hic_40semanas_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="hic_40semanas" value="no" id="hic_40semanas_no"> No
              </label>
            </div>
          </div>

          <div id="sec_hic_40semanas_si" class="sub-form">
            <div class="form-group col-lg-6">
              <label class="control-label col-lg-5">Grado</label>
              <div class="col-lg-7">
                <select class="col-lg-8 input-sm form-control" name="hic_40semanas_grado">
                  <option value="0"></option>
                  <option value="1">Opción</option>
                </select>
              </div>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">LPV</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="lpv_40semanas" value="si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="lpv_40semanas" value="no"> No
              </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">ROP</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="rop_40semanas" value="si" id="rop_40semanas_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="rop_40semanas" value="no" id="rop_40semanas_no"> No
              </label>
            </div>
          </div>

          <div id="sec_rop_40semanas_si" class="sub-form">
            <div class="form-group col-lg-6">
              <label class="control-label col-lg-5">Grado</label>
              <div class="col-lg-7">
                <select class="col-lg-8 input-sm form-control" name="rop_40semanas_grado">
                  <option value="0"></option>
                  <option value="1">Opción</option>
                </select>
              </div>
            </div>
          </div> 
        </div>
          
        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">BERA alterado</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="bera_40semanas" value="si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="bera_40semanas" value="no"> No
              </label>
            </div>
          </div>
        </div>

      </div>

      <div class="row" id="sec_2anios">

        <div class="col-lg-12 form-group">
          <label class="control-label">Resumen Situación Neurológica 2 años de EC</label> 
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Visión Normal</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_vision" value="si" id="2anios_vision_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_vision" value="no" id="2anios_vision_no"> No
              </label>
            </div>
          </div>

          <div id="sec_2anios_vision_no" class="sub-form">
            <div class="form-group col-lg-6">
              <div class="form-group checkbox col-lg-12">
                <label for="" class="control-label txt_izq col-lg-12">
                  <input name="ceguera" type="checkbox" value="" class="vision_normal_no">
                  Ceguera
                </label>
                <label for="" class="control-label txt_izq col-lg-12">
                  <input name="estrabismo" type="checkbox" value="" class="vision_normal_no">
                  Estrabismo
                </label>
                <label for="" class="control-label txt_izq col-lg-12">
                  <input name="refraccion" type="checkbox" value="" class="vision_normal_no">
                  Vicios de refracción con uso de lentes
                </label>
              </div>
            </div>
          </div> 
        </div>


        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Audición Normal</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_audicion" value="si" id="2anios_audiocion_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_audicion" value="no" id="2anios_audiocion_no"> No
              </label>
            </div>
          </div>

          <div id="sec_2anios_audiocion_no" class="sub-form">
            <div class="form-group col-lg-6">
              <div class="form-group checkbox col-lg-12">
                <label class="control-label radio-inline col-lg-5">
                  <input type="radio" name="2anios_audiocion_no" value=""> Hipoacusia Unilateral 
                </label>
                <label for="" class="control-label radio-inline col-lg-5">
                  <input type="radio" name="2anios_audiocion_no" value=""> Hipoacusia Bilateral 
                </label>
              </div>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="form-group col-lg-12">
            <label class="control-label col-lg-2">Función Motora</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_motora" value=""> Normal
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_motora" value=""> Hipotonía
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_motora" value=""> Hipertonía
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_motora" value=""> Ambas
              </label>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Parálisis Cerebral</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_paralisis" value="si" id="2anios_paralisis_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_paralisis" value="no" id="2anios_paralisis_no"> No
              </label>
            </div>
          </div>

          <div id="sec_2anios_paralisis_si" class="sub-form">
            <div class="form-group col-lg-6">
              <div class="form-group checkbox col-lg-12">
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="2anios_paralisis_si" value=""> Diplegia
                </label>
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="2anios_paralisis_si" value=""> Hemiplegia
                </label>
                <label class="control-label radio-inline col-lg-3">
                  <input type="radio" name="2anios_paralisis_si" value=""> Quadriplegia
                </label>
              </div>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="form-group col-lg-12">
            <label class="control-label col-lg-2">Situación Cognitiva </label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_cognitiva" value=""> Normal
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_cognitiva" value=""> Anormal
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_cognitiva" value=""> Sospecha
              </label>
            </div>
          </div> 
        </div>


        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Otros</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_otros" value="si" id="2anios_otros_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_otros" value="no" id="2anios_otros_no"> No
              </label>
            </div>
          </div>

          <div id="sec_2anios_otros_si" class="sub-form">
            <div class="form-group col-lg-6">
              <div class="form-group checkbox col-lg-12">
                <label for="" class="control-label txt_izq col-lg-12">
                  <input name="sindrome_convulsivo" type="checkbox" value="" class="2anios_otros_si">
                  Sindrome convulsivo en tratamiento
                </label>
                <label class="control-label txt_izq col-lg-12">
                  <input name="hidrocefalia" type="checkbox" value="" class="2anios_otros_si">
                  Hidrocefalia con válvula derivativa
                </label>
              </div>
            </div>
          </div> 
        </div>

      </div>

      <div class="row" id="sec_2anios_psicomotor">
        <div class="col-lg-12 form-group">
          <label class="control-label">Resumen del Desarrollo Psicomotor a los 2 años de EC</label> 
        </div>

        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Examen Normal</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2anios_examen" value="si" id="2anios_psicomotor_examen_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2anios_examen" value="no" id="2anios_psicomotor_examen_no"> No
              </label>
            </div>
          </div>

          <div id="sec_2anios_psicomotor_examen_no" class="sub-form">
            <div class="form-group col-lg-6">
              <label class="control-label col-lg-3">Motora</label>
              <div class="form-group checkbox col-lg-9">
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_motora">
                  Hipotonía
                </label>
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_motora">
                  Hipertonía
                </label>
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_motora">
                  Focalización
                </label>
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_motora">
                  Hemisíndrome
                </label>
               
              </div>
            </div>

            <div class="form-group col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-3">Sensorial</label>
              <div class="form-group col-lg-9">
                <label class="control-label col-lg-4">Auditiva Normal</label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="auditiva" type="radio" value="si" id="2anios_auditiva_si">
                  Si
                </label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="auditiva" type="radio" value="no" id="2anios_auditiva_no">
                  No
                </label>
               
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