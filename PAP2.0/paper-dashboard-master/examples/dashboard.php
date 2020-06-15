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
<?php
include_once("include/body.inc.php");
drawTop(VOID);
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="wrapper ">

    <div class="main-panel">

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
                      <p class="card-title"><?php
                          $sql="SELECT count(*) as nFormadores FROM formacaoInscritos WHERE formacaoInscritoPapel='formador'";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormadores'];
                          ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.php"><i class="fa fa-refresh"></i></a>
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
                      <p class="card-title">
                          <?php
                          $sql="SELECT count(*) as nFormandos FROM formacaoInscritos WHERE formacaoInscritoPapel='formando'";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormandos'];
                          ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.php"><i class="fa fa-refresh"></i></a>
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
                        $sql="SELECT count(*) as nEscolas FROM escolas";
                        $result=mysqli_query($con,$sql);
                        $dados=mysqli_fetch_array($result);
                        echo $dados['nEscolas'];
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.php"><i class="fa fa-refresh"></i></a>
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
                      <p class="card-title"><?php
                          $sql="SELECT count(*) as nFormacoes FROM formacoes";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormacoes'];
                          ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="dashboard.php"><i class="fa fa-refresh"></i></a>
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
<?php
    drawBottom();
?>
