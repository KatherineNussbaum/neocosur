<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Antecedentes Familiares Control Actual</h4>

    <div class="col-lg-6">

      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Quién aporta la información</label>
        <div class="col-lg-6">
          <select name="aporta_informacion" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Madre</option>
            <option value="2">Padre</option>
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Cuidador responsable</label>
        <div class="col-lg-6">
          <select name="cuidador_responsable" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Madre</option>
            <option value="2">Padre</option>
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-lg-6 control-label">País de residencia</label>
        <div class="col-lg-6">
          <select name="pais_residencia" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Chile</option>
            <option value="2">Argentina</option>
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Ciudad</label>
        <div class="col-lg-6">
          <select name="ciudad" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Chile</option>
            <option value="2">Argentina</option>
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label for="paterno" class="col-lg-6 control-label">Comuna o Barrio</label>
        <div class="col-lg-6">
          <input type="text" name="comuna" class="form-control input-sm">
        </div>
      </div>

      <div class="form-group">
        <label for="paterno" class="col-lg-6 control-label">N° de niños (<18 años) del grupo familiar</label>
        <div class="col-lg-6">
          <input type="number" min="0" step="1" name="comuna" class="form-control input-sm">
        </div>
      </div>


    </div>
                               
    <div class="col-lg-6">
      <table>
        <thead>
          <tr>
            <td colspan="2">
              <label class="control-label">Familiar Nivel educacional</label>
            </td>
            <td>
              <label class="control-label">Ocupación principal</label>
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="col-lg-2">Madre</td>
            <td class="col-lg-5">
              <select name="nivel_madre" class="form-control input-sm">
                <option value="0"></option>
                <option value="1">Analfabeta</option>
                <option value="2">Ed. Básica Incompleta</option>
              </select>
            </td>
            <td class="col-lg-5">
              <select name="ocupacion_madre" class="form-control input-sm">
                <option value="0"></option>
                <option value="1">Profesional, pequeño empresario</option>
                <option value="2">Oficio independiente</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class="col-lg-2">Padre</td>
            <td class="col-lg-5">
              <select name="nivel_padre" class="form-control input-sm">
                <option value="0"></option>
                <option value="1">Analfabeta</option>
                <option value="2">Ed. Básica Incompleta</option>
              </select>
            </td>
            <td class="col-lg-5">
              <select name="ocupacion_padre" class="form-control input-sm">
                <option value="0"></option>
                <option value="1">Profesional, pequeño empresario</option>
                <option value="2">Oficio independiente</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>