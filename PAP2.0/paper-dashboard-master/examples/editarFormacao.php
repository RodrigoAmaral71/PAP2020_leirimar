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
drawTop(ADMIN_FORMACOES);
?>

    <style>
        .preto{
            color: black;
            font-family: Arial;
        }
    </style>

  <div class="wrapper ">

    <div class="main-panel">

      <!-- End Navbar -->
      <!-- FORMADORES -->
      <div class="content">

        <!-- Gráfico -->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Editar Formação</h5>
              </div>
                <hr>
              <div class="card-body ">
                  <form action="confirmaEditarFormacao.php" method="post">
                      <?php
                      $con=mysqli_connect("localhost","root","","pap2020formacao");
                      $id=intval($_GET['id']);
                      $sql=("SELECT * FROM formacoes where formacaoId=$id");
                      $result=mysqli_query($con,$sql);
                      $dados=mysqli_fetch_array($result);
                      ?>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="<?php echo $dados['formacaoNome'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-10">
                              <input type="text" class="form-control" placeholder="Publico Alvo" id="publico" name="publico" value="<?php echo $dados['formacaoPublicoAlvo'] ?>">
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control" placeholder="Horas" id="horas" name="horas" value="<?php echo $dados['formacaoHoras'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-6">
                              <label for="dataInicio">Data de Início</label>
                              <input type="date" class="form-control" id="dataInicio" name="dataInicio" value="<?php echo $dados['formacaoDataInicio'] ?>">
                          </div>
                          <div class="col-md-6">
                              <label for="dataFim">Data de Fim</label>
                              <input type="date" class="form-control" id="dataFim" name="dataFim" value="<?php echo $dados['formacaoDataFim'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Local" id="local" name="local" value="<?php echo $dados['formacaoLocal'] ?>">
                          </div>
                          <div class="col-md-6">
                              <select class="form-control" id="estado" name="estado" required>
                                  <option value="-1">Estado</option>
                                  <?php
                                  $sql=("SELECT * FROM formacoes");
                                  $result=mysqli_query($con,$sql);
                                  while($dados=mysqli_fetch_array($result)){
                                      ?>
                                      <option value="<?php echo $dados['formacaoEstado']; ?>"><?php echo $dados['formacaoEstado'] ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Créditos" id="creditos" name="creditos"value="<?php echo $dados['formacaoCreditos'] ?>" >
                          </div>
                          <div class="col-md-6">
                              <select class="form-control" id="anoletivo" name="anoletivo" required>
                                  <option value="-1">Ano Letivo</option>
                                  <?php
                                  $sql=("SELECT * FROM formacoes inner join anolectivos on formacaoAnoLectivoId=anoLectivoId group by formacaoAnoLectivoId");
                                  $result=mysqli_query($con,$sql);
                                  while($dados=mysqli_fetch_array($result)){
                                      ?>
                                      <option value="<?php echo $dados['formacaoAnoLectivoId']; ?>"><?php echo $dados['anoLectivoNome'] ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Descrição" id="descricao" name="descricao">
                          </div>
                      </div>
                      <input type="submit" class="btn btn-success fa fa-plus preto" value="Adicionar">
                  </form>
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