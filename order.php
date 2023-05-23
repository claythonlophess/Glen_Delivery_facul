<main id="main" class="main">
  <!-- ======= Header ======= -->
  <div id="" class=" d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between icon">
      <h6><a href="http://localhost/NiceAdmin/index.php?acao=home&pesquisa=&ordem=&tabela=home#"><img src="icons/back_to_30px.png" alt="">Voltar</a></h6>
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
            <h4><strong> Adicione mais detalhes sobre seu pacote.</strong></h4>

            <!-- General Form Elements -->
            <form method="post" action="http://localhost/NiceAdmin/index.php?acao=pacote-1&pesquisa=&ordem=&tabela=home">
              <div class="text-center">
                <label for="inputName5" class="form-label">Altura do pacote</label>
              </div>
              <div class="input-group mb-3">
                <input type="NUMBER" class="form-control field" placeholder="Altura do Inches" name="altura" aria-label="Username"
                  aria-describedby="basic-addon1">
                <span>
                  <select class="form-select field" name="m-a"  aria-label="Default select example">
                    <option selected="cm">cm</option>
                    <option value="ml">ml</option>
                    <option value="m">m</option>
                  </select>
                </span>
              </div>

              <div class="text-center">
                <label for="inputName5" class="form-label">Largura do pacote</label>
              </div>
              <div class="input-group mb-3">
                <input type="NUMBER" class="form-control field" placeholder="Largura do Inches" name="largura"  aria-label="Username"
                  aria-describedby="basic-addon1">
                <span>
                  <select class="form-select field" name="m-l" aria-label="Default select example">
                    <option selected="cm">cm</option>
                    <option value="ml">ml</option>
                    <option value="m">m</option>
                  </select>
                </span>
              </div>

              <div class="row col">
                <div class="col-6">
                  <div class="text-center">
                    <label for="inputName5" class="form-label">Peso do pacote</label>
                  </div>
                  <div class="input-group mb-3 col-lg-6">
                    <input type="number" class="form-control field" name="peso"  placeholder="Peso do Inches" aria-label="Username"
                      aria-describedby="basic-addon1">
                    <span>
                      <select class="form-select field" name="m-p"  aria-label="Default select example">
                        <option selected="">mg</option>
                        <option selected="">Kg</option>
                        <option value="1">g</option>
                      </select>
                    </span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="text-center">
                    <label for="inputName5" class="form-label">Quantidade</label>
                  </div>
                  <div class=" mb-3 ">
                    <input type="number" class="form-control field" name="quantidade"  placeholder="Quantidade" aria-label="Quantidade"
                      aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>

              <p><strong>Nota:</strong> ."&m-a = ".$_REQUEST("m-a")."&largura = ".$_REQUEST("largura")."&m-1 = ".$_REQUEST("m-l")."&peso = ".$_REQUEST("peso")."&m-p = ".$_REQUEST("m-p").</p>

              <div class="text-center" style="padding-top: 100px;">
                <button type="submit" class="btn btn-primary w-100">
                  Next
                  </button>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->