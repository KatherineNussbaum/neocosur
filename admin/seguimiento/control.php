<div class="ficha panel panel-default">
  <div class="panel-body">
  <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Datos del Control</h4>
    <div class="col-lg-7">
      <div class="form-group">
        <label for="centro" class="col-lg-5 control-label">Centro de Control</label>
        <div class="col-lg-7">
          <input type="text" name="centro" class="form-control input-sm" contenteditable="false" disabled >
        </div>
      </div>
                              
      <div class="form-group">
        <label for="servicio" class="col-lg-5 control-label">Servicio</label>
        <div class="col-lg-7">
          <input type="text" name="servicio" class="form-control input-sm" contenteditable="false" disabled>
        </div>
      </div>
                               
      <div class="form-group">
        <label for="fecha_control" class="col-lg-5 control-label">Fecha Control</label>
        <div class="col-lg-7">
          <input type="date" name="fecha_control" class="form-control input-sm">
        </div>
      </div>
                               
      <div class="form-group">
        <label for="edad" class="col-lg-5 control-label">Edad corregida (EC)</label>
        <div class="col-lg-3 input-group linea">
          <input type="number" min="0" step="1" name="anio" class="form-control input-sm" aria-describedby="basic-addon2">
           <span class="input-group-addon" id="basic-addon2">años</span>
          </div>

          <div class="col-lg-3 input-group linea">
            <input type="number" min="0" max="11" step="1" name="meses" class="form-control input-sm" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">meses</span>
          </div>
      </div>

      <div class="form-group">
        <label for="edad2" class="col-lg-5 control-label">Edad cronológica</label>
        <div class="col-lg-3 input-group linea">
          <input type="number" min="0" step="1" name="anio2" class="form-control input-sm" aria-describedby="basic-addon2">
           <span class="input-group-addon" id="basic-addon2">años</span>
          </div>

          <div class="col-lg-3 input-group linea">
            <input type="number" min="0" max="11" step="1" name="meses2" class="form-control input-sm" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">meses</span>
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