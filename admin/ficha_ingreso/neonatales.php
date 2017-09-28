<div class="ficha panel panel-default" id="patologias_neonatales">
  <div class="panel-body">
  <form>
    <button class="btn btn-success active subtitulo" type="button" id="sec_principal_neonatales"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Patologías Neonatales</button>

    <button class="btn btn-default subtitulo" type="button" id="sec_oftalmologica"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Evaluación oftalmológica</button>

    <button class="btn btn-default subtitulo" type="button" id="sec_sepsis"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Sepsis</button>

    <button class="btn btn-default subtitulo" type="button" id="sec_auditivo"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Evacluación Adutitiva</button>


    <div id="principal_neonatales"> 
    
      <div class="col-lg-12">    

        <div class="form-group col-lg-6">
          <label for="sdr" class="col-lg-5 control-label">Clínica SDR 
          <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" aria-hidden="true" title="Si: Presenta quejido, retracción, aleteo nasal, respiración paradojal, cianosis o requerimientos de 02 en las primeras 24 horas."></span>
          </label>
          <label for="sdr" class="control-label radio-inline col-lg-2">
            <input type="radio" name="sdr" value="si"> Sí
          </label>
          <label for="sdr" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="sdr" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="radio_torax" class="col-lg-5 control-label">Radiografía tórax alterada 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" aria-hidden="true" title="Si: En las primeras 24 horas tiene opacidad difusa, patrón reticulonodular, infiltrado alveolar o volumen pulmonar disminuido."></span>
          </label>
          <label for="radio_torax" class="control-label radio-inline col-lg-2">
            <input type="radio" name="radio_torax" value="si"> Sí
          </label>
          <label for="radio_torax" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="radio_torax" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="oxigeno_28" class="col-lg-5 control-label">Oxígeno 28 días 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" aria-hidden="true" title="Si: Requerimiento continuo de O2 a los 28 días de edad."></span>
          </label>
          <label for="oxigeno_28" class="control-label radio-inline col-lg-2">
            <input type="radio" name="oxigeno_28" value="si"> Sí
          </label>
          <label for="oxigeno_28" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="oxigeno_28" value="no"> No
          </label>
          <label for="oxigeno_28" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="oxigeno_28" value="s_i"> S/I
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="oxigeno_36" class="col-lg-5 control-label">Oxígeno 36 sem. 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Se refiere a requerimientos de O2 a las 36 semanas de EC. <br>S/I: Si es trasladado."></span>
          </label>
          <label for="oxigeno_36" class="control-label radio-inline col-lg-2">
            <input type="radio" name="oxigeno_36" value="si"> Sí
          </label>
          <label for="oxigeno_36" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="oxigeno_36" value="no"> No
          </label>
          <label for="oxigeno_36" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="oxigeno_36" value="s_i"> S/I
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="displasia" class="col-lg-5 control-label">Severidad Displasia BP 
          <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Se definida en manual operativo. <br>
          Leve: Sin req O2 a 36 semanas.<br>
          Moderada: Req O2 pero <30% a 36 semanas.<br>
          Severa: Req O2 > 36 semanas o CPAP o V Mec. a las 36 semanas.<br>
          Sin información (S/I): Si el RN fallece o es trasladado antes de las 36 semanas."></span>
          </label>
          <div class="col-lg-7">
            <select name="displasia" class="form-control input-sm">
              <option value="0">Seleccione</option>
              <option value="1">Leve</option>
            </select>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="alveolar" class="col-lg-5 control-label">Rup. Alveolar</label>
          <label for="alveolar" class="control-label radio-inline col-lg-2">
            <input type="radio" name="alveolar" value="si" id="alveolar_si" checked> Sí
          </label>
          <label for="alveolar" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="alveolar" value="no" id="alveolar_no"> No
          </label>
          <label for="alveolar" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="alveolar" value="s_i" id="alveolar_s_i"> S/I
          </label>
        </div>

       <div class="form-group col-lg-6 sub-form cual_alveolar">
          <label for="cual_alveolar" class="col-lg-5 control-label">¿Cuál?</label>
          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-12 margin-left">
              <input type="checkbox" value="" class="detalle_alveolar">
              Neumotórax
            </label>
            <label for="" class="control-label txt_izq col-lg-12 margin-left">
              <input type="checkbox" value="" class="detalle_alveolar">
              Neumomediastino
            </label>

            <label for="" class="control-label txt_izq col-lg-12 margin-left">
              <input type="checkbox" value="" class="detalle_alveolar">
              Enfisema Intersticial
            </label>
          </div>            
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="eco_cerebral_1" class="col-lg-5 control-label">Eco cerebral < 7 días</label>
          <label for="eco_cerebral_1" class="control-label radio-inline col-lg-2">
            <input type="radio" name="eco_cerebral_1" value="si"> Sí
          </label>
          <label for="eco_cerebral_1" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="eco_cerebral_1" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="eco_cerebral_2" class="col-lg-5 control-label">Eco cerebral 7-21 días</label>
          <label for="eco_cerebral_2" class="control-label radio-inline col-lg-2">
            <input type="radio" name="eco_cerebral_2" value="si"> Sí
          </label>
          <label for="eco_cerebral_2" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="eco_cerebral_2" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="eco_cerebral_3" class="col-lg-5 control-label">Eco cerebral > 21 días</label>
          <label for="eco_cerebral_3" class="control-label radio-inline col-lg-2">
            <input type="radio" name="eco_cerebral_3" value="si"> Sí
          </label>
          <label for="eco_cerebral_3" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="eco_cerebral_3" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="hic" class="col-lg-5 control-label">HIC (Grado)
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" 
            title="Diagnóstico por ultrasonografía o autopsia grados 1 a 4 según Papille.<br>
            Sin información se utiliza cuando RN fallece precozmente y no se realiza ECO."></span>
          </label>
          <label for="hic" class="control-label radio-inline col-lg-2">
            <input type="radio" name="hic" value="si" id="hic_si"> Sí
          </label>
          <label for="hic" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="hic" value="no" id="hic_no"> No
          </label>
          <label for="hic" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="hic" value="no" id="hic_s_i"> S/I
          </label>
        </div>

        <div class="form-group col-lg-6 sub-form hic_grado">
          <label for="grado" class="col-lg-5 control-label">Grado</label>
          <div class="col-lg-7">
            <select name="grado" class="form-control input-sm">
              <option value="0">Seleccione</option>
              <option value="1">I</option>
            </select> 
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="leucomalacia" class="col-lg-5 control-label">Leucomalacia</label>
          <label for="leucomalacia" class="control-label radio-inline col-lg-2">
            <input type="radio" name="leucomalacia" value="si"> Sí
          </label>
          <label for="leucomalacia" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="leucomalacia" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="hidrocefalia" class="col-lg-5 control-label">Hidrocefalia</label>
          <label for="hidrocefalia" class="control-label radio-inline col-lg-2">
            <input type="radio" name="hidrocefalia" value="si"> Sí
          </label>
          <label for="hidrocefalia" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="hidrocefalia" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="convulsiones" class="col-lg-5 control-label">Convulsiones</label>
          <label for="convulsiones" class="control-label radio-inline col-lg-2">
            <input type="radio" name="convulsiones" value="si"> Sí
          </label>
          <label for="convulsiones" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="convulsiones" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="ductus" class="col-lg-5 control-label">Ductus</label>
          <label for="ductus" class="control-label radio-inline col-lg-2">
            <input type="radio" name="ductus" value="si" id="ductus_si"> Sí
          </label>
          <label for="ductus" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="ductus" value="no" id="ductus_no"> No
          </label>
          <label for="ductus" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="ductus" value="s_i" id="ductus_s_i"> S/I
          </label>
        </div>

        <div class="form-group col-lg-6 sub-form ductus">
          <label for="cual_ductus" class="col-lg-12 control-label">¿Cuál?</label>
          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-12 margin-left">
              <input type="checkbox" value="" class="detalle_ductus">
              Clínico
            </label>
            <label for="" class="control-label txt_izq col-lg-12 margin-left">
              <input type="checkbox" value="" class="detalle_ductus">
              Ecográfico
            </label>
          </div>            
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="enterocolitis" class="col-lg-5 txt_izq control-label">Dg. Enterocolitis</label>
          <div class="col-lg-6 input-group linea">
            <input type="number" min="1" max="100" step="1" name="enterocolitis" class="form-control input-sm">
            <span class="input-group-addon" id="basic-addon2">días</span>
          </div>
        </div>  

        <div class="clearfix visible-lg-block"></div>


        <div class="form-group col-lg-6">
          <label for="ecn" class="col-lg-5 control-label">ECN 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si: Radipgrafía con neumatosis o perforación o diagnóstivo en cirugía o anatomía patológica."></span>
          </label>
          <label for="ecn" class="control-label radio-inline col-lg-2">
            <input type="radio" name="ecn" value="si"> Sí
          </label>
          <label for="ecn" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="ecn" value="no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="intestin" class="col-lg-5 control-label">Perf. intestin</label>
          <label for="intestin" class="control-label radio-inline col-lg-2">
            <input type="radio" name="intestin" value="si"> Sí
          </label>
          <label for="intestin" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="intestin" value="no"> No
          </label>
        </div>

      </div>

    </div>

    <div id="oftalmologica">
      <div class="col-lg-12">    

        <div class="form-group col-lg-6">
          <label for="previa_alta" class="col-lg-5 control-label">Evaluación previa al alta</label>
          <label for="previa_alta" class="control-label radio-inline col-lg-2">
            <input type="radio" name="previa_alta" value="si" id="previa_alta_si"> Sí
          </label>
          <label for="previa_alta" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="previa_alta" value="no" id="previa_alta_no"> No
          </label>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-10 sub-form tabla_previa_alta">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>Ojo</td>
                <td>ROP</td>
                <td>Localización 
                  <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Esquema del fondo de ojo para la clasificación de la retinopatía del prematuro."></span>
                </td>
                <td>Severidad</td>
                <td>Enf. Plus</td>
                <td>Cirugía ROP</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Izquierdo</td>
                <td>
                  <label for="rop_izq" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="rop_izq" value="si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="rop_izq" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="rop_izq" value="no" class="detalle_tabla_previa_alta"> No
                  </label>
                </td>
                <td>
                  <select name="zona_izq" class="form-control input-sm detalle_tabla_previa_alta">
                    <option value="0">Seleccione</option>
                    <option value="1">Zona I</option>
                    <option value="2">Zona II</option>
                  </select> 
                </td>
                <td>
                  <select name="severidad_izq" class="form-control input-sm detalle_tabla_previa_alta">
                    <option value="0">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select> 
                </td>
                <td>
                  <label for="plus_izq" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="plus_izq" value="si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="plus_izq" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="plus_izq" value="no" class="detalle_tabla_previa_alta"> No
                  </label>
                  <label for="plus_izq" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="plus_izq" value="s_i" class="detalle_tabla_previa_alta"> S/I
                  </label>
                </td>
                <td>
                  <label for="cirugia_izq" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="cirugia_izq" value="si" id="cirugia_izq_si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="cirugia_izq" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="cirugia_izq" value="no" id="cirugia_izq_no" class="detalle_tabla_previa_alta"> No
                  </label>
                  <label for="cirugia_izq" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="cirugia_izq" value="s_i" id="cirugia_izq_s_i" class="detalle_tabla_previa_alta"> S/I
                  </label>

                  <div class="clearfix visible-lg-block"></div>
                  
                  <div id="detalle_cirugia_izq" class="sub-form">
                    <label for="detalle_cirugia_izq" class="txt_izq control-label">¿Cuál?</label>
                    <select name="detalle_cirugia_izq" class="form-control input-sm detalle_tabla_previa_alta" id="cual_cirugia_izq">
                      <option value="0">Seleccione</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select> 
                  </div>

                </td>
              </tr>
              <tr>
                <td>Derecho</td>
                <td>
                  <label for="rop_der" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="rop_der" value="si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="rop_der" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="rop_der" value="no" class="detalle_tabla_previa_alta"> No
                  </label>
                </td>
                <td>
                  <select name="zona_der" class="form-control input-sm detalle_tabla_previa_alta">
                    <option value="0">Seleccione</option>
                    <option value="1">Zona I</option>
                    <option value="2">Zona II</option>
                  </select> 
                </td>
                <td>
                  <select name="severidad_der" class="form-control input-sm detalle_tabla_previa_alta">
                    <option value="0">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select> 
                </td>
                <td>
                  <label for="plus_der" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="plus_der" value="si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="plus_der" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="plus_der" value="no" class="detalle_tabla_previa_alta"> No
                  </label>
                  <label for="plus_der" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="plus_der" value="s_i" class="detalle_tabla_previa_alta"> S/I
                  </label>
                </td>
                <td>
                  <label for="cirugia_der" class="control-label radio-inline col-lg-3">
                    <input type="radio" name="cirugia_der" value="si" id="cirugia_der_si" class="detalle_tabla_previa_alta"> Sí
                  </label>
                  <label for="cirugia_der" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="cirugia_der" value="no" id="cirugia_der_no" class="detalle_tabla_previa_alta"> No
                  </label>
                  <label for="cirugia_der" class="control-label radio-inline col-lg-3" >
                    <input type="radio" name="cirugia_der" value="s_i" id="cirugia_der_s_i" class="detalle_tabla_previa_alta"> S/I
                  </label>

                  <div class="clearfix visible-lg-block"></div>
                  
                  <div id="detalle_cirugia_der" class="sub-form">
                    <label for="detalle_cirugia_der" class="txt_izq control-label">¿Cuál?</label>
                    <select name="detalle_cirugia_der" class="form-control input-sm detalle_tabla_previa_alta" id="cual_cirugia_der">
                      <option value="0">Seleccione</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select> 
                  </div>

                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="fondo_ojo" class="col-lg-5 control-label">1<sup>er</sup> fondo ojo</label>
          <div class="col-lg-3 input-group linea">
            <input type="number" min="1" max="100" step="1" name="fondo_ojo" class="form-control input-sm" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">días</span>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="bevacizumab" class="col-lg-5 control-label">Bevacizumab</label>
          <label for="bevacizumab" class="control-label radio-inline col-lg-2">
            <input type="radio" name="bevacizumab" value="si"> Sí
          </label>
          <label for="bevacizumab" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="bevacizumab" value="no"> No
          </label>
        </div>

      </div>
    </div>

    <div id="sepsis">
      <div class="col-lg-12">

        <div class="form-group col-lg-6">
          <label for="sepsis_precoz" class="col-lg-5 control-label">Sepsis Precoz 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si: Hemocultivo positivo en primeras 72 horas de vida."></span>
          </label>
          <label for="sepsis_precoz" class="control-label radio-inline col-lg-2">
            <input type="radio" name="sepsis_precoz" value="si" id="sepsis_precoz_si"> Sí
          </label>
          <label for="sepsis_precoz" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="sepsis_precoz" value="no" id="sepsis_precoz_no"> No
          </label>
        </div>

        <div class="form-group col-lg-6 sub-form" id="detalle_sepsis_precoz">
          <label for="germen" class="col-lg-2 control-label">Germen</label>
          <div class="col-lg-10">
              <select name="germen" class="form-control input-sm detalle_sepsis_precoz">
                <option value="0">Seleccione</option>
                <option value="1">Listeria</option>
              </select> 
            </div>

          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-8 col-lg-offset-4 margin-left">
              <input type="checkbox" value="" class="detalle_sepsis_precoz">
              Hemocultivo
            </label>
            <label for="" class="control-label txt_izq col-lg-8 col-lg-offset-4 margin-left">
              <input type="checkbox" value="" class="detalle_sepsis_precoz">
              LCR positivo
            </label>
          </div>
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group col-lg-6">
          <label for="sepsis_tardia" class="col-lg-5 control-label">Sepsis Tardía 
            <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Si: Hemocultivo positivo después de las 72 horas de vida y antibióticos por más de 5 días o menos si fallece."></span>
          </label>
          <label for="sepsis_tardia" class="control-label radio-inline col-lg-2">
            <input type="radio" name="sepsis_tardia" value="si" id="sepsis_tardia_si"> Sí
          </label>
          <label for="sepsis_tardia" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="sepsis_tardia" value="no" id="sepsis_tardia_no"> No
          </label>
        </div>
        
        <div class="clearfix visible-lg-block"></div>
        
        <div class="form-group col-lg-6">
          <div class="form-group" id="num_sepsis">
            <label for="num_sepsis" class="col-lg-5 txt_izq control-label">N° de sepsis clínicas 
              <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Cuadro clínico de spesis, pero con cultivo negativo y tratado por más de 5 días o menos si fallece."></span>
            </label>
            <div class="col-lg-3">
              <input type="number" min="1" max="99" step="1" name="num_sepsis" class="form-control input-sm">
            </div>
          </div>  
        </div>

        <div class="clearfix visible-lg-block"></div>

        <div class="form-group sub-form" id="detalle_sepsis_tardia">
          <table class="table table-bordered" id="tabla_sepsis">
            <thead>
              <tr>
                <td class="col-lg-1"></td>
                <td class="col-lg-2">Edad</td>
                <td class="col-lg-2">Germen</td>
                <td class="col-lg-4"></td>
                <td class="col-lg-3"></td>
                <td class="col-lg-1"></td>
              </tr>
            </thead>
            <tbody>
              <tr class="fila_oculta">
                <td></td>
                <td>
                  <div class="input-group linea">
                    <input type="number" min="1" max="999" step="1" name="detalle_sepsis_tardia_dias" class="form-control input-sm detalle_sepsis_tardia" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">días</span>
                  </div>
                </td>
                  
                <td>
                  <select name="detalle_sepsis_tardia_germen" class="form-control input-sm detalle_sepsis_tardia detalle_sepsis_tardia_germen" id="">
                    <option value="0">Seleccione</option>
                    <option value="1">Listeria</option>
                    <option value="otro">Otro</option>
                  </select> 
                </td>

                <td>
                  <div class="sub-form detalle_sepsis_tardia_otro">
                    <label for="detalle_sepsis_tardia_otro" class="txt_izq control-label">Si es otro, cuál?</label>
                  </div>
                  <div class=" sub-form detalle_sepsis_tardia_otro">
                    <input type="text" name="detalle_sepsis_tardia_otro" class="form-control input-sm detalle_sepsis_tardia_otro">
                  </div>
                </td>
                <td>
                  <label for="sepsis_tardia_tipo" class="control-label radio-inline col-lg-6" >
                    <input type="radio" name="sepsis_tardia_tipo" value="hemocultivo" id="sepsis_tardia_hemocultivo"> Hemocultivo
                    <input type="radio" name="sepsis_tardia_tipo" value="lcr" id="sepsis_tardia_lcr"> LCR positivo
                  </label>
                </td>
                <td><button type="button" class="btn btn-danger btn-xs eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
              </tr>

              
            </tbody>
          </table>

          <div class="col-lg-2">
            <button type="button" class="btn btn-info" id="agregar_tabla_sepsis">Agregar Sepsis</button>
          </div>
        </div>

      </div>
    </div>

    <div id="auditivo">
      <div class="col-lg-6">
        <div class="form-group col-lg-12">

          <label for="" class="col-lg-4 control-label">Pesquisa antes del alta</label>
          <label for="" class="control-label radio-inline col-lg-2">
            <input type="radio" name="pesquisa" value="pesquisa_si" class="" id="pesquisa_si"> Sí
          </label>
          <label for="" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="pesquisa" value="pesquisa_no" class="" id="pesquisa_no"> No
          </label>

        </div>
      </div>
        <div class="col-lg-6" id="tabla_auditivo">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td colspan="3"><h5><b>Evaluación al alta</b></h5></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-lg-1"><input type="checkbox" name="peat_automatizados" value="peat_automatizados" class="form-check-input check-auditivo" id="peat_automatizados"></td>
                <td class="col-lg-4">Potenciales Evocados del Tronco Cerebral (PEAT) Automatizados
                </td>
                <td class="col-lg-2">
                  <div id="peat_automatizados_cel">
                    ¿Normal?<br>
                    <label for="" class="control-label radio-inline col-lg-1">
                      <input type="radio" name="peat_automatizados_normal" value="peat_automatizados_si" class="check-auditivo"> Sí
                    </label>
                    <label for="" class="control-label radio-inline col-lg-1" >
                      <input type="radio" name="peat_automatizados_normal" value="peat_automatizados_no" class="check-auditivo"> No
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col-lg-1"><input type="checkbox" name="peat_extendidos" value="peat_extendidos" class="form-check-input check-auditivo" id="peat_extendidos"></td>
                <td class="col-lg-4">Potenciales Evocados del Tronco Cerebral (PEAT) Extendidos
                </td>
                <td class="col-lg-2">

                  <div id="peat_extendidos_cel">
                    ¿Normal?<br>
                    <label for="" class="control-label radio-inline col-lg-1">
                      <input type="radio" name="peat_extendidos_normal" value="peat_extendidos_si" class="check-auditivo"> Sí
                    </label>
                    <label for="" class="control-label radio-inline col-lg-1" >
                      <input type="radio" name="peat_extendidos_normal" value="peat_extendidos_no" class="check-auditivo"> No
                    </label>
                  </div>
                  
                </td>
              </tr>
              <tr>
                <td class="col-lg-1"><input type="checkbox" name="emisiones" value="emisiones" class="form-check-input check-auditivo" id="emisiones"></td>
                <td class="col-lg-4">Emisiones Otoacústicas
                </td>
                <td class="col-lg-2" >
                  <div id="emisiones_cel">
                    ¿Normal?<br>
                    <label for="" class="control-label radio-inline col-lg-1">
                      <input type="radio" name="emisiones_normal" value="emisiones_si" class="check-auditivo"> Sí
                    </label>
                    <label for="" class="control-label radio-inline col-lg-1" >
                      <input type="radio" name="emisiones_normal" value="emisiones_no" class="check-auditivo"> No
                    </label>
                  </div>
                  
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>       
  </div>
</div>

