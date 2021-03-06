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
drawTop(ADMIN_PESSOAS);
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
                <h5 class="card-title">Editar Tipos de Perfil</h5>
              </div>
                <hr>
              <div class="card-body ">
                  <?php
                  $id=intval($_GET['id']);
                  $sql=("SELECT * FROM funcionariotipos where funcionarioTipoId=$id");
                  $result=mysqli_query($con,$sql);
                  $dados=mysqli_fetch_array($result);
                  echo mysqli_error($con);
                  ?>
                  <form name="form" action="confirmaEditarPerfil.php" method="post">
                      <div class="form-group row">
                              <input name="id" id="id" type="hidden" value="<?php echo $dados['funcionarioTipoId']?>">
                          <div class="col-md-12">
                              <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['funcionarioTipoNome']?>">
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