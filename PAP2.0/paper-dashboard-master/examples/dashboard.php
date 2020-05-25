<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!-- fa-icons -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="dashboard.html" class="simple-text logo-normal">
          BACKOFFICE
        </a>
          <h6>2019/20</h6>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="formadores.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Formadores</p>
            </a>
          </li>
          <li>
            <a href="formandos.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Formandos</p>
            </a>
          </li>
          <li>
            <a href="escolas.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Escolas</p>
            </a>
          </li>
          <li>
            <a href="formacoes.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Formações</p>
            </a>
          </li>
            <li>
                <a href="anosLetivos.php">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Anos Letivos</p>
                </a>
            </li>
            <li>
                <a href="tiposFuncionários.php">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Funcionários</p>
                </a>
            </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <!-- FORMADORES -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon fa fa-file-text-o text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Formadores</p>
                      <p class="card-title">*count*<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.html"><i class="fa fa-refresh"></i></a>
                  Update
                </div>
              </div>
            </div>
          </div>
          <!-- FORMANDOS -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon fa fa-file-text-o text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Formandos</p>
                      <p class="card-title">*count*<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.html"><i class="fa fa-refresh"></i></a>
                  Update
                </div>
              </div>
            </div>
          </div>
          <!-- ESCOLAS -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon fa fa-file-text-o text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Escolas</p>
                      <p class="card-title">
                        <?php
                        $con=mysqli_connect("localhost","root","","pap2020formacao");
                        $sql="SELECT count(*) as countEscolas FROM escolas";
                        $result=mysqli_query($con,$sql);
                        $dados=mysqli_fetch_array($result);
                        echo $dados['countEscolas'];
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.html"><i class="fa fa-refresh"></i></a>
                  Update
                </div>
              </div>
            </div>
          </div>
          <!-- FORMAÇÕES -->
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon fa fa-file-text-o text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Formações</p>
                      <p class="card-title">*count*<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.html"><i class="fa fa-refresh"></i></a>
                  Update
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- Gráfico -->
        <div class="row">
          <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Gráfico</h5>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                    <a href="dashboard.php"><i class="fa fa-refresh"></i></a> Update
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Gráfico</h5>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="dashboard.php"><i class="fa fa-refresh"></i></a> Update
                        </div>
                    </div>
                </div>
            </div>
      </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card ">
                      <div class="card-header ">
                          <h5 class="card-title">Pedidos</h5>
                      </div>
                      <div class="card-body ">
                          <table class="table">
                              <thead class=" text-primary">
                              <tr>
                                  <th>id</th>
                                  <th>Nome</th>
                                  <th>Formação</th>
                                  <th>Escola</th>
                                  <th>Grupo Disciplinar</th>
                                  <th>&nbsp</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Manuel</td>
                                  <td>Programação Web</td>
                                  <td>Escola Secundária Pinhal do Rei</td>
                                  <td>550-Informática</td>
                                  <td><center><a class="btn-sm btn-success" href="dashboard.html"><i class="fa fa-check"></i></a> <a class="btn-sm btn-danger" href="#"><i class="fa fa-remove"></i></a></center></td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="card-footer ">
                          <hr>
                          <div class="stats">
                              <a href="dashboard.php"><i class="fa fa-refresh"></i></a> Update
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- footer -->
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>




  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>