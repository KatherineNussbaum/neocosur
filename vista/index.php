<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <div class="row">
      <?php include 'header.php'; ?>
    </div>
    
    <!-- Inicio de Título -->
    <div class="row">

      <h4 class="col-lg-9"><span class="text-primary">BIENVENIDO A LA </span><span  class="text-success">RED NEONATAL</span></h4>
    </div>

    <div class="row">
      <div class="col-lg-9 img_inicio">
        <img src="../img/foto.jpg">
      </div>
      <div class="col-lg-3">


        <div class="bg-success col-lg-12 login">
          <h4 class="text-white">Iniciar Sesión</h4>
           <form>
              <div class="form-group">
                <input type="text" name="usuario" class="form-control form-control-sm" placeholder="Usuario">
              </div>

              <div class="form-group">
                <input type="password" name="pass" class="form-control form-control-sm" placeholder="Contraseña">
              </div>


              <div class="row mx-auto col-lg-6">
                <button type="submit" class="btn btn-light center-block btn-sm">Ingresar</button>
              </div>
              
              <div class="row mx-auto col-lg-9">
                <a href="#" class="text-white">¿Olvidó su contraseña?</a>
              </div>
            </form>
        </div>

        <div class="bg-white border col-lg-12 noticia">
          <h4 class="text-primary">NOTICIAS</h4>
          <p class="text-primary">Expertos llaman a abordar riesgo de parto prematuro al inicio del embarazo.</p>
          <img src="../img/foto_noticia.jpg" width="150px">
        </div>

      </div>
    </div>
    
    <div class="row">

      <div class="col-lg-12">
        <div class="txt_destacado blue">
            <p>NEOCOSUR es una asociación voluntaria sin fines de lucro de Unidades de Cuidado Intensivo Neonatal de un grupo de países sud-americanos, cuya misión principal es mejorar el cuidado neonatal y sus resultados en la región.</p>
          <p><b>Las estrategias principales para lograr esta misión incluye</b></p>
          <ul>
            <li>La evaluación continua de la mortalidad y morbilidad de los Recién Nacidos de Muy Bajo Peso de Nacimiento (RNMBPN) de los centros participantes en la red neonatal Neocosur.</li>
            <li>Diseñar y conducir estudios clínicos para evaluar la efectividad de intervenciones terapéuticas específicas.</li>
            <li>Promover proyectos educacionales en variados aspectos del cuidado neonatal, tanto médicos, de enfermería y de terapia.</li>
            <li>Colaborar con el Cuidado Continuo del personal de las Unidades de Cuidados Intensivos Neonatales.</li>
            <li>Proporcionar una Base de Datos que sirva de ayuda para la comparación de los resultados tanto de las Unidades participantes como no participantes y de la región como de otras regiones.</li>
            <li>Diseñar y diseminar información de las terapias probadamente beneficiosas en el área perinatal y evaluar su impacto en los cuidados de salud.</li>
            <li>Promover el cuidado de los padres de los RNMBPN durante y después de la hospitalización.</li>
            <li>Promover el Seguimiento de los RNMBPN luego de su alta de las UCINs. </li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Fin del Contenido -->  
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

