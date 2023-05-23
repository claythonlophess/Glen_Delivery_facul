<main id="main" class="main">



  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="pagetitle">
          <h5>Ola</h5>
          <nav style="padding-bottom: 40px;">
            <div>
              <h1 class="" style="font-size: 38px;">@<?php echo $_SESSION['session_nome'];  ?></h1>
            </div>
            <div style=" padding: 20px 0 0 0;">
              <h4><strong>O que vai enviar hoje?</strong> </h4>
            </div>
          </nav>
        </div><!-- End Page Title -->
        <div class="row">
          <!-- Sales Card -->
          <div class="col-md-4 opcoes">
            <div class=" info-card sales-card" style="border: groove; ">
              <a href="#">
                <div class="card-body align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="icons/pizza_100px.png" alt="">
                  </div>
                  <h5 class="card-title" style="font-size: 12px; padding: 0px 0 0px 0;">Entregar Comida</h5>
                  <span style="font-size: 12px;margin-left: 20px;">(Ate 10 kg)</span>
                </div>
              </a>

            </div>
          </div><!-- End Sales Card -->
          <!-- Sales Card -->
          <div class="col-md-4 opcoes">
            <div class=" info-card sales-card text-center" style="border: groove; ">
              <a href="http://localhost/NiceAdmin/index.php?acao=pacote&pesquisa=&ordem=&tabela=home#">
                <div class="card-body align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="icons/box_100px.png" alt="">
                  </div>
                  <h5 class="card-title" style="font-size: 12px; padding: 0px 0 0px 0;">Entregar Pacote</h5>
                  <span style="font-size: 12px;margin-left: 20px;">(Ate 10 kg)</span>
                </div>
              </a>
            </div>
          </div><!-- End Sales Card -->
          <!-- Sales Card -->
          <div class="col-md-4 opcoes">
            <div class=" info-card sales-card" style="border: groove; ">
              <a href="#">
                <div class="card-body align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="icons/shopping_cart_100px.png" alt="">
                  </div>
                  <h5 class="card-title" style="font-size: 12px; padding: 0px 0 0px 0;">Entregar Compras</h5>
                  <span style="font-size: 12px;margin-left: 20px;">(Ate 10 kg)</span>
                </div>
              </a>

            </div>
          </div><!-- End Sales Card -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Atividades Recentes<span>| Today</span></h5>
            <?php
            $dao = new db_funcoes();
            $sql = "select * from pedido where cliente =" . $_SESSION['session_codigo'] . " ORDER BY `pedido`.`id` DESC limit 5";
            $dao->resultado = $dao->con->banco->execute($sql);
            while ($ss = $dao->resultado->FetchNextObj()) {
            ?>
              <div class="card-body  alert alert-secondary alert-dismissible fade show" style="height: 4rem;padding-left: 0px;">
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3" style="padding-left: 0px;">
                    <h6><?php echo substr($ss->titulo, 0, 22); ?></h6>
                      <?php
                      if ($ss->status == 0) {
                        echo '<span class="text-success small pt-1 fw-bold">Pendente</span> ';
                      } else {
                        echo '<span class="text-primary small pt-1 fw-bold">Entregue</span> ';
                      }
                      ?>
                      </span> <span class="text-muted small pt-2 ps-1">increas</span>

                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div><!-- End Recent Activity -->

        <!-- Budget Report -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

          </div>
        </div><!-- End Budget Report -->

        <!-- Website Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->

        <!-- News & Updates Traffic -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

            <div class="news">
              <div class="post-item clearfix">
                <img src="assets/img/news-1.jpg" alt="">
                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/news-2.jpg" alt="">
                <h4><a href="#">Quidem autem et impedit</a></h4>
                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
              </div>


            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->