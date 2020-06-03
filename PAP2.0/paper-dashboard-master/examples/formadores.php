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

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script>
        function confirma(id) {
            if(confirm('De certeza que quer eliminar o registo com o id:'+id +'?')){
                window.location="apagarFormadores.php?id="+id;
            }
        }
    </script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          BACKOFFICE
        </a>
          <h6>
              <select>
                  <?php
                  $con=mysqli_connect("localhost","root","","pap2020formacao");
                  $sql=("SELECT * FROM anolectivos");
                  $result=mysqli_query($con,$sql);
                  while($dados=mysqli_fetch_array($result)){
                      ?>
                      <option> <?php echo $dados['anoLectivoNome']; ?></option>
                  <?php } ?>
              </select>
          </h6>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> FORMADORES</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Escola</th>
                        <th>Grupo</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th><center><a class="btn-sm btn-success" href="adicionarFormador.php"><i class="fa fa-plus"></i></a></center></th>
                      </tr>
                    </thead>
                      <?php
                      $con=mysqli_connect("localhost","root","","pap2020formacao");
                      $sql=("SELECT * FROM funcionarios INNER JOIN funcionarioescolas ON funcionarioId=funcionarioEscolaFuncionarioId INNER JOIN escolas ON funcionarioEscolasEscolaId=escolaId where funcionarioFuncionarioTipoId!=2");
                      $result=mysqli_query($con,$sql);
                      while($dados=mysqli_fetch_array($result)){
                          ?>
                          <tbody>
                          <td><?php echo $dados['funcionarioId']; ?></td>
                          <td><?php echo $dados['funcionarioNome']; ?></td>
                          <td><?php echo $dados['escolaNome']; ?></td>
                          <td><?php echo $dados['funcionarioGrupoDisciplinar']; ?></td>
                          <td><?php echo $dados['funcionarioTelefone']; ?></td>
                          <td><?php echo $dados['funcionarioEmail']; ?></td>
                          <td><center>
                                  <a class="btn-sm btn-info" id="editar" name="editar" href="#"><i class="fas fa-pencil-alt"></a></i>
                                  <a onclick="confirma(<?php echo $dados['funcionarioId'];?>);" class="btn-sm btn-danger" id="delete" name="delete" href="#"><i class='fas fa-eraser'></i></a></center></td>
                          </tbody>
                      <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
</body>

</html>