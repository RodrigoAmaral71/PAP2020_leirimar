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
                      <p class="dashboard">Formadores</p>
                      <p class="card-title"><?php
                          $sql="SELECT count(*) as nFormadores FROM formacaoInscritos inner join formacoes on formacaoId=formacaoInscritoFormacaoId inner join anoLectivos on formacaoAnoLectivoId=anoLectivoId WHERE anoLectivoEstado='activo' and   formacaoInscritoPapel='formador'";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormadores'];
                          ?>
                      </p>
                        <p><br></p>
                    </div>
                  </div>
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
                      <p class="dashboard">Formandos Inscritos</p>
                      <p class="card-title">
                          <?php
                          $sql="SELECT count(*) as nFormandos FROM formacaoInscritos inner join formacoes on formacaoId=formacaoInscritoFormacaoId inner join anoLectivos on formacaoAnoLectivoId=anoLectivoId  WHERE anoLectivoEstado='activo' and  formacaoInscritoPapel='formando' AND formacaoInscritoEstado='inscrito'";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormandos'];
                          ?>
                      </p>
                        <p><br></p>
                    </div>
                  </div>
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
                        <p class="dashboard">Escolas</p>
                      <p class="card-title">
                        <?php
                        $sql="SELECT count(*) as nEscolas FROM escolas";
                        $result=mysqli_query($con,$sql);
                        $dados=mysqli_fetch_array($result);
                        echo $dados['nEscolas'];
                        ?>
                      </p>
                        <p><br></p>
                    </div>
                  </div>
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
                      <p class="dashboard">Formações Ativas</p>
                      <p class="card-title"><?php
                          $sql="SELECT count(*) as nFormacoes FROM formacoes inner join anoLectivos on formacaoAnoLectivoId=anoLectivoId where anoLectivoEstado='activo' and formacaoEstado='iniciada'";
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          echo $dados['nFormacoes'];
                          ?>
                      </p>
                        <p><br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- Gráfico -->
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
                                  <th>&nbsp</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php
                                  $sql=("SELECT * FROM funcionarios INNER JOIN formacaoinscritos ON funcionarioId=formacaoInscritoFuncionarioId INNER JOIN formacoes ON formacaoInscritoFormacaoId=formacaoId WHERE formacaoInscritoEstado='pendente' and formacaoInscritoPapel='formando' ORDER BY formacaoInscritoFuncionarioId ASC");
                                  $result=mysqli_query($con,$sql);
                                  while($dados=mysqli_fetch_array($result)){
                                  ?>
                              <tbody>
                              <tr>
                                  <td><?php echo $dados['funcionarioId']; ?></td>
                                  <td><?php echo $dados['funcionarioNome']; ?></td>
                                  <td><?php echo $dados['formacaoNome']; ?></td>
                                  <td><center><a title="Confirmar" onclick="confirmaInscrito(<?php echo $dados['funcionarioId'];?>,<?php echo $dados['formacaoId'];?>);" class="btn-sm btn-success" href="#"><i class="fa fa-check"></i></a>
                                          <a title="Eliminar" onclick="cancelaInscrito(<?php echo $dados['funcionarioId'];?>,<?php echo $dados['formacaoId'];?>);" class="btn-sm btn-danger" href="#"><i class="fa fa-remove"></i></a></center></td>
                                  <?PHP
                                  }
                                  ?>
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