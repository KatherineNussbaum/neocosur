<div class="ficha panel panel-default">
  <div class="panel-body">
    <form>
      <button class="btn btn-success active subtitulo" type="button" id="sec_datos_ingreso"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span> Datos del Ingreso</button>

      <div class="row">

        <div class="col-lg-6">
                               
          <div class="form-group">
            <label for="nombres" class="col-lg-5 control-label">Nombres</label>
            <div class="col-lg-7">
              <input type="text" name="nombres" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>
                                   
          <div class="form-group">
            <label for="paterno" class="col-lg-5 control-label">Apellido Paterno</label>
            <div class="col-lg-7">
              <input type="text" name="paterno" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>
                                   
          <div class="form-group">
            <label for="materno" class="col-lg-5 control-label">Apellido Materno</label>
            <div class="col-lg-7">
              <input type="text" name="materno" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="centro" class="col-lg-5 control-label">Centro de Origen</label>
            <div class="col-lg-7">
              <input type="text" name="centro" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="servicio" class="col-lg-5 control-label">Servicio</label>
            <div class="col-lg-7">
              <input type="text" name="servicio" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="fecha_ingreso" class="col-lg-5 control-label">Fecha Ingreso Programa</label>
            <div class="col-lg-7">
              <input type="date" name="fecha_ingreso" class="form-control input-sm">
            </div>
          </div>

        </div>
                                   
        <div class="col-lg-6">
          <div class="form-group">
            <label for="id" class="col-lg-7 control-label">Identificador Neocosur <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="Código numérico que el sistema otorga a un paciente y que permite identificarlo en la base de datos."></span></label>
            <div class="col-lg-5">
              <input type="text" name="id" class="form-control input-sm" value="104" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="edad_gest" class="col-lg-7 control-label">Edad gest. FUR:</label>
            <div class="col-lg-5">
              <input type="number" min="0" name="edad_gest" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>
                                   
          <div class="form-group">
            <label for="fecha_nacimiento" class="col-lg-7 control-label">Fecha de Nacimiento</label>
            <div class="col-lg-5">
              <input type="date" name="fecha_nacimiento" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="genero" class="col-lg-7 control-label">Género</label>
            <div class="col-lg-5">
              <input type="text" name="genero" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="40_sem" class="col-lg-7 control-label">Fecha 40 sem. EG <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-html="true" aria-hidden="true" title="La mejor estimación según fecha de última menstruación, ecografía precoz o examen neonatal."></span></label>
            <div class="col-lg-5">
              <input type="date" name="40_sem" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="multiple" class="col-lg-7 control-label">Múltiple</label>
            <div class="col-lg-5">
              <input type="text" name="multiple" class="form-control input-sm" contenteditable="false" disabled>
            </div>
          </div>

        </div>

      </div>
      

      <div class=" col-lg-offset-10 col-lg-2">
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </form>
  </div>
</div>