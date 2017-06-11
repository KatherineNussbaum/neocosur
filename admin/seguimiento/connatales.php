<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Antecedentes Connatales</h4>

    <div class="col-lg-6">

      <div class="form-group">
        <label for="paridad" class="col-lg-6 control-label">Paridad</label>
        <div class="col-lg-6">
          <select name="paridad" class="form-control input-sm">
            <option value="0">0</option>
            <option value="1">1</option>
          </select> 
        </div>
      </div>
                              
      <div class="form-group">
        <label for="nutricional" class="col-lg-6 control-label">Calificación estado nutricional</label>
        <div class="col-lg-6">
          <select name="nutricional" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Pequeño para ....</option>
            <option value="2">Otro ...</option>
          </select> 
        </div>
      </div>

      <div class="col-lg-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th colspan="2">Visualizar curvas</th>
            </tr> 
          </thead>
          <tbody> 
            <tr> 
              <th>Datos</th> 
              <td><a href="#"> Documento 1.... </a></td> 
            </tr> 
            <tr>
              <th>Datos</th> 
              <td><a href="#"> Documento 2.... </a></td> 
            </tr>
          </tbody>
        </table>
      </div>

    </div>
                               
    <div class="col-lg-6">
      <div class="form-group col-lg-7">
          <label for="malformacion" class="col-lg-12 control-label">Malformación cognitiva mayor</label>
          <label for="malformacion" class="control-label radio-inline col-lg-offset-2 col-lg-2">
            <input type="radio" name="malformacion" value="si" id="malformacion_si"> Sí
          </label>
          <label for="malformacion" class="control-label radio-inline col-lg-2" >
            <input type="radio" name="malformacion"  value="no" id="malformacion_no"> No
          </label>
        </div>

        <div class="form-group sub-form col-lg-11 col-lg-offset-1 malformaciones">
          
          <div class="checkbox">
            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Defectos del Sistema Nervioso Central
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Defectos cardíacos
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Defectos gastrointestinales
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Defectos genitourinarios
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Anomalías cromosómicas
            </label>

            <label for="" class="control-label txt_izq col-lg-12">
              <input name="malformaciones" type="checkbox" value="">
              Otros defectos
            </label>

          </div>

          <label for="obs_malformaciones" class="col-lg-1 control-label">
            Observaciones
          </label>
          <div>
              <textarea name="obs_malformaciones" rows="5" class="col-lg-12"></textarea>
          </div>
        </div>
    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>