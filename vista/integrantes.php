<?php include 'head.php'; ?>

<div class="container">
  <!-- Inicio del Contenido -->
    <?php include 'header.php'; ?>
    <!-- Inicio de Título -->
    <div class="row">

      <div class="col-lg-12">
        <div  class="page-header">
          <h1>Neocosur <small>| Integrantes </small></h1>
        </div>
        <div>
          <p>
            Colaboradores locales pertenecientes a la red Neocosur
          </p>

        </div>
        <div class="col-lg-2">
          <h4>Argentina</h4>
        </div>
        <div class="col-lg-10">
          <div class="col-lg-4">
            <h5>Clínica y Maternidad Suizo Argentina<br><small>Buenos Aires</small></h5>
          </div>
          <div class="col-lg-8">
            <dl class="dl-horizontal">
              <dt>Jefe Unidad</dt>
              <dd>Dr. Luis Prudent<br> Ana Pedraza.</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>Colaboradores</dt>
              <dd>Dr. Guillermo Colantonio<br> Dr. Jorge Zapata<br> Dr. Gastón Pérez<br> Dr. Tomás Fortunato</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>Seguimiento</dt>
              <dd>Dra. Nélida Aguilera<br> Dra. Susana García<br>Dra. Alcira Escandar</dd>
            </dl>
          </div>

          <div class="col-lg-4">
            <h5>Hospital Italiano<br><small>Buenos Aires</small></h5>
          </div>
          <div class="col-lg-8 ">
            <dl class="dl-horizontal">
              <dt>Jefe Unidad</dt>
              <dd>Dr. Gónzalo Mariani</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>Colaboradores</dt>
              <dd>Dr. Gónzalo Mariani<br>Dra. Silvia Fernández <br>Dra. María Fernanda Galleti<br>Dr. Pablo Brener</dd>
            </dl>
            <dl class="dl-horizontal">
              <dt>Seguimiento</dt>
              <dd>Dra. Diana Rodríguez<br> Dra. María Edwards<br> Dra.Cecilia Martinez<br> Dra.Laura Guzzetti</dd>
            </dl>
          </div>

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
<script src="../js/neocosur.js"></script>
<script src="../js/data_table.min.js"></script>
<script src="../js/data_table_button.js"></script>
<script src="../js/jjszip.min.js"></script>
<script src="../js/buttons.html5.min.js"></script>
<script src="../js/data_table_print.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('#tbl_comite').DataTable();
  } );
</script>

</body>
</html>

