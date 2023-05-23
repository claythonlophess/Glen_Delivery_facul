
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://localhost/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="http://localhost/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://localhost/NiceAdmin/assets/css/style.css" rel="stylesheet">
  <style>
    .label {
      font-weight: 600;
      color: rgba(1, 41, 112, 0.6);
    }

    .modal .row {
      margin-bottom: 20px;
      font-size: 15px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="http://localhost/NiceAdmin/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="http://localhost/NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link  collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pedidos.html">
          <i class="bi bi-menu-button-wide"></i><span>Pedidos</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="motoristas.html">
          <i class="bi bi-menu-button-wide"></i><span>Motoristas</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="viaturas.html">
          <i class="bi bi-menu-button-wide"></i><span>Viaturas</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Motoristas</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

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
              <h5 class="card-title">Alocacao de motoristas <span>| hoje</span></h5>

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                  <div class="datatable-dropdown">
                    <label>
                      <select class="datatable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entradas por pagina
                    </label>
                  </div>
                  <div class="datatable-search">
                    <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                  </div>
                </div>
                <div class="datatable-container">
                  <table class="table table-borderless datatable datatable-table">
                    <thead>
                      <tr>
                        <th data-sortable="true" style="width: 24.375%;"><a href="#"
                            class="datatable-sorter">Motorista</a></th>
                        <th data-sortable="true" style="width: 39.125%;"><a href="#"
                            class="datatable-sorter">Viatura</a></th>
                        <th data-sortable="true" style="width: 15.375%;" aria-sort="ascending"
                          class="datatable-ascending"><a href="#" class="datatable-sorter">Status</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr data-index="0">
                        <td>Angus Grady</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#largeModal" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr data-index="1">
                        <td>Bridie Kessler</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#largeModal" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr data-index="2">
                        <td>Brandon Jacob</td>
                        <td><a href="#" data-bs-toggle="modal"
                          data-bs-target="#largeModal"class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="datatable-bottom">
                  <div class="datatable-info">Mostrando 1 de 5 Paginas</div>
                  <nav class="datatable-pagination">
                    <ul class="datatable-pagination-list"></ul>
                  </nav>
                </div>
              </div>

            </div>

          </div>
          
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Descricao de Pedido</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5 class="card-title">Detalhes do Pedido</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Altura X Largura</div>
                      <div class="col-lg-9 col-md-8">1 cm X 2 cm</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Peso</div>
                      <div class="col-lg-9 col-md-8">5 kg</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Quantidade</div>
                      <div class="col-lg-9 col-md-8">8 Unidades</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Descricao/Nome</div>
                      <div class="col-lg-9 col-md-8">Pizzas</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Descricao</div>
                      <div class="col-lg-9 col-md-8">
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                        temporibus. Tempora libero non est unde veniam est qui dolor.</p>
                      </div>
                    </div>

                    <h5 class="card-title">Detalhes da localizacao</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Origem</div>
                      <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Destino</div>
                      <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Contacto</div>
                      <div class="col-lg-9 col-md-8">87 714 0136</div>
                    </div>
                    
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Gravar Alteracoes</button>
                </div>
              </div>
            </div>
          </div><!-- End Vertically centered Modal-->

        </div>
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

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
              <h5 class="card-title">Motoristas <span>| hoje</span></h5>

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                  <div class="datatable-dropdown">
                    <label>
                      <select class="datatable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entradas por pagina
                    </label>
                  </div>
                  <div class="datatable-search">
                    <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                  </div>
                </div>
                <div class="datatable-container">
                  <table class="table table-borderless datatable datatable-table">
                    <thead>
                      <tr>
                        <th data-sortable="true" style="width: 24.375%;"><a href="#"
                            class="datatable-sorter">Motorista</a></th>
                        <th data-sortable="true" style="width: 39.125%;"><a href="#"
                            class="datatable-sorter">Viatura</a></th>
                        <th data-sortable="true" style="width: 15.375%;" aria-sort="ascending"
                          class="datatable-ascending"><a href="#" class="datatable-sorter">Status</a></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr data-index="0">
                        <td>Angus jjjjjjjjjjjjjjjGrady</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr data-index="1">
                        <td>Bridie Kessler</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr data-index="2">
                        <td>Brandon Jacob</td>
                        <td><a href="#" data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal"class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                        <hr class='adodb-debug'>(mysqli):  select * from usuario where usuario like '%' order by usuario &nbsp; <hr class='adodb-debug'><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://localhost/NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="http://localhost/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://localhost/NiceAdmin/assets/css/style.css" rel="stylesheet">
  <style>
    .label {
      font-weight: 600;
      color: rgba(1, 41, 112, 0.6);
    }

    .modal .row {
      margin-bottom: 20px;
      font-size: 15px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="http://localhost/NiceAdmin/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="http://localhost/NiceAdmin/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="http://localhost/NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link  collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pedidos.html">
          <i class="bi bi-menu-button-wide"></i><span>Pedidos</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="motoristas.html">
          <i class="bi bi-menu-button-wide"></i><span>Motoristas</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="viaturas.html">
          <i class="bi bi-menu-button-wide"></i><span>Viaturas</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Motoristas</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

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
              <h5 class="card-title">Alocacao de motoristas <span>| hoje</span></h5>

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                  <div class="datatable-dropdown">
                    <label>
                      <select class="datatable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entradas por pagina
                    </label>
                  </div>
                  <div class="datatable-search">
                    <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                  </div>
                </div>
                <div class="datatable-container">
                  <table class="table table-borderless datatable datatable-table">
                    <thead>
                      <tr>
                        <th data-sortable="true" style="width: 24.375%;"><a href="#"
                            class="datatable-sorter">Motorista</a></th>
                        <th data-sortable="true" style="width: 39.125%;"><a href="#"
                            class="datatable-sorter">Viatura</a></th>
                        <th data-sortable="true" style="width: 15.375%;" aria-sort="ascending"
                          class="datatable-ascending"><a href="#" class="datatable-sorter">Status</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr data-index="0">
                        <td>Angus Grady</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#largeModal" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr data-index="1">
                        <td>Bridie Kessler</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#largeModal" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr data-index="2">
                        <td>Brandon Jacob</td>
                        <td><a href="#" data-bs-toggle="modal"
                          data-bs-target="#largeModal"class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="datatable-bottom">
                  <div class="datatable-info">Mostrando 1 de 5 Paginas</div>
                  <nav class="datatable-pagination">
                    <ul class="datatable-pagination-list"></ul>
                  </nav>
                </div>
              </div>

            </div>

          </div>
          
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Descricao de Pedido</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5 class="card-title">Detalhes do Pedido</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Altura X Largura</div>
                      <div class="col-lg-9 col-md-8">1 cm X 2 cm</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Peso</div>
                      <div class="col-lg-9 col-md-8">5 kg</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Quantidade</div>
                      <div class="col-lg-9 col-md-8">8 Unidades</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Descricao/Nome</div>
                      <div class="col-lg-9 col-md-8">Pizzas</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Descricao</div>
                      <div class="col-lg-9 col-md-8">
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                        temporibus. Tempora libero non est unde veniam est qui dolor.</p>
                      </div>
                    </div>

                    <h5 class="card-title">Detalhes da localizacao</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Origem</div>
                      <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Destino</div>
                      <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Contacto</div>
                      <div class="col-lg-9 col-md-8">87 714 0136</div>
                    </div>
                    
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Gravar Alteracoes</button>
                </div>
              </div>
            </div>
          </div><!-- End Vertically centered Modal-->

        </div>
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

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
              <h5 class="card-title">Motoristas <span>| hoje</span></h5>

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top">
                  <div class="datatable-dropdown">
                    <label>
                      <select class="datatable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                      </select> entradas por pagina
                    </label>
                  </div>
                  <div class="datatable-search">
                    <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
                  </div>
                </div>
                <div class="datatable-container">
                  <table class="table table-borderless datatable datatable-table">
                    <thead>
                      <tr>
                        <th data-sortable="true" style="width: 24.375%;"><a href="#"
                            class="datatable-sorter">Motorista</a></th>
                        <th data-sortable="true" style="width: 39.125%;"><a href="#"
                            class="datatable-sorter">Viatura</a></th>
                        <th data-sortable="true" style="width: 15.375%;" aria-sort="ascending"
                          class="datatable-ascending"><a href="#" class="datatable-sorter">Status</a></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr data-index="0">
                        <td>Angus jjjjjjjjjjjjjjjGrady</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr data-index="1">
                        <td>Bridie Kessler</td>
                        <td><a href="#"data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr data-index="2">
                        <td>Brandon Jacob</td>
                        <td><a href="#" data-bs-toggle="modal"
                          data-bs-target="#motoristas-modal"class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                        <br />
<b>Fatal error</b>:  Cannot declare class conexao, because the name is already in use in <b>C:\xampp\htdocs\NiceAdmin\util\conecta.php</b> on line <b>5</b><br />
