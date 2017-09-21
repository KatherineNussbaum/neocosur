<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="sec_respiratorio"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Respiratorio</button>

      <button class="btn btn-default subtitulo" type="button" id="sec_digestivo"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" > </span> Digestivo </button>

      <div class="row" id="sec_respiratorio">

        <div class="col-lg-12 form-group">
          <label class="control-label">Requerimientos previos</label> 
        </div>
        
        <div class="form-group col-lg-6">

          <label class="col-lg-5 control-label">O<sub>2</sub> a las 36 sem. EC</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="o2_36_sem" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="o2_36_sem" value="no"> No
            </label>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">O<sub>2</sub> al alta</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="o2_alta" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="o2_alta" value="no"> No
            </label>
          </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-6" id="sec_diureticos">
          <label class="control-label col-lg-5">Diuréticos</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="diureticos" value="si"> Sí
            </label>
            <label for="" class="control-label radio-inline col-lg-2" >
              <input type="radio" name="diureticos" value="no"> No
            </label>
          </div>
        </div>

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
              <input type="radio" name="ostomia" value="si"> Sí
            </label>

            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="ostomia" value="no"> No
            </label>
            
          </div>
        </div>

        <div id="sec_ostomia" class="col-lg-6">

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
                  <input type="radio" name="reconstitucion" value="si"> Sí
                </label>

                <label class="control-label radio-inline col-lg-2">
                  <input type="radio" name="reconstitucion" value="no"> No
                </label>
              </div>
            </div>

            <div class="form-group row" id="sec_fecha_reconstitucion">
              <label class="control-label col-lg-5">Fecha</label>
              <div class="col-lg-7">
                <input type="date" name="fecha_reconstitucion" class="form-control">
              </div>
            </div>
        </div>

      </div>


      <div class="row" id="sec_renal">

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Requiere Profilaxis Antibiótica</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="profilaxis" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="profilaxis" value="no"> No
            </label>
          </div>
        </div>

        <div class="form-group col-lg-6" id="sec_profilaxis">
          <label class="col-lg-5 control-label">Fecha inicio</label>
          <div class="col-lg-7">
            <input type="date" name="fecha_inicio_profilaxis" class="form-control">
          </div>

          <label class="col-lg-5 control-label">Fecha inicio</label>
          <div class="col-lg-7">
            <input type="date" name="fecha_suspension_profilaxis" class="form-control">
          </div>

        </div>

        <div class="clearfix"></div>

        <div class="form-group col-lg-6" >
          <label class="col-lg-5 control-label">Estudio imágenes </label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="imagenes" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2" >
              <input type="radio" name="imagenes" value="no"> No
            </label>
          </div>
        </div>

        <div class="form-group" id="sec_imagenes">

          <table>
            <thead>
              <tr style="vertical-align: top">
                <td class="col-lg-3"><label class="control-label">Estudio</label></td>
                <td class="col-lg-6"><label class="control-label">Alteración</label></td>
              </tr>
            </thead>
            <tbody>

              <tr style="vertical-align: top">
                <td class="form-group">
                  <label class="control-label">
                    <input type="checkbox" name="eco_renal"> Eco renal
                  </label>
                </td>
                <td>
                  <div id="sec_eco_renal">
                    <div class="col-lg-12 form-group">
                      <label class="control-label radio-inline">
                        <input type="radio" name="eco_renal_alteracion" value="si"> Sí
                      </label>
                      <label class="control-label radio-inline" >
                        <input type="radio" name="eco_renal_alteracion" value="no"> No
                      </label>
                    </div>

                    <div id="sec_describa_eco_renal" class="form-group">
                      <label class="control-label col-lg-12">Describa</label>
                      <textarea class="form-control col-lg-12" rows="3" name="describa_eco_renal"></textarea>
                    </div>
                    
            
                  </div>
                </td>
              </tr>

              <tr style="vertical-align: top">
                <td></td>
                <td></td>
              </tr>

              <tr style="vertical-align: top">
                <td></td>
                <td></td>
              </tr>

            </tbody>
          </table>

        </div>

        <div class="clearfix"></div>

        <div class="form-group col-lg-6">
          <label class="col-lg-5 control-label">Control de presión arterial</label>
          <div class="col-lg-7">
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="presion" value="si"> Sí
            </label>
            <label class="control-label radio-inline col-lg-2">
              <input type="radio" name="presion" value="no"> No
            </label>
          </div>
        </div>

      </div>



    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>