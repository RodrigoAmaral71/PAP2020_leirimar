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
drawTop(ADMIN_ESCOLAS);
?>

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
                <h5 class="card-title">Editar Escola</h5>
              </div>
                <hr>
              <div class="card-body ">
                  <form name="form" action="confirmaEditarEscola.php" method="post">
                      <div class="form-group row">
                          <?php
                          $id=intval($_GET['id']);
                          $sql=("SELECT * FROM escolas where escolaId=$id");
                          $result=mysqli_query($con,$sql);
                          $dados=mysqli_fetch_array($result);
                          ?>
                              <input name="id" id="id" type="hidden" value="<?php echo $dados['escolaId']?>">
                          <div class="col-md-12">
                              Nome: <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['escolaNome']?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              Morada: <input type="text" class="form-control" id="morada" name="morada" value="<?php echo $dados['escolaMorada']?>">
                          </div>
                      </div>
                      <div class="form-group row">
                           <div class="col-md-12">
                             Localidade: <input type="text" class="form-control" id="localidade" name="localidade" value="<?php echo $dados['escolaLocalidade']?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-6">
                              Codigo: <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $dados['escolaCodigo']?>">
                          </div>
                          <div class="col-md-6">
                              Telefone: <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $dados['escolaTelefone']?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              Email: <input type="text" class="form-control" id="email" name="email" value="<?php echo $dados['escolaEmail']?>">
                          </div>
                      </div>
                      <div class="form-group row">

                          <div class="col-md-2">
                              Código Postal:<input type="text" class="form-control" id="cp1" name="cp1" value="<?php echo $dados['escolaCodigoPostal1']?>">
                          </div>
                          <div class="col-md-1">
                               <input type="text" class="form-control" id="cp2" name="cp2" value="<?php echo $dados['escolaCodigoPostal2']?>">
                          </div>
                      </div>
                      <input name="0" type="submit" class="btn btn-success fa fa-plus preto" value="Confirmar">
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