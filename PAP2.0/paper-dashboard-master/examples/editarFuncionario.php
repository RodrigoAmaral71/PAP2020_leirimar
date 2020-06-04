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
drawTop();
?>

    <style>
        .preto{
            color: black;
            font-family: Arial;
        }
        .bordas{
            border-color: red;
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
                <h5 class="card-title">Editar Funcionário</h5>
              </div>
                <hr>
              <div class="card-body ">
                  <form action="confirmaEditarFuncionario.php" method="post">
                      <?php
                      $con=mysqli_connect("localhost","root","","pap2020formacao");
                      $id=intval($_GET['id']);
                      $sql=("SELECT * FROM funcionarios where funcionarioId=$id");
                      $result=mysqli_query($con,$sql);
                      $dados=mysqli_fetch_array($result);
                      ?>
                      <div class="form-group row">
                          <input type="hidden"id="id" name="id" value="<?php echo $dados['funcionarioId'] ?>">
                          <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" value="<?php echo $dados['funcionarioNome'] ?>" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Morada" id="morada" name="morada" value="<?php echo $dados['funcionarioMorada'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-1">
                              <input type="text" class="form-control" placeholder="Código" id="cp1" name="cp1" value="<?php echo $dados['funcionarioCodigoPostal1'] ?>">
                          </div>
                          <div class="col-md-1">
                              <input type="text" class="form-control" placeholder="Postal" id="cp2" name="cp2" value="<?php echo $dados['funcionarioCodigoPostal2'] ?>">
                          </div>
                          <div class="col-md-10">
                              <input type="text" class="form-control" placeholder="Localidade" id="localidade" name="localidade" value="<?php echo $dados['funcionarioLocalidade'] ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-5">
                              <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $dados['funcionarioEmail'] ?>">
                          </div>
                          <div class="col-md-2">
                              <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" value="<?php echo $dados['funcionarioTelefone'] ?>" >
                          </div>
                          <div class="col-md-5">
                              <select class="form-control bordas" id="tipo" name="tipo" required>
                                  <option value="-1">Tipo de Funcionário</option>
                                  <option value="1">professor</option>
                                  <option value="2">funcionario</option>
                                  <option value="3">secretaria</option>
                                  <option value="4">administracao</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-3">
                              <input type="text" class="form-control" placeholder="NIF" id="nif" name="nif" value="<?php echo $dados['funcionarioNIF'] ?>">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control" placeholder="IBAN" id="iban" name="iban" value="<?php echo $dados['funcionarioIBAN'] ?>">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control" placeholder="Escalão" id="escalao" name="escalao" value="<?php echo $dados['funcionarioEscalao'] ?>">
                          </div>
                          <div class="col-md-3">
                              <input type="text" class="form-control" placeholder="Grupo Disciplinar" id="gd" name="gd" value="<?php echo $dados['funcionarioGrupoDisciplinar'] ?>">
                          </div>
                      </div>
                      <input type="submit" class="btn btn-success fa fa-plus preto" value="Concluído">
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