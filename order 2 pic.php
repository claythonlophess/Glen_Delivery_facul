<main id="main" class="main">
  <!-- ======= Header ======= -->
  <div id="" class=" d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between icon">
      <h6><a href="http://localhost/NiceAdmin/index.php?acao=pacote-1&pesquisa=&ordem=&tabela=home"><img src="icons/back_to_30px.png" alt="">Voltar</a></h6>
    </div>

    <nav class="header-nav ms-auto">
      <span style="padding-right: 25px;"> cancelar</span>
    </nav><!-- End Icons Navigation -->

  </div><!-- End Header -->
  <section class="section">
    <div class="row">
    <div class="progress" style="height: 10px;">
        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="col-lg-6">

        <div class="">
          <div class="card-body">
          <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
            <h4><strong>Tire uma foto do Item.</strong></h4>
            <p><strong>Nota:</strong> quas omnis officia. Sit sed praesentium voluptas. Rerum dolor </p>

            <div class="img">
              <img src="img/exemplo 1.PNG" alt="" style="width: -webkit-fill-available;">
            </div>
            <div class="img">
              <img src="img/exemplo 2.PNG" alt="" style="width: -webkit-fill-available;">
            </div>

            <p style="color: blue;"><strong>Nota: quas omnis officia. Sit sed praesentium voluptas. Rerum dolor </strong></p>

            <form action="http://localhost/NiceAdmin/index.php?acao=localizacao&pesquisa=&ordem=&tabela=home&id_associado=<?php echo $_SESSION["session_codigo"]?>" enctype="multipart/form-data" method="post">
              <div class="text-center">
                <label for="inputName5" class="form-label"><i class="bi bi-images" style="font-size: 2rem; margin-right: 1rem;"></i>Carregar Imagem</label>
              </div>
              <div class=" mb-3">
                <input class="form-control" name="imagem" type="file" id="formFile" class="form-control field" name="image" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="text-center" style="padding-top: 60px;">
                <button type="submit" class="btn btn-primary w-100">Proximo</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>