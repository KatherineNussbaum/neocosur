<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="40semanas"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Situación Neurológica 40 semanas</button>

      <button class="btn btn-default subtitulo" type="button" id="2anios"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Situación Neurológica 2 años </button>

      <button class="btn btn-default subtitulo" type="button" id="2anios_psicomotor"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Desarrollo Psicomotor 2 años </button>

      <button class="btn btn-default subtitulo" type="button" id="2anios_psicomotor_antes"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Desarrollo Psicomotor antes de 2 años </button>

      <button class="btn btn-default subtitulo" type="button" id="2a7anios_psicomotor"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Desarrollo Psicomotor 2 a 7 años </button>

      <button class="btn btn-default subtitulo" type="button" id="2anios_neurodesarrollo"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Situación Neurodesarrollo desde 2 años </button>


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
              <div class="form-group col-lg-9 col-lg-offset-3 sub-form" id="sec_2anios_auditiva_no">
                <label class="control-label col-lg-5">Hipoacusia (Grado)</label>
                <div class="col-lg-7">
                  <select class="form-control input-sm" name="2anios_hipoacusia">
                    <option value="0"></option>
                    <option value="1">Opción</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-lg-9 col-lg-offset-3">
                <label class="control-label col-lg-12">Visual</label>
                <label class="control-label col-lg-4">Uso de lentes</label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="visual" type="radio" value="si">
                  Si
                </label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="visual" type="radio" value="no">
                  No
                </label> 
              </div>

              <div class="form-group col-lg-9 col-lg-offset-3">
                <label class="control-label col-lg-4">Cirugía</label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="cirugia" type="radio" value="si" id="2anios_cirugia_si">
                  Si
                </label>
                <label class="control-label txt_izq col-lg-2">
                  <input name="cirugia" type="radio" value="no" id="2anios_cirugia_no">
                  No
                </label> 
              </div>
              <div class="form-group col-lg-9 col-lg-offset-3 sub-form" id="sec_2anios_cirugia_si">
                <label class="control-label col-lg-4">Describe</label>
                <div class="col-lg-8">
                  <textarea class="form-control col-lg-12" rows="3" name="2anios_cirugia_si_descripcion"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-3">Retraso del lenguaje</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="2anios_lenguaje" value="si" id="2anios_lenguaje_si"> Sí
                </label>
                <label for="" class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="2anios_lenguaje" value="no" id="2anios_lenguaje_no"> No
                </label>
              </div>
              <div class="form-group col-lg-9 col-lg-offset-3 sub-form" id="sec_2anios_lenguaje_si">
                <label class="control-label col-lg-5">Tipo</label>
                <div class="col-lg-7">
                  <select class="form-control input-sm" name="2anios_lenguaje_si_tipo">
                    <option value="0"></option>
                    <option value="1">Opción</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-3">Otros hallazgos</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-5">
                  <input type="radio" class="2anios_otros" name="2anios_cefalia" value="si" id="2anios_microcefalia"> Microcefalia
                </label>
                <label for="" class="control-label radio-inline col-lg-5" >
                  <input type="radio" class="2anios_otros" name="2anios_cefalia" value="no" id="2anios_macrocefalia"> Macrocefalia
                </label>
              </div>

              <div class="form-group checkbox col-lg-9">
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_otros">
                  Sindrome Convulsivo
                </label>
                <label class="control-label txt_izq col-lg-12">
                  <input name="" type="checkbox" value="" class="2anios_otros">
                  Alteración de conducta
                </label>               
              </div>
            </div>

            <div class="form-group col-lg-6 col-lg-offset-6">
              <label class="control-label col-lg-3">Neurorehabilitación</label>
              <div class="col-lg-7">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="2anios_neurorehabilitación" value="si"> Sí
                </label>
                <label for="" class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="2anios_neurorehabilitación" value="no"> No
                </label>
              </div>
            </div>

          </div> 
        </div>
      </div>

      <div class="row" id="sec_2anios_psicomotor_antes">
        <div class="col-lg-12 form-group">
          <label class="control-label">Evaluación del Desarrollo Psicomotor antes de los 2 años de EC</label> 
        </div>
        <div class="row">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">0-24 meses</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="0a24semanas" value="si" id="0a24semanas_si"> Sí
              </label>
              <label for="" class="control-label radio-inline col-lg-2" >
                <input type="radio" name="0a24semanas" value="no" id="0a24semanas_no"> No
              </label>
            </div>
          </div>

          <div id="sec_0a24semanas_si" class="sub-form">
            <div class="col-lg-6">
              <div class="col-lg-12 form-group">
                <label class="control-label col-lg-12">¿Cuál?</label>
                <div class="col-lg-12">
                  <div class="form-group checkbox">
                    <label class="control-label txt_izq col-lg-12">
                      <input name="" type="checkbox" value="" class="0a24semanas_cual" id="eedp">
                      (EEDP) Escala de Evaluación Desarrollo Psicomotor
                    </label>
                    <div id="sec_eedp" class="sub-form">
                      <div class="form-group">
                        <label class="control-label col-lg-4">Fecha de aplicación</label>
                        <div class="col-lg-8">
                          <input type="date" name="fecha_eedp" class="input-sm form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Edad EC</label>
                        <div class="col-lg-8">
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" step="1" name="eedp_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">años</span>
                          </div>
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" max="11" step="1" name="eedp_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">meses</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Puntaje</label>
                        <div class="col-lg-8">
                          <input type="number" name="eedp_puntaje" class="input-sm form-control" maxlength="3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Normal</label>
                        <div class="col-lg-8 form-group">
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="eedp_normal" value="si" id="eedp_normal_si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="eedp_normal" value="no" id="eedp_normal_no"> No
                          </label>
                        </div>
                      </div>
                      <div id="sec_eedp_normal_si" class="form-group sub-form">
                        <label class="control-label col-lg-4">Observación</label>
                        <div class="col-lg-8">
                          <textarea class="form-control col-lg-12" rows="3" name="eddp_observacion"></textarea>
                        </div>
                      </div>       
                    </div>

                    <label class="control-label txt_izq col-lg-12">
                      <input name="" type="checkbox" value="" class="0a24semanas_cual" id="eais">
                      (EAIS) Escala argentina de Inteligencia Sensorio-motriz 
                    </label>
                    <div id="sec_eais" class="sub-form">
                      <div class="form-group">
                        <label class="control-label col-lg-4">Fecha de aplicación</label>
                        <div class="col-lg-8">
                          <input type="date" name="fecha_eais" class="input-sm form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Edad EC</label>
                        <div class="col-lg-8">
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" step="1" name="eais_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">años</span>
                          </div>
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" max="11" step="1" name="eais_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">meses</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Puntaje</label>
                        <div class="col-lg-8">
                          <input type="number" name="eais_puntaje" class="input-sm form-control" maxlength="3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Normal</label>
                        <div class="col-lg-8 form-group">
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="eais_normal" value="si" id="eais_normal_si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="eais_normal" value="no" id="eais_normal_no"> No
                          </label>
                        </div>
                      </div>
                      <div id="sec_eais_normal_si" class="form-group sub-form">
                        <label class="control-label col-lg-4">Observación</label>
                        <div class="col-lg-8">
                          <textarea class="form-control col-lg-12" rows="3" name="eais_observacion"></textarea>
                        </div>
                      </div>       
                    </div>

                    <label class="control-label txt_izq col-lg-12">
                      <input name="" type="checkbox" value="" class="0a24semanas_cual" id="cat">
                      (CAT/CLAMS) Cognitive Adaptive Test (Clinical Linguistic and Auditory Milestone Scale)
                    </label>
                    <div id="sec_cat" class="sub-form">
                      <div class="form-group">
                        <label class="control-label col-lg-4">Fecha de aplicación</label>
                        <div class="col-lg-8">
                          <input type="date" name="fecha_cat" class="input-sm form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Edad EC</label>
                        <div class="col-lg-8">
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" step="1" name="cat_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">años</span>
                          </div>
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" max="11" step="1" name="cat_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">meses</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Puntaje</label>
                        <div class="col-lg-8">
                          <input type="number" name="cat_puntaje" class="input-sm form-control" maxlength="3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Normal</label>
                        <div class="col-lg-8 form-group">
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="cat_normal" value="si" id="cat_normal_si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="cat_normal" value="no" id="cat_normal_no"> No
                          </label>
                        </div>
                      </div>
                      <div id="sec_cat_normal_si" class="form-group sub-form">
                        <label class="control-label col-lg-4">Observación</label>
                        <div class="col-lg-8">
                          <textarea class="form-control col-lg-12" rows="3" name="cat_observacion"></textarea>
                        </div>
                      </div>       
                    </div>

                    <label class="control-label txt_izq col-lg-12">
                      <input name="" type="checkbox" value="" class="0a24semanas_cual" id="asq">
                      (ASQ) Age and Stage Questionnaire 
                    </label>
                   <div id="sec_asq" class="sub-form">
                      <div class="form-group">
                        <label class="control-label col-lg-4">Fecha de aplicación</label>
                        <div class="col-lg-8">
                          <input type="date" name="fecha_asq" class="input-sm form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Edad EC</label>
                        <div class="col-lg-8">
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" step="1" name="asq_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">años</span>
                          </div>
                          <div class="col-lg-5 input-group linea">
                            <input type="number" min="0" max="11" step="1" name="asq_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">meses</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Puntaje</label>
                        <div class="col-lg-8">
                          <input type="number" name="asq_puntaje" class="input-sm form-control" maxlength="3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4">Normal</label>
                        <div class="col-lg-8 form-group">
                          <label class="control-label radio-inline col-lg-2">
                            <input type="radio" name="asq_normal" value="si" id="asq_normal_si"> Sí
                          </label>
                          <label class="control-label radio-inline col-lg-2" >
                            <input type="radio" name="asq_normal" value="no" id="asq_normal_no"> No
                          </label>
                        </div>
                      </div>
                      <div id="sec_asq_normal_si" class="form-group sub-form">
                        <label class="control-label col-lg-4">Observación</label>
                        <div class="col-lg-8">
                          <textarea class="form-control col-lg-12" rows="3" name="asq_observacion"></textarea>
                        </div>
                      </div>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>

      <div class="row" id="sec_2a7anios_psicomotor">
        <div class="col-lg-12 form-group">
          <label class="control-label col-lg-12">Evaluación del Desarrollo Psicomotor 2 a 7 años</label> 
        </div>
        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">TEPSI</label>
            <div class="col-lg-8">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2a7anios_tepsi" value="si" id="2a7anios_tepsi_si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2a7anios_tepsi" value="no" id="2a7anios_tepsi_no"> No
              </label>
            </div>
          </div>
          <div id="sec_2a7anios_tepsi_si" class="sub-form col-lg-6">
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Normal</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="2a7anios_tepsi_normal" value="si" id="2a7anios_tepsi_normal_si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="2a7anios_tepsi_normal" value="no" id="2a7anios_tepsi_normal_no"> No
                </label>
              </div>
            </div>
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Fecha de aplicación</label>
              <div class="col-lg-8">
                <input type="date" name="2a7anios_tepsi_fecha" class="form-control input-sm">
              </div>
            </div>
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Edad</label>
              <div class="col-lg-8">
                <div class="col-lg-5 input-group linea">
                  <input type="number" min="0" step="1" name="2a7anios_tepsi_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                  <span class="input-group-addon" id="basic-addon2">años</span>
                </div>
                <div class="col-lg-5 input-group linea">
                  <input type="number" min="0" max="11" step="1" name="2a7anios_tepsi_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                  <span class="input-group-addon" id="basic-addon2">meses</span>
                </div>
              </div>
            </div>
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Puntaje</label>
              <div class="col-lg-8">
                <input type="number" name="2a7anios_tepsi_puntaje" maxlength="3" class="form-control input-sm">
              </div>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Bayley</label>
            <div class="col-lg-7">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="2a7anios_bayley" value="si" id="2a7anios_bayley_si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="2a7anios_bayley" value="no" id="2a7anios_bayley_no"> No
              </label>
            </div>
          </div>
          <div id="sec_2a7anios_bayley_si" class="sub-form col-lg-6">
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Versión aplicada</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="2a7anios_bayley_version" value="" id="2a7anios_bayley_version_2"> II
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="2a7anios_bayley_version" value="" id="2a7anios_bayley_version_3"> III
                </label>
              </div>
            </div>
            <div id="sec_2a7anios_bayley_version_2" class="form-group sub-form col-lg-12">
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Fecha de apliación</label>
                <div class="col-lg-8">
                  <input type="date" name="2a7anios_bayley_version_2_fecha" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Edad</label>
                <div class="col-lg-8">
                  <div class="col-lg-5 input-group linea">
                    <input type="number" min="0" step="1" name="2a7anios_bayley_version_2_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">años</span>
                  </div>
                  <div class="col-lg-5 input-group linea">
                    <input type="number" min="0" max="11" step="1" name="2a7anios_bayley_version_2_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">meses</span>
                  </div>
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala Mental</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_2_mental" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala Motora</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_2_motora" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala de Conducta</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_2_conducta" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Normal</label>
                <div class="col-lg-8">
                  <label class="control-label radio-inline col-lg-2">
                    <input type="radio" name="2a7anios_bayley_version_2_normal" value="si" > Si
                  </label>
                  <label class="control-label radio-inline col-lg-2" >
                    <input type="radio" name="2a7anios_bayley_version_2_normal" value="no" > No
                  </label>
                </div>
              </div>
            </div>


            <div id="sec_2a7anios_bayley_version_3" class="form-group sub-form col-lg-12">
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Fecha de apliación</label>
                <div class="col-lg-8">
                  <input type="date" name="2a7anios_bayley_version_3_fecha" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Edad</label>
                <div class="col-lg-8">
                  <div class="col-lg-5 input-group linea">
                    <input type="number" min="0" step="1" name="2a7anios_bayley_version_3_edad_anios" class="form-control input-sm" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">años</span>
                  </div>
                  <div class="col-lg-5 input-group linea">
                    <input type="number" min="0" max="11" step="1" name="2a7anios_bayley_version_3_edad_meses" class="form-control input-sm" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">meses</span>
                  </div>
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala Motora</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_3_motora" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala de Cognitiva</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_3_cognitiva" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala de Lenguaje</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_3_lenguaje" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala Socio-emocional</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_3_socio" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Escala Comport. adaptativo</label>
                <div class="col-lg-8">
                  <input type="number" name="2a7anios_bayley_version_3_comportamiento" class="form-control input-sm">
                </div>
              </div>
              <div class="row col-lg-12">
                <label class="control-label col-lg-4">Normal</label>
                <div class="col-lg-8">
                  <label class="control-label radio-inline col-lg-2">
                    <input type="radio" name="2a7anios_bayley_version_3_normal" value="si" > Si
                  </label>
                  <label class="control-label radio-inline col-lg-2" >
                    <input type="radio" name="2a7anios_bayley_version_3_normal" value="no" > No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Retraso de lenguaje<br>(Niños hasta los 3 años)</label>
            <div class="col-lg-8">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="retraso_lenguaje" value="si" id="retraso_lenguaje_si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="retraso_lenguaje" value="no" id="retraso_lenguaje_no"> No
              </label>
            </div>
          </div>
          <div id="sec_retraso_lenguaje_si" class="col-lg-6 sub-form">
            <div class="col-lg-12 form-group">
              <div class="col-lg-12">
                <label class="control-label radio-inline col-lg-5">
                  <input type="radio" name="retraso_lenguaje_tipo" value=""> Expresivo
                </label>
                <label class="control-label radio-inline col-lg-6" >
                  <input type="radio" name="retraso_lenguaje_tipo" value=""> Mixto (expresivo - comprensivo)
                </label>
              </div>
            </div>
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Rehab. fonoaudiológica</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="retraso_lenguaje_rehab" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="retraso_lenguaje_rehab" value="no"> No
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Trastorno expresivo de lenguaje<br>(Niños sobre los 3 años)</label>
            <div class="col-lg-8">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="retraso_expresivo" value="si" id="retraso_expresivo_si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="retraso_expresivo" value="no" id="retraso_expresivo_no"> No
              </label>
            </div>
          </div>
          <div id="sec_retraso_expresivo_si" class="col-lg-6 sub-form">
            <div class="col-lg-12 form-group">
              <label class="control-label col-lg-4">Rehab. fonoaudiológica</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="retraso_expresivo_rehab" value="si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="retraso_expresivo_rehab" value="no"> No
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
            <div class="form-group col-lg-6">
              <label class="control-label col-lg-4">Evaluación Coeficiente intelectual (WPPSI-R)</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="coeficiente" value="si" id="coeficiente_si"> Sí
                </label>
                <label class="control-label radio-inline col-lg-2" >
                  <input type="radio" name="coeficiente" value="no" id="coeficiente_no"> No
                </label>
              </div>
            </div>
            <div id="sec_coeficiente_si" class="sub-form col-lg-6">
              <div id="coeficiente_1">
                <div class="col-lg-12 form-group">
                  <div class="control-label col-lg-12"><p>Entre los 2 años 6 meses y los 3 años 11 meses</p></div>
                  <label class="control-label col-lg-4">Fecha de aplicación</label>
                  <div class="col-lg-8">
                    <input type="date" name="coeficiente_fecha_1" class="form-control input-sm" value="">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Edad</label>
                  <div class="col-lg-8">
                     <div class="col-lg-5 input-group linea">
                        <input type="number" min="0" step="1" name="coeficiente_edad_anios_1" class="form-control input-sm" aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2">años</span>
                      </div>
                      <div class="col-lg-5 input-group linea">
                        <input type="number" min="0" max="11" step="1" name="coeficiente_edad_meses_1" class="form-control input-sm" aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2">meses</span>
                      </div>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Área Verbal</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_verbal_1" class="form-control input-sm">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Área Manipulativa</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_manipulativa_1" class="form-control input-sm">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Total</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_total_1" class="form-control input-sm">
                  </div>
                </div>
              </div>

              <div id="coeficiente_2">
                <div class="col-lg-12 form-group">
                  <div class="control-label col-lg-12"><p>Entre los 4 y 7 años</p></div>
                  <label class="control-label col-lg-4">Fecha de aplicación</label>
                  <div class="col-lg-8">
                    <input type="date" name="coeficiente_fecha_2" class="form-control input-sm" value="">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Edad</label>
                  <div class="col-lg-8">
                     <div class="col-lg-5 input-group linea">
                        <input type="number" min="0" step="1" name="coeficiente_edad_anios_2" class="form-control input-sm" aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2">años</span>
                      </div>
                      <div class="col-lg-5 input-group linea">
                        <input type="number" min="0" max="11" step="1" name="coeficiente_edad_meses_2" class="form-control input-sm" aria-describedby="basic-addon2">
                        <span class="input-group-addon" id="basic-addon2">meses</span>
                      </div>
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Área Verbal</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_verbal_2" class="form-control input-sm">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Área Manipulativa</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_manipulativa_2" class="form-control input-sm">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Velocidad Procesamiento</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_procesamiento_2" class="form-control input-sm">
                  </div>
                </div>
                <div class="col-lg-12 form-group">
                  <label class="control-label col-lg-4">Lenguaje general</label>
                  <div class="col-lg-8">
                    <input type="number" maxlength="3" name="coeficiente_general_2" class="form-control input-sm">
                  </div>
                </div>
              </div>       
            </div>       
        </div>

        <div class="row col-lg-12">
            <div class="form-group col-lg-6">
              <label class="control-label col-lg-4">Otras evaluaciones de función mental</label>
              <div class="col-lg-8">
                <div class="form-group checkbox col-lg-12">
                  <label for="" class="control-label txt_izq col-lg-12">
                    <input name="ceguera" type="checkbox" value="" class="otras_mental">
                    MSCA (McCarthy Scale of Children’s Abilities)
                  </label>
                  <label for="" class="control-label txt_izq col-lg-12">
                    <input name="estrabismo" type="checkbox" value="" class="otras_mental">
                    SCQ (Social Communicaton Questionnarie)
                  </label>
                  <label for="" class="control-label txt_izq col-lg-12">
                    <input name="refraccion" type="checkbox" value="" class="otras_mental">
                    MCHAT (Modified Checklist for Autism in Toddlers)
                  </label>
                  <label for="" class="control-label txt_izq col-lg-12">
                    <input name="refraccion" type="checkbox" value="" class="otras_mental">
                    VABS-II (Vineland Adaptative Behaviour Scales)
                  </label>
                  <label for="" class="control-label txt_izq col-lg-12">
                    <input name="refraccion" type="checkbox" value="" class="otras_mental">
                    GMFCS (Gross motor functional classification Scale) 
                  </label>
                </div>
              </div>
              <label class="control-label col-lg-4">Observaciones</label>
              <div class="col-lg-8">
                <textarea class="form-control col-lg-12" rows="3" name="otras_mental_observaciones"></textarea>
              </div>         
            </div>
        </div>
      </div>

      <div class="row" id="sec_2anios_neurodesarrollo">
        <div class="col-lg-12 form-group">
          <label class="control-label col-lg-12">Situación del Neurodesarrollo a partir de los 2 años de EC</label>
        </div>
        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Compromiso función motora gruesa</label>
            <div class="col-lg-8">
              <label class="control-label radio-inline col-lg-2">
                <input type="radio" name="motora_guresa" value="si" id="motora_guresa_si"> Sí
              </label>
              <label class="control-label radio-inline col-lg-2" >
                <input type="radio" name="motora_guresa" value="no" id="motora_guresa_no"> No
              </label>
            </div>
          </div>
          <div id="sec_motora_guresa_si" class="col-lg-6 sub-form">
            <label class="control-label col-lg-4">Nivel</label>
            <div class="col-lg-8">
              <select class="form-control input-sm" name="motora_guresa_nivel">
                <option value="0"></option>
                <option value="1">Opción</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="form-group col-lg-6">
            <label class="control-label col-lg-4">Tipo de Parálisis cerebral</label>
            <div class="col-lg-8">
              <label class="control-label col-lg-12">
                <input type="radio" name="paralisis" value="" id="paralisis_1"> Espástica o Hipertónica
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis" value="" id="paralisis_2"> Discinética
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis" value="" id="paralisis_3"> Atáxica
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis" value="" id="paralisis_4"> Hipotónica
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis" value="" id="paralisis_5"> Mixta
              </label>
            </div>
          </div>
          <div id="sec_paralisis_1" class="col-lg-6 sub-form">
            <label class="control-label col-lg-4">¿Cuál?</label>
            <div class="col-lg-8">
              <label class="control-label col-lg-12">
                <input type="radio" name="paralisis_1" value="" > Tetraplejía (tetraparesia) 
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis_1" value="" > Diplejía (diparesia) 
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis_1" value="" > Hemiplejía (hemiparesia) 
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis_1" value="" > Triplejía (triparesia)
              </label>
              <label class="control-label col-lg-12" >
                <input type="radio" name="paralisis_1" value="" > Monoparesia
              </label>
            </div>
          </div>
        </div>

        <div class="row col-lg-12">
          <div class="col-lg-6">
            <div class="form-group col-lg-12">
              <label class="control-label col-lg-12"><p>Otros transtornos<br>(A registrar en controles después de los 6 años)</p></label>
              <label class="control-label col-lg-4">Conductual</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_conductual" value="si"  > Sí 
                </label>
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_conductual" value="no" > No 
                </label>
              </div>       
            </div>
            <div class="form-group col-lg-12">
              <label class="control-label col-lg-4">De Lenguaje</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_lenguaje" value="si"  > Sí 
                </label>
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_lenguaje" value="no" > No 
                </label>
              </div>       
            </div>
            <div class="form-group col-lg-12">
              <label class="control-label col-lg-4">De aprendizaje y/o atencionales</label>
              <div class="col-lg-8">
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_aprendizaje" value="si"  > Sí 
                </label>
                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="otros_transtornos_aprendizaje" value="no" > No 
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