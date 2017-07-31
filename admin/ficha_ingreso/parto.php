<div class="ficha panel panel-default">
  <div class="panel-body">
  <form>
    <button class="btn btn-success active subtitulo" type="button" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Antecedentes del Parto</button>

    <div class="col-lg-12">

      <div class="form-group col-lg-6">
        <label for="oxigeno" class="col-lg-5 control-label">Oxígeno flujo libre</label>
        <label for="oxigeno" class="control-label radio-inline col-lg-2">
          <input type="radio" name="oxigeno" value="si"> Sí
        </label>
        <label for="oxigeno" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="oxigeno" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group col-lg-6">
        <label for="vent_masc" class="col-lg-5 control-label">Vent. masc.</label>
        <label for="vent_masc" class="control-label radio-inline col-lg-2">
          <input type="radio" name="vent_masc" value="si"> Sí
        </label>
        <label for="vent_masc" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="vent_masc" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group col-lg-6">
        <label for="intubacion" class="col-lg-5 control-label">Intubación</label>
        <label for="intubacion" class="control-label radio-inline col-lg-2">
          <input type="radio" name="intubacion" value="si"> Sí
        </label>
        <label for="intubacion" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="intubacion" value="no"> No
        </label>
      </div>
      
      <div class="clearfix visible-lg-block"></div>

      <div class="form-group col-lg-6">
        <label for="masaje" class="col-lg-5 control-label">Masaje card.</label>
        <label for="masaje" class="control-label radio-inline col-lg-2">
          <input type="radio" name="masaje" value="si"> Sí
        </label>
        <label for="masaje" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="masaje" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group col-lg-6">
        <label for="adrenalina" class="col-lg-5 control-label">Adrenalina</label>
        <label for="adrenalina" class="control-label radio-inline col-lg-2">
          <input type="radio" name="adrenalina" value="si"> Sí
        </label>
        <label for="adrenalina" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="adrenalina" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block" ></div>

      <div class="form-group col-lg-6">
        <label for="malformacion" class="col-lg-5 control-label">Malformación congénita mayor</label>
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
      
      <div class="form-group col-lg-6 sub-form compromete">
        <label for="compromete" class="control-label radio-inline col-lg-5">
          <input type="radio" name="compromete" value="no" id="compromete_no"> No compromete la vida
        </label>
        <label for="compromete" class="control-label radio-inline col-lg-5" >
          <input type="radio" name="compromete"  value="si" id="compromete_si"> Compromete la vida
        </label>
      
        <div class="form-group sub-form detalle_compromete">
             
          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" id="sistema_nervioso" name="sistema_nervioso" class="detalle_compromete" value="">
              Defectos del Sistema Nervioso Central
            </label>

            <div class="col-lg-offset-1 sub-form" id="detalle_sistema_nervioso">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="anecefalia" class="detalle_sistema_nervioso" value="anecefalia">
                Anencefalia
              </label>
          
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="mielo" class="detalle_sistema_nervioso" value="mielo">
                Mielo-meningocele
              </label>

              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="hidranencefalia" class="detalle_sistema_nervioso" value="hidranencefalia">
                Hidranencefalia
              </label>

              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="hidrocefalia" class="detalle_sistema_nervioso" value="hidrocefalia">
                Hidrocefalia Congénita
              </label>

              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="holo" class="detalle_sistema_nervioso" value="holo">
                Holo-prosencefalia
              </label>
            </div>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="cardiacos" class="detalle_compromete" id="cardiacos" value="">
              Defectos cardíacos
            </label>

            <div class="col-lg-offset-1 sub-form" id="detalle_defectos_cardiacos">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="tronco" class="detalle_defectos_cardiacos" value="tronco">
                Tronco arterioso
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="transposicion" class="detalle_defectos_cardiacos" value="transposicion">
                Transposición de los grandes vasos
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="fallot" class="detalle_defectos_cardiacos" value="fallot">
                Tetralogía de Fallot
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="ventriculo_unico" class="detalle_defectos_cardiacos" value="ventriculo_unico">
                Ventrículo único
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="doble_ventriculo_derecho" class="detalle_defectos_cardiacos" value="doble_ventriculo_derecho">
                Doble salida de ventrículo derecho
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="canal_atrio" class="detalle_defectos_cardiacos" value="canal_atrio">
                Canal atrio-ventricular completo
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_pulmonar" class="detalle_defectos_cardiacos" value="atresia_pulmonar">
                Atresia pulmonar
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_tricuspide" class="detalle_defectos_cardiacos" value="atresia_tricuspide">
                Artesia tricuspíde
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="hipoplasia" class="detalle_defectos_cardiacos" value="hipoplasia">
                Hipoplasia de corazón izquierdo
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="interrupcion" class="detalle_defectos_cardiacos" value="interrupcion">
                Interrupción del arco aórtico
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="anomalia_retorno" class="detalle_defectos_cardiacos" value="anomalia_retorno">
                Anomalía total del retorno venoso pulmonar
              </label>
            </div>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="gastrointestinales" class="detalle_compromete" id="defectos_gastrointestinal" value="">
              Defectos gastrointestinales
            </label>

            <div class="col-lg-offset-1 sub-form" id="detalle_defectos_gastrointestinal">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="fisura_paladar" class="detalle_defectos_gastrointestinal" value="fisura_paladar">
                Fisora de paladar
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="fistula" class="detalle_defectos_gastrointestinal" value="fistula">
                Fístula Tranqueo-Esofágica
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_duodenal" class="detalle_defectos_gastrointestinal" value="atresia_duodenal">
                Atresia Duodenal
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_yeyunal" class="detalle_defectos_gastrointestinal" value="atresia_yeyunal">
                Atresia Yeyunal
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_ileal" class="detalle_defectos_gastrointestinal" value="atresia_ileal">
                Atresia Ileal
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="atresia_intestino" class="detalle_defectos_gastrointestinal" value="atresia_intestino">
                Atresia de intestino grueso y recto
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="ano_imperforado" class="detalle_defectos_gastrointestinal" value="ano_imperforado">
                Ano imperforado
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="onfalocele" class="detalle_defectos_gastrointestinal" value="onfalocele">
                Onfalocele
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="gastrosquisis" class="detalle_defectos_gastrointestinal" value="gastrosquisis">
                Gastrosquisis
              </label>
            </div>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="genitourinarios" class="detalle_compromete" id="detalle_compromete" value="">
              Defectos genitourinarios
            </label>
            <div class="col-lg-offset-1 sub-form" id="detalle_defectos_genitourinarios">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="agenesia" class="detalle_defectos_genitourinarios" value="agenesia">
                Agenesia Renal Bilateral
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="renal" class="detalle_defectos_genitourinarios" value="renal">
                Displasia Renal o Riñon poliquístico / multi-quístico bilateral
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="uropatia" class="detalle_defectos_genitourinarios" value="uropatia">
                Uropatía obstructiva con Hidronefrosis congénita
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="ectrofia_vesical" class="detalle_defectos_genitourinarios" value="ectrofia_vesical">
                Ectrofia vesical
              </label>
            </div>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="cromosomica" id="cromosomica" class="detalle_compromete" value="">
              Anomalías cromosómicas
            </label>

            <div class="col-lg-offset-1 sub-form" id="detalle_defectos_cromosomicas">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="trisomia_13" class="detalle_defectos_cromosomicas" value="trisomia_13">
                Trismomía 13
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="trisomia_18" class="detalle_defectos_cromosomicas" value="trisomia_18">
                Trisomía 18
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="trisomia_21" class="detalle_defectos_cromosomicas" value="trisomia_21">
                Trisomía 21
              </label>
            </div>

            <label for="" class="control-label txt_izq col-lg-12">
              <input type="checkbox" name="otro_defecto" id="otro_defecto" class="detalle_compromete" value="">
              Otros defectos
            </label>

            <div class="col-lg-offset-1 sub-form" id="detalle_defectos_otros">
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="displasia_esquelética" class="detalle_defectos_otros" value="displasia_esquelética">
                Displasia esquelética
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="hernia" class="detalle_defectos_otros" value="hernia">
                Hernia diafragmática congénita
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="hidrops" class="detalle_defectos_otros" value="hidrops">
                Hidrops fetal
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="potter" class="detalle_defectos_otros" value="potter">
                Secuencia de Potter
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="errores_congenitas" class="detalle_defectos_otros" value="errores_congenitas">
                Errores congénitos del metabolismo
              </label>
              <label for="" class="control-label txt_izq col-lg-12">
                <input type="checkbox" name="distrofia_miotonica" class="detalle_defectos_otros" value="distrofia_miotonica">
                Distrofia miotónica
              </label>
            </div>


            <div id="cual_defecto" class="sub-form">
              <label for="cual_defecto" class="col-lg-3 txt_izq control-label">Si es otro, cuál?</label>
                <div class="col-lg-9">
                  <input type="text" name="cual_defecto" class="form-control input-sm">
                </div>
              </div>  
            </div>

            <label for="obs_malformaciones" class="col-lg-12 control-label">
              Observaciones
            </label>
            <div>
              <textarea class="form-control" name="obs_malformaciones" rows="3"></textarea>
            </div>
          </div>
        </div>
      
      <div class="clearfix visible-lg-block" ></div>    

      <div class="form-group col-lg-6">
        <label for="score" class="col-lg-5 control-label">Score Neocosur</label>
        <div class="col-lg-7">
          <input type="number" min="0" max="10" step="1" name="score" class="form-control input-sm" >
        </div>
      </div>

      <div class="clearfix visible-lg-block" ></div>

      <div class="form-group col-lg-6">
        <label for="fallece" class="col-lg-5 control-label">Fallece en Sala de Parto</label>
        <label for="fallece" class="control-label radio-inline col-lg-2">
          <input type="radio" name="fallece" value="si" id="fallece_sala_si"> Sí
        </label>
        <label for="fallece" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="fallece" value="no" id="fallece_sala_no"> No
        </label>
      </div>
    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>       
  </div>
</div>