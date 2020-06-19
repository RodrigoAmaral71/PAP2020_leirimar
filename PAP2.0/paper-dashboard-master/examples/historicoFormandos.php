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
drawTop(ADMIN_FORMANDOS);
?>

  <div class="wrapper ">

    <div class="main-panel">

      <!-- End Navbar -->
      <div class="content">
        <!-- Gráfico -->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Informação Pessoal</h5>
              </div>
              <div class="card-body ">
                  <div class="table-responsive">
                      <table class="table">
                          <thead class=" text-primary">
                              <th>id</th>
                              <th>Nome</th>
                              <th>Formação Actual</th>
                              <th>Telefone</th>
                              <th>Email</th>
                              <th>Créditos</th>
                          </thead>
                          <tbody>
                          <?php
                          $id=intval($_GET['id']);
                          $sql=("SELECT * FROM funcionarios where funcionarioId=$id");
                          $result=mysqli_query($con,$sql);
                          while($dados=mysqli_fetch_array($result)){
                          ?>
                          <tr>
                              <td><?php echo $dados['funcionarioId']; ?></td>
                              <td><?php echo $dados['funcionarioNome']; ?></td>
                              <td><?php echo $dados['funcionarioCodigoPostal1']; ?> - <?php echo $dados['funcionarioCodigoPostal2']; ?></td>
                              <td><?php echo $dados['funcionarioTelefone']; ?></td>
                              <td><?php echo $dados['funcionarioEmail']; ?></td>
                              <td><?php echo $dados['funcionarioNIF']; ?></td>
                              <?php } ?>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
              <div class="card ">
                  <div class="card-header ">
                      <h5 class="card-title">Histórico de Formando</h5>
                  </div>
                  <div class="card-body ">
                      <div class="table-responsive">
                          <table class="table">
                              <thead class=" text-primary">
                                  <th>id</th>
                                  <th>Formação</th>
                                  <th>Créditos Ganhos</th>
                                  <th>Horas</th>
                                  <th>Data de Início</th>
                                  <th>Data de Fim</th>

                              </thead>
                              <tbody>
                              <?php
                              $id=intval($_GET['id']);
                              $sql=("SELECT * FROM funcionarios INNER JOIN formacaoinscritos ON funcionarioId=formacaoInscritoFuncionarioId INNER JOIN formacoes ON formacaoInscritoFormacaoId where funcionarioId='".$id."' and formacaoInscritoPapel='formando' group by formacaoId");
                              $result=mysqli_query($con,$sql);
                              while($dados=mysqli_fetch_array($result)){
                              ?>
                              <tr>
                                  <td><?php echo $dados['formacaoId']; ?></td>
                                  <td><?php echo $dados['formacaoNome']; ?></td>
                                  <td><?php echo $dados['formacaoCreditos']; ?></td>
                                  <td><?php echo $dados['formacaoHoras']; ?></td>
                                  <td><?php echo $dados['formacaoDataInicio']; ?></td>
                                  <td><?php echo $dados['formacaoDataFim']; ?></td>
                                  <?php } ?>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="card-footer ">
                      <hr>
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
