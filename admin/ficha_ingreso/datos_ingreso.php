<div class="ficha panel panel-default">
  <div class="panel-body">
  <form>
    <h4><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span> Datos del Ingreso</h4>

    <div class="col-lg-6">
    
      <div class="form-group">
        <label for="rut_dni" class="col-lg-5 control-label">Rut / DNI</label>
        <div class="col-lg-7">
          <input type="text" name="rut_dni" class="form-control input-sm">
        </div>
      </div>
                              
      <div class="form-group">
        <label for="nombres" class="col-lg-5 control-label">Nombres</label>
        <div class="col-lg-7">
          <input type="text" name="nombres" class="form-control input-sm">
        </div>
      </div>
                               
      <div class="form-group">
        <label for="paterno" class="col-lg-5 control-label">Apellido Paterno</label>
        <div class="col-lg-7">
          <input type="text" name="paterno" class="form-control input-sm">
        </div>
      </div>
                               
      <div class="form-group">
        <label for="materno" class="col-lg-5 control-label">Apellido Materno</label>
        <div class="col-lg-7">
          <input type="text" name="materno" class="form-control input-sm">
        </div>
      </div>
    </div>
                               
    <div class="col-lg-6">
      <div class="form-group">
        <label for="id" class="col-lg-7 control-label">Identificador Neocosur</label>
        <div class="col-lg-5">
        <select name="identificador" class="form-control input-sm">
          <option value="0">Seleccione</option>
          <option value="1">1</option>
        </select>
        </div>
      </div>
                    
      <div class="form-group">
        <label for="num_ficha" class="col-lg-7 control-label">N° de ficha médica:</label>
        <div class="col-lg-5">
        <select name="num_ficha" class="form-control input-sm">
          <option value="0">Seleccione</option>
          <option value="1">1</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="edad_gest" class="col-lg-7 control-label">Edad gest. FUR:</label>
        <div class="col-lg-5">
          <input type="number" min="0" name="edad_gest" class="form-control input-sm" >
        </div>
      </div>
                               
      <div class="form-group">
        <label for="fecha_nacimiento" class="col-lg-7 control-label">Fecha de Nacimiento</label>
        <div class="col-lg-5">
          <input type="date" name="fecha_nacimiento" class="form-control input-sm">
        </div>
      </div>                
    </div>

    <div class=" col-lg-offset-10 col-lg-2">
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
    </form>       
  </div>
</div>