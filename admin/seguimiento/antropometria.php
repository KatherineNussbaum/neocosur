<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Antropometría</h4>

    <div class="col-lg-8">

      <div class="form-group">
        <label class="control-label col-lg-12">Antropometría control actual</label>

        <table cellpadding="3" cellspacing="3">
          <thead>
            <tr>
              <td class="col-lg-3"><label for="" class="col-lg-2 control-label">Peso</label></td>
              <td class="col-lg-3"><label for="" class="col-lg-2 control-label">Talla</label></td>
              <td class="col-lg-3"><label for="" class="col-lg-2 control-label">Cir. Craneana</label></td>
              <td class="col-lg-3"><label for="" class="col-lg-2 control-label">IMC</label></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-lg-3">
                <div class="input-group">
                  <input type="number" min="0" step="1" name="peso" class="form-control input-sm">
                  <div class="input-group-addon input-sm">gr.</div>
                </div>
              </td>

              <td class="col-lg-3">
                <div class="input-group">
                  <input type="number" min="0" step="1" name="talla" class="form-control input-sm">
                  <div class="input-group-addon input-sm">cm</div>
                </div>
              </td>

              <td class="col-lg-3">
                <div class="input-group">
                  <input type="number" min="0" step="1" name="circunferencia" class="form-control input-sm">
                  <div class="input-group-addon input-sm">cm</div>
                </div>
              </td>

              <td class="col-lg-3">
                <div class="input-group">
                  <input type="number" min="0" step="1" name="imc" class="form-control input-sm">
                </div>
              </td>

            </tr>
          </tbody>
        </table>
      </div>

      <div class="clearfix"></div>

      <div class="form-group">
        <label for="" class="col-lg-12 control-label">Estado nutricional según OMS</label>
        <div class="col-lg-6">
         <select name="estad_nutricional" class="form-control input-sm">
            <option value="0">Seleccione</option>
            <option value="1">Eutrofico</option>
          </select> 
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="form-group checkbox col-lg-12">

        <label for="" class="control-label txt_izq col-lg-12">
          <input name="talla_baja" type="checkbox" value="">
          Talla Baja
        </label>
        <label for="" class="control-label txt_izq col-lg-12">
          <input name="Microcefalia" type="checkbox" value="">
          Microcefalia
        </label>
        <label for="" class="control-label txt_izq col-lg-12">
          <input name="Macrocefalia" type="checkbox" value="">
          Macrocefalia
        </label>
      </div>

      <div class="clearfix"></div>

      <div class="form-group">
        <label class="control-label col-lg-12">Registro antropométrico</label>
        <a href="" class="btn btn-default col-lg-3" rol="button">Ver Registro Histórico</a>
        <p class="col-lg-12">* Para que los datos del control actual aparezcan en el regstro histórico, grabe los datos de esta sección.</p>
      </div>

    </div>

           
    <div class="col-lg-4">

    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>