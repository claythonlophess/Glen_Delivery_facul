<main id="main" class="main">
  <section class="section dashboard">
    <div class="row">
        <!-- Recent Activity -->
        <div class="col-md-12">

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

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->