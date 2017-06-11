<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <h4>
        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        Antecedentes Prentatales
      </h4>

        <div class="col-lg-6">

          <div class="form-group">
            <label for="edad_maternal" class="col-lg-5 control-label">Edad maternal</label>
            <div class="col-lg-6">
              <input type="number" min="0" step="1" name="edad_maternal" class="form-control input-sm">
            </div>
          </div> 

          <div class="form-group ">
            <label for="escolaridad" class="col-lg-5 control-label">Años de escolaridad</label>
            <div class="col-lg-6">
                <input type="number" min="0" step="1" name="escolaridad" class="form-control input-sm">
              </div>
          </div>

          <div class="form-group ">
            <label for="escolaridad" class="col-lg-5 control-label">Nivel educacional</label>
            <div class="col-lg-6">
              <select name="nivel_educacional" class="form-control input-sm">
                <option value="0"></option>
                <option value="1">Educación Técnica</option>
              </select> 
            </div>
          </div>

          <div class="form-group">
            <label for="edad_maternal" class="col-lg-5 control-label">Control de embarazo</label>
            <label for="control_embarazo" class="control-label radio-inline col-lg-2">
              <input type="radio" name="control_embarazo" value="si"> Sí
            </label>
            <label for="control_embarazo" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="control_embarazo"  value="no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-6">

          <div class="form-group ">
            <label for="Paridad" class="col-lg-5 control-label">Paridad</label>
            <div class="col-lg-6">
              <select name="paridad" class="form-control input-sm">
                <option value="0">0</option>
                <option value="1">1</option>
              </select> 
            </div>
          </div>

          <div class="form-group">
            <label for="tabaquismo" class="col-lg-5 control-label">Tabaquísmo</label>
            <label for="tabaquismo" class="control-label radio-inline col-lg-2">
              <input type="radio" name="tabaquismo" value="si" id="tabaquismo_si"> Sí
            </label>
            <label for="tabaquismo" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="tabaquismo" value="no" id="tabaquismo_no"> No
            </label>
            <label for="tabaquismo" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="tabaquismo" value="s/i" id="tabaquismo_s/i"> S/I
            </label>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="diabetes" class="col-lg-5 control-label">Diabetes</label>
            <label for="diabetes" class="control-label radio-inline col-lg-2">
              <input type="radio" name="diabetes" value="si" id="diabetes_si"> Sí
            </label>
            <label for="diabetes" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="diabetes" value="no" id="diabetes_no"> No
            </label>
            <label for="diabetes" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="diabetes" value="no" id="diabetes_s_i"> S/I
            </label>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group sub-form diabetes">
            <label for="diabetes_gestacional" class="col-lg-6 control-label">Diabetes gestacional</label>
            <label for="diabetes_gestacional" class="control-label radio-inline col-lg-2">
              <input type="radio" name="diabetes_gestacional" value="si"> Sí
            </label>
            <label for="diabetes_gestacional" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="diabetes_gestacional"  value="no"> No
            </label>
          </div>
          <div class="clearfix visible-lg-block"></div>
          <div class="form-group sub-form">
            <label for="medicamentos" class="col-lg-6 control-label">Diabetes Medicamentos</label>
            <label for="medicamentos" class="control-label radio-inline col-lg-2">
              <input type="radio" name="medicamentos" value="si"> Sí
            </label>
            <label for="medicamentos" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="medicamentos" value="no"> No
            </label>
          </div>
        </div>
        <div class="clearfix visible-lg-block"></div>
        <div class="col-lg-6">
          <div class="form-group">
            <label for="ht_art" class="col-lg-5 control-label">HT Art</label>
            <label for="ht_art" class="control-label radio-inline col-lg-2">
              <input type="radio" name="ht_art" value="si" id="ht_art_si"> Sí
            </label>
            <label for="ht_art" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="ht_art"  value="no" id="ht_art_no"> No
            </label>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="form-group sub-form ht_art">
            <label for="ht_embarazo" class="col-lg-5 control-label">Hipertensión en el embarazo</label>
            <label for="ht_embarazo" class="control-label radio-inline col-lg-2">
              <input type="radio" name="ht_embarazo" value="si"> Sí
            </label>
            <label for="ht_embarazo" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="ht_embarazo"  value="no"> No
            </label>
          </div>
          <div class="clearfix visible-lg-block"></div>
          <div class="form-group sub-form ht_art">
            <label for="medicamentos" class="col-lg-5 control-label">Medicamentos</label>
            <label for="medicamentos" class="control-label radio-inline col-lg-2">
              <input type="radio" name="medicamentos" value="si"> Sí
            </label>
            <label for="medicamentos" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="medicamentos"  value="no"> No
            </label>
          </div> 
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="multiple" class="col-lg-5 control-label">Múltiple</label>
            <label for="multiple" class="control-label radio-inline col-lg-2">
              <input type="radio" name="multiple" value="si" id="multiple_si"> Sí
            </label>
            <label for="multiple" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="multiple" value="no" id="multiple_no"> No
            </label>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group sub-form multiple">
            <label for="Paridad" class="col-lg-5 control-label">Lugar</label>
            <div class="col-lg-4">
              <select name="paridad" class="form-control input-sm">
                <option value="0">Seleccione</option>
                <option value="1">I</option>
                <option value="2">II</option>
              </select> 
            </div>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="rciu" class="col-lg-5 control-label">RCIU</label>
            <label for="rciu" class="control-label radio-inline col-lg-2">
              <input type="radio" name="rciu" value="si"> Sí
            </label>
            <label for="rciu" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="rciu"  value="no"> No
            </label>
          </div>
          <div class="clearfix visible-lg-block"></div>
          <div class="form-group">
            <label for="rpm" class="col-lg-5 control-label">RPM</label>            
            <div class="col-lg-3 input-group linea">
              <input type="number" min="0" step="1" name="rpm_dias" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">días</span>
            </div>
            <div class="col-lg-3 input-group linea">
              <input type="number" min="0" step="1" name="rpm_hrs" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">hrs.</span>
            </div>
          </div>

          <div class="form-group">
            <label for="antibiotico" class="col-lg-5 control-label">Antibiótico prentala</label>
            <label for="antibiotico" class="control-label radio-inline col-lg-2">
              <input type="radio" name="antibiotico" value="si"> Sí
            </label>
            <label for="antibiotico" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="antibiotico"  value="no"> No
            </label>
          </div>
          <div class="clearfix visible-lg-block"></div>
        </div>

        <div class="clearfix visible-lg-block"></div>
        <div class="col-lg-6">

          <div class="form-group">
            <label for="cort_prenatal" class="col-lg-5 control-label">Cort. prenatal</label>
            <label for="cort_prenatal" class="control-label radio-inline col-lg-2">
              <input type="radio" name="cort_prenatal" value="si" id="cort_prenatal_si"> Sí
            </label>
            <label for="cort_prenatal" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="cort_prenatal" value="no" id="cort_prenatal_no"> No
            </label>
            <label for="cort_prenatal" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="cort_prenatal" value="s/i" id="cort_prenatal_s_i"> S/I
            </label>
          </div>

        </div>

        <div class="col-lg-6">
          <div class="form-group sub-form cort_prenatal">
            <label for="completo" class="control-label radio-inline col-lg-3">
              <input type="radio" name="completo" value="si" id="completo_si"> Incompleto
            </label>
            <label for="completo" class="control-label radio-inline col-lg-3" >
              <input type="radio" name="completo" value="no" id="completo_no"> Completo
            </label>
          </div>
        </div>

        <div class="col-lg-6 col-lg-offset-6">
          <div class="form-group sub-form completo">
            <label for="curso" class="control-label radio-inline col-lg-3">
              <input type="radio" name="curso" value="si"> 1 curso
            </label>
            <label for="curso" class="control-label radio-inline col-lg-3" >
              <input type="radio" name="curso" value="no"> más de 1 curso
            </label>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="corioamnionitis" class="col-lg-5 control-label">Corioamnionitis</label>
            <label for="corioamnionitis" class="control-label radio-inline col-lg-2">
              <input type="radio" name="corioamnionitis" value="si"> Sí
            </label>
            <label for="corioamnionitis" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="corioamnionitis"  value="no"> No
            </label>
          </div>

          <div class="clearfix visible-lg-block"></div>

          <div class="form-group">
            <label for="sulfato" class="col-lg-5 control-label">Sulfato de Mg</label>
            <label for="sulfato" class="control-label radio-inline col-lg-2">
              <input type="radio" name="sulfato" value="si"> Sí
            </label>
            <label for="sulfato" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="sulfato"  value="no"> No
            </label>
          </div>
          <div class="clearfix visible-lg-block"></div>
          <div class="form-group">
            <label for="doppler" class="col-lg-5 control-label">Alteración del doppler fetal</label>
            <label for="doppler" class="control-label radio-inline col-lg-2">
              <input type="radio" name="doppler" value="si"> Sí
            </label>
            <label for="doppler" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="doppler"  value="no" > No
            </label>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="col-lg-6">
          <div class="form-group">
            <div class="checkbox">
              <label for="" class="control-label txt_izq col-lg-12 margin-left">
                <input type="checkbox" value="">
                Flujo reverso en vena umbilical
              </label>

              <label for="" class="control-label txt_izq col-lg-12 margin-left">
                <input type="checkbox" value="">
                Dilatación cerebral media
              </label>

              <label for="" class="control-label txt_izq col-lg-12 margin-left">
                <input type="checkbox" value="">
                Otra alteración
              </label>
            </div>            
          </div>

          <div class="form-group">
            <label for="obs_doppler" class="col-lg-12 control-label">
              Observaciones prenatales
            </label>
            <div>
              <textarea class="form-control" name="obs_doppler" rows="3" class="col-lg-12"></textarea>
            </div>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="malformacion" class="col-lg-5 control-label">Malformación cognitiva mayor</label>
            <label for="malformacion" class="control-label radio-inline col-lg-2">
              <input type="radio" name="malformacion" value="si" id="malformacion_si"> Sí
            </label>
            <label for="malformacion" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="malformacion" value="no" id="malformacion_no"> No
            </label>
            <label for="malformacion" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="malformacion" value="no" id="malformacion_s_i"> S/I
            </label>
          </div>
        </div>

        <div class="col-lg-6">

            <div class="form-group sub-form compromete">
              <label for="compromete" class="control-label radio-inline col-lg-5">
                <input type="radio" name="compromete" value="no" id="compromete_no"> No compromete la vida
              </label>
              <label for="compromete" class="control-label radio-inline col-lg-5" >
                <input type="radio" name="compromete"  value="si" id="compromete_si"> Compromete la vida
              </label>
            </div>

          <div class="form-group sub-form detalle_compromete">
          
          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Defectos del Sistema Nervioso Central
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Defectos cardíacos
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Defectos gastrointestinales
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Defectos genitourinarios
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Anomalías cromosómicas
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="detalle_compromete" value="">
              Otros defectos
            </label>

          </div>

          <label for="obs_malformaciones" class="col-lg-12 control-label">
            Observaciones
          </label>
          <div>
              <textarea class="form-control" name="obs_malformaciones" rows="3"></textarea>
          </div>
        </div>

        </div>
        <div class=" col-lg-offset-10 col-lg-2">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div> 
    </form>
  </div>
</div>
