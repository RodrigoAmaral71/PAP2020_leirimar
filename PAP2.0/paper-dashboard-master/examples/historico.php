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
                              <th>Formação</th>
                              <th>Grupo</th>
                              <th>Formação Actual</th>
                              <th>Telefone</th>
                              <th>Email</th>
                              <th>Créditos</th>
                              <th>&nbsp;</th>
                          </thead>
                          <tbody>
                          <tr>
                              <td>1</td>
                              <td>Manuel</td>
                              <td>E. Sec. Pinhal do Rei</td>
                              <td>550-Informática</td>
                              <td>Programação Web</td>
                              <td>912345678</td>
                              <td>manuel@gmail.com</td>
                              <td>XXXX</td>
                              <td><center><a class="btn-sm btn-info" href="#"><i class="fas fa-pencil-alt"></a></i> <a class="btn-sm btn-danger" href="#"><i class='fas fa-eraser'></a></i></center></td>
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
                      <h5 class="card-title">Histórico</h5>
                  </div>
                  <div class="card-body ">
                      <div class="table-responsive">
                          <table class="table">
                              <thead class=" text-primary">
                                  <th>id</th>
                                  <th>Formação</th>
                                  <th>Formador</th>
                                  <th>Créditos Ganhos</th>
                                  <th>&nbsp;</th>
                                  <th>Horas</th>
                                  <th>Data de Início</th>
                                  <th>Data de Fim</th>

                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Programação Web</td>
                                  <td>Manuel</td>
                                  <td>XXXX</td>
                                  <th>&nbsp;</th>
                                  <td>50</td>
                                  <td>1/6/2020</td>
                                  <td>26/6/2020</td>
                                  <td><center><a class="btn-sm btn-light" href="#"><i class="fa fa-print"></i></a> <a class="btn-sm btn-info" href="#"><i class="fas fa-pencil-alt"></a></i> <a class="btn-sm btn-danger" href="#"><i class='fas fa-eraser'></a></i></center></td>
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
