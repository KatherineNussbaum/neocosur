<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-12">
        <div  class="page-header">
          <h1>Score </h1>
        </div>

        <div class="col-lg-6">
          <h4>Neocosur Score RN <small>entre 500 y 1500 grs.</small></h4>

          <div class="form-group">
            <label for="peso" class="col-lg-7 control-label" >Peso al Nacer </label>
          
            <div class="col-lg-4 input-group linea">
              <input type="number" step="1" name="peso" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">gr.</span>
            </div>
          </div>

          <div class="form-group">
            <label for="edad" class="col-lg-7 control-label" >Edad Gestacional </label>
          
            <div class="col-lg-4 input-group linea">
              <input type="number" step="1" name="edad" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">semanas</span>
            </div>
          </div>

          <div class="form-group">
            <label for="apgar" class="col-lg-7 control-label">Apgar 1-minuto </label>
            <div class="col-lg-4">
              <input type="number" step="1" name="apgar" class="form-control input-sm">
            </div>
          </div>

          <div class="form-group">
            <label for="malformaciones" class="col-lg-7 control-label">Malformaciones Congénitas con riesgo vital</label>
            <div class="col-lg-4">
              <select name="malformaciones" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Sí</option>
              </select>
            </div>
          </div>  

          <div class="form-group">
            <label for="corticoides" class="col-lg-7 control-label">Uso de Corticoides Prenatal</label>
            <div class="col-lg-4">
              <select name="corticoides" class="form-control input-sm">
                <option value="0">Ninguno</option>
                <option value="1">Completo</option>
                <option value="2">Incompleto</option>
                <option value="3">Más de uno</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="sexo" class="col-lg-7 control-label">Sexo Recién Nacido</label>
            <div class="col-lg-4">
              <select name="sexo" class="form-control input-sm">
                <option value="0">Hombre</option>
                <option value="1">Mujer</option>
              </select>
            </div>
          </div>  

          <div class="form-group">
            <label for="sexo" class="col-lg-7 control-label">Neocosur Score<sup>1</sup></label>
            <div class="col-lg-4">
              <input type="number" name="resultado" class="form-control input-sm" disabled>
            </div>
          </div>

          <div class="col-lg-offset-8 col-lg-2">
            <button type="button" class="btn btn-success">Calcular</button>
          </div>

          <div class="col-lg-12 pie">
            <p><sup>1</sup>El score es un puntaje entre 0 y 1 y se interpreta como la probabilidad de muerte neonatal. Para más información ver Marshall G, Tapia JL, 
            D'Apremont I et al. <br>A New Score for Predicting Neonatal Very Low Birth Weight Mortality Risk in the NEOCOSUR South American Network. Journal of Perinatology (2005) </p>
          </div>
        </div>

        <div class="col-lg-6 ">
          <h4>Neocosur Score HIC <small></small></h4>

          <div class="form-group">
            <label for="sexo" class="col-lg-7 control-label">Género</label>
            <div class="col-lg-4">
              <select name="sexo" class="form-control input-sm">
                <option value="0">Hombre</option>
                <option value="1">Mujer</option>
              </select>
            </div>
          </div> 

          <div class="form-group">
            <label for="edad" class="col-lg-7 control-label" >Edad Gestacional </label>
          
            <div class="col-lg-4 input-group linea">
              <input type="number" step="1" name="edad" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">semanas</span>
            </div>
          </div>

          <div class="form-group">
            <label for="esteroides" class="col-lg-7 control-label">Esteroides prenatales</label>
            <div class="col-lg-4">
              <select name="esteroides" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Al menos 1 dosis</option>
              </select>
            </div>
          </div> 

          <div class="form-group">
            <label for="cesarea" class="col-lg-7 control-label">Cesárea</label>
            <div class="col-lg-4">
              <select name="cesarea" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Sí</option>
              </select>
            </div>
          </div> 

          <div class="form-group">
            <label for="peso" class="col-lg-7 control-label">Peso al Nacer </label>
          
            <div class="col-lg-4 input-group linea">
              <input type="number" step="1" name="peso" class="form-control input-sm" aria-describedby="basic-addon2">
              <span class="input-group-addon" id="basic-addon2">gr.</span>
            </div>
          </div>

          <div class="form-group">
            <label for="apgar" class="col-lg-7 control-label">1-minuto apgar </label>
            <div class="col-lg-4">
              <input type="number" step="1" name="apgar" class="form-control input-sm">
            </div>
          </div>

          <div class="form-group">
            <label for="dificultad" class="col-lg-7 control-label">Sindrome de Dificultad Respiratoria</label>
            <div class="col-lg-4">
              <select name="dificultad" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Sí</option>
              </select>
            </div>
          </div>  

          <div class="form-group">
            <label for="ventilacion" class="col-lg-7 control-label">Ventilación Mecánica</label>
            <div class="col-lg-4">
              <select name="ventilacion" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Sí</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="sexo" class="col-lg-7 control-label">Neocosur Score<sup>2</sup></label>
            <div class="col-lg-4">
              <input type="number" name="resultado" class="form-control input-sm" disabled>
            </div>
          </div>

          <div class="col-lg-offset-8 col-lg-2">
            <button type="button" class="btn btn-success">Calcular</button>
          </div>

          <div class="col-lg-12 pie">
            <p><sup>2</sup>Luque MJ, Tapia JL, Villarroel L, Marshall G, Musante G, Carlo W, Kattan J.
            <br>J Perinatol. 2014 Jan;34(1):43-8. </p>
          </div>
        </div>

      </div>
      <!-- Fin del Contenido -->  
    </div> 

</div>
<?php
  include 'footer.php';
?>     
<!-- Inicio de JavaScript -->
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

