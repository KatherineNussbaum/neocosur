<div class="ficha panel panel-default">
  <div class="panel-body">
  <form>
    <h4> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Antecedentes del Parto</h4>

    <div class="col-lg-6">
    
      <div class="form-group">
        <label for="genero" class="col-lg-5 control-label">Género</label>
        <div class="col-lg-7">
          <select name="genero" class="form-control input-sm">
            <option value="0">Selecciones</option>
            <option value="1">Femenino</option>
          </select> 
        </div>
      </div>
      
      <div class="form-group">
        <label for="presentacion" class="col-lg-5 control-label">Presentación</label>
        <div class="col-lg-7">
          <select name="presentacion" class="form-control input-sm">
            <option value="0">Selecciones</option>
            <option value="1">Cefálica</option>
          </select> 
        </div>
      </div>                      
      
      <div class="form-group">
        <label for="tipo_parto" class="col-lg-5 control-label">Tipo de parto</label>
        <div class="col-lg-7">
          <select name="tipoParto" class="form-control input-sm">
            <option value="0">Selecciones</option>
            <option value="1">Espontánea</option>
          </select> 
        </div>
      </div> 
                    
      <div class="form-group">
        <label for="apgar1" class="col-lg-5 control-label">Apgar 1</label>
        <div class="col-lg-5">
          <input type="number" min="0" max="10" step="1" name="apgar1" class="form-control input-sm" >
        </div>
      </div>

      <div class="form-group">
        <label for="apgar5" class="col-lg-5 control-label">Apgar 5</label>
        <div class="col-lg-5">
          <input type="number" min="0" max="10" step="1" name="apgar5" class="form-control input-sm" >
        </div>
      </div>
      
      <div class="form-group">
        <label for="peso" class="col-lg-5 control-label">Peso nacimiento</label>            
        <div class="col-lg-5 input-group linea">
          <input type="number" min="400" max="1500" step="1" name="peso" class="form-control input-sm" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">g.</span>
        </div>
      </div>

      <div class="form-group">
        <label for="talla" class="col-lg-5 control-label">Talla</label>            
        <div class="col-lg-5 input-group linea">
          <input type="number" min="0" step="1" name="talla" class="form-control input-sm" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">cm.</span>
        </div>
      </div>

      <div class="form-group">
        <label for="craneo" class="col-lg-5 control-label">Cir. cráneo</label>            
        <div class="col-lg-5 input-group linea">
          <input type="number" min="0" step="1" name="craneo" class="form-control input-sm" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">cm.</span>
        </div>
      </div>

    </div>

    <div class="col-lg-6">

      <div class="form-group">
        <label for="oxigeno" class="col-lg-5 control-label">Oxígeno flujo libre</label>
        <label for="oxigeno" class="control-label radio-inline col-lg-2">
          <input type="radio" name="oxigeno" value="si"> Sí
        </label>
        <label for="oxigeno" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="oxigeno" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group">
        <label for="vent_masc" class="col-lg-5 control-label">Vent. masc.</label>
        <label for="vent_masc" class="control-label radio-inline col-lg-2">
          <input type="radio" name="vent_masc" value="si"> Sí
        </label>
        <label for="vent_masc" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="vent_masc" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group">
        <label for="intubacion" class="col-lg-5 control-label">Intubación</label>
        <label for="intubacion" class="control-label radio-inline col-lg-2">
          <input type="radio" name="intubacion" value="si"> Sí
        </label>
        <label for="intubacion" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="intubacion" value="no"> No
        </label>
      </div>
      
      <div class="clearfix visible-lg-block"></div>

      <div class="form-group">
        <label for="masaje" class="col-lg-5 control-label">Masaje card.</label>
        <label for="masaje" class="control-label radio-inline col-lg-2">
          <input type="radio" name="masaje" value="si"> Sí
        </label>
        <label for="masaje" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="masaje" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block"></div>

      <div class="form-group">
        <label for="adrenalina" class="col-lg-5 control-label">Adrenalina</label>
        <label for="adrenalina" class="control-label radio-inline col-lg-2">
          <input type="radio" name="adrenalina" value="si"> Sí
        </label>
        <label for="adrenalina" class="control-label radio-inline col-lg-2" >
          <input type="radio" name="adrenalina" value="no"> No
        </label>
      </div>

      <div class="clearfix visible-lg-block" ></div>

      <div class="form-group">
        <label for="score" class="col-lg-5 control-label">Score Neocosur
        </label>
        <div class="col-lg-5">
          <input type="number" min="0" max="10" step="1" name="score" class="form-control input-sm" >
        </div>
      </div>

      <div class="clearfix visible-lg-block" ></div>

      <div class="form-group">
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