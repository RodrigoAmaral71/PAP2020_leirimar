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
drawTop(ADMIN_FORMADORES);
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
                <h5 class="card-title">Inscrições</h5>
              </div>
                <hr>
              <div class="card-body ">
                  <form action="confirmaAdicionarFormador.php" method="post">
                      <div class="form-group row">
                          <div class="col-md-12">
                          <select class="form-control" name="funcionario">
                              <option value="-1">Nome</option>
                              <?php
                                $sql="SELECT * FROM funcionarios";
                                $result=mysqli_query($con,$sql);
                                while($dados=mysqli_fetch_array($result)){
                              ?>
                              <option value="<?php echo $dados['funcionarioId'] ?>"><?php echo $dados['funcionarioNome'] ?></option>
                              <?php
                              }
                              ?>
                          </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-md-12">
                              <select class="form-control" name="formacao">
                                  <option value="-1">Formação</option>
                                  <?php
                                  $sql="SELECT * FROM formacoes";
                                  $result=mysqli_query($con,$sql);
                                  while($dados=mysqli_fetch_array($result)){
                                      ?>
                                      <option value="<?php echo $dados['formacaoId'] ?>"><?php echo $dados['formacaoNome'] ?></option>
                                  <?php
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <input type="submit" class="btn btn-success fa fa-plus" value="Inscrever">
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
