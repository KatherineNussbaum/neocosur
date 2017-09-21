<div class="ficha panel panel-default">
  <div class="panel-body">
  <form>
    <button class="btn btn-success active subtitulo" type="button" id="sec_datos_control"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Datos del Control</button>

    <div class="row">
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
          <label for="edad" class="col-lg-5 control-label">Edad corregida (EC) <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="La edad corregida se base en la edad qie el niño tendría si hubiera nacido en la fecha prevista de parto. <br/> El sistema calcula la EC del niño en base a la fecha de nacimiento, la edad gestiacional al momento de nacer y la fecha en que se realiza el control de seguimiento."></span></label>
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
        <a class="btn btn-default" href="cronograma_seguimiento.php" role="button" target="_blank"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Ver Cronograma de Seguimiento</a>
      </div>
    </div>
    
    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>       
  </div>
</div>