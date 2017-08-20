<?php include 'head.php'; ?>

<div class="container-fluid">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <h1 class="display-4">Score</h1>
      </div>
      <div class="row">
        <div class="col-6">
          <h4>Neocosur Score RN <small>entre 500 y 1500 grs.</small></h4>
          <form>
            <div class="form-group row">
              <label for="peso" class="col-lg-6 control-label" >Peso al Nacer </label>
            
              <div class="col-lg-6 input-group">
                <input type="number" step="1" name="peso" class="form-control form-control-sm">
                <span class="input-group-addon form-control-sm">gr.</span>
              </div>
            </div>

            <div class="form-group row">
              <label for="edad" class="col-lg-6 control-label" >Edad Gestacional </label>
            
              <div class="col-lg-6 input-group">
                <input type="number" step="1" name="edad" class="form-control form-control-sm">
                <span class="input-group-addon form-control-sm" id="basic-addon2">semanas</span>
              </div>
            </div>

            <div class="form-group row ">
              <label for="peso" class="col-lg-6 control-label" >Apgar 1-minuto </label>
              <div class="col-lg-6">
                <input type="number" step="1" name="apgar" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-group row">
              <label for="malformaciones" class="col-lg-6 control-label">Malformaciones Congénitas con riesgo vital</label>
              <div class="col-lg-6">
                <select name="malformaciones" class="form-control form-control-sm">
                  <option value="0">No</option>
                  <option value="1">Sí</option>
                </select>
              </div>
            </div>  

            <div class="form-group row">
              <label for="corticoides" class="col-lg-6 control-label">Uso de Corticoides Prenatal</label>
              <div class="col-lg-6">
                <select name="corticoides" class="form-control form-control-sm">
                  <option value="0">Ninguno</option>
                  <option value="1">Completo</option>
                  <option value="2">Incompleto</option>
                  <option value="3">Más de uno</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="sexo" class="col-lg-6 control-label">Sexo Recién Nacido</label>
              <div class="col-lg-6">
                <select name="sexo" class="form-control form-control-sm">
                  <option value="0">Hombre</option>
                  <option value="1">Mujer</option>
                </select>
              </div>
            </div>  

            <div class="form-group row">
              <label for="sexo" class="col-lg-6 control-label">Neocosur Score<sup>1</sup></label>
              <div class="col-lg-6">
                <input type="number" name="resultado" class="form-control form-control-sm" disabled>
              </div>
            </div>

            <div class="text-right">
              <button type="button" class="btn btn-primary">Calcular</button>

            </div>

            <div class="col-lg-12 pie">
              <p><sup>1</sup>El score es un puntaje entre 0 y 1 y se interpreta como la probabilidad de muerte neonatal. Para más información ver Marshall G, Tapia JL, 
              D'Apremont I et al. <br>A New Score for Predicting Neonatal Very Low Birth Weight Mortality Risk in the NEOCOSUR South American Network. Journal of Perinatology (2005) </p>
            </div>
          </form>
        </div>
        <div class="col-6">
          
          <h4>Neocosur Score HIC <small></small></h4>
          <form>
            <div class="form-group row">
              <label for="sexo" class="col-lg-6 col-form-label">Género</label>
              <div class="col-lg-6">
                <select name="sexo" class="form-control form-control-sm">
                  <option value="0">Hombre</option>
                  <option value="1">Mujer</option>
                </select>
              </div>
            </div> 

            <div class="form-group row">
              <label for="edad" class="col-lg-6 control-label" >Edad Gestacional </label>
            
              <div class="col-lg-6 input-group">
                <input type="number" step="1" name="edad" class="form-control form-control-sm">
                <span class="input-group-addon form-control-sm" id="basic-addon2">semanas</span>
              </div>
            </div>

            <div class="form-group row">
              <label for="esteroides" class="col-lg-6 control-label">Esteroides prenatales</label>
              <div class="col-lg-6">
                <select name="esteroides" class="form-control form-control-sm">
                  <option value="0">No</option>
                  <option value="1">Al menos 1 dosis</option>
                </select>
              </div>
            </div> 

            <div class="form-group row">
              <label for="cesarea" class="col-lg-6 control-label">Cesárea</label>
              <div class="col-lg-6">
                <select name="cesarea" class="form-control form-control-sm">
                  <option value="0">No</option>
                  <option value="1">Sí</option>
                </select>
              </div>
            </div> 

            <div class="form-group row">
              <label for="peso" class="col-lg-6 control-label">Peso al Nacer </label>
            
              <div class="col-lg-6 input-group">
                <input type="number" step="1" name="peso" class="form-control form-control-sm">
                <span class="input-group-addon form-control-sm">gr.</span>
              </div>
            </div>

            <div class="form-group row">
              <label for="peso" class="col-lg-6 control-label" >1-minuto apgar </label>
              <div class="col-lg-6">
                <input type="number" step="1" name="apgar" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-group row">
              <label for="dificultad" class="col-lg-6 control-label">Sindrome de Dificultad Respiratoria</label>
              <div class="col-lg-6">
                <select name="dificultad" class="form-control form-control-sm">
                  <option value="0">No</option>
                  <option value="1">Sí</option>
                </select>
              </div>
            </div>  

            <div class="form-group row">
              <label for="ventilacion" class="col-lg-6 control-label">Ventilación Mecánica</label>
              <div class="col-lg-6">
                <select name="ventilacion" class="form-control form-control-sm">
                  <option value="0">No</option>
                  <option value="1">Sí</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="sexo" class="col-lg-6 control-label">Neocosur Score<sup>2</sup></label>
              <div class="col-lg-6">
                <input type="number" name="resultado" class="form-control form-control-sm" disabled>
              </div>
            </div>

            <div class="text-right">
              <button type="button" class="btn btn-primary">Calcular</button>
            </div>

            <div class="col-lg-12 pie">
              <p><sup>2</sup>Luque MJ, Tapia JL, Villarroel L, Marshall G, Musante G, Carlo W, Kattan J.
              <br>J Perinatol. 2014 Jan;34(1):43-8. </p>
            </div>
          </form>

        </div>
      </div>
    </div>
</div>
<?php
  include 'footer.php';
?>     
<!-- Inicio de JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/npm.js"></script>
<script src="../js/admin/ficha_ingreso.js"></script>
<script src="../js/neocosur.js"></script>
<script>
  $( "#tabs" ).tabs();
  $('[data-toggle="tooltip"]').tooltip(); 
</script>

</body>
</html>

