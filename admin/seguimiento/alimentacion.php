<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Alimentación</h4>

    <div class="col-lg-7">
      <p class="col-lg-12">* Considerar EC hasta los 2 años y luego edad cronológica </p>
      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Alimentación láctea</label>
        <div class="col-lg-6">
          <select name="lactea" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Leche Materna Exclusiva (>= 80%)</option>
          </select> 
        </div>
      </div>
                              
      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Fórmula utilizada</label>
        <div class="col-lg-6">
          <select name="formula" class="form-control input-sm">
            <option value="0"></option>
            <option value="1">Formula de Prematuro</option>
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-lg-6 control-label">Edad introducción de sólidos</label>
        <div class="col-lg-3">
          <div class="input-group">
            <input type="number" min="0" step="1" name="anios" class="form-control input-sm">
            <div class="input-group-addon input-sm">años</div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="input-group">
            <input type="number" min="0" max="11" step="1" name="meses" class="form-control input-sm">
            <div class="input-group-addon input-sm">meses</div>
          </div>
        </div>

      </div>


    </div>
                               
    <div class="col-lg-5">

    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>   
  </form>      
  </div>
</div>