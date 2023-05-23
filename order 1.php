<main id="main" class="main">
  <!-- ======= Header ======= -->
  <div id="" class=" d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between icon">
      <h6><a href="http://localhost/NiceAdmin/index.php?acao=pacote&pesquisa=&ordem=&tabela=home#"><img src="icons/back_to_30px.png" alt="">Voltar</a></h6>
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
            <h4><strong> O que esta dentro do pacote?</strong></h4>

            <!-- General Form Elements -->
            <form method="post" action="http://localhost/NiceAdmin/index.php?acao=localizacao&pesquisa=&ordem=&tabela=home">
              <table width="753" border="1" cellspacing="5">
                <div class="text-center">
                  <label for="inputName5" class="form-label">Titulo</label>
                </div>
                <div class=" mb-3">
                  <input type="text" class="form-control field" name="titulo" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="text-center">
                  <label for="inputName5" class="form-label">Descricao <span>(Opcional)</span></label>
                </div>
                <div class=" mb-3">
                  <textarea style="height: 100px" name="descricao" class="form-control field" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                </div>

                <div class="text-center" style="padding-top: 100px;">
                  <button type="submit" class="btn btn-primary w-100">Next</button>
                </div>

            </form><!-- End General Form Elements -->

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